<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\replaceclass;
use Illuminate\Http\Request;
use PDF;

class replaceclassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $replaceclass = replaceclass::where('nama_lengkap', 'LIKE', "%$keyword%")
                ->orWhere('mata_kuliah', 'LIKE', "%$keyword%")
                ->orWhere('kelas', 'LIKE', "%$keyword%")
                ->orWhere('jadwal_kuliah', 'LIKE', "%$keyword%")
                ->orWhere('jam_kuliah', 'LIKE', "%$keyword%")
                ->orWhere('tanggal_replacement', 'LIKE', "%$keyword%")
                ->orWhere('jam_replacement', 'LIKE', "%$keyword%")
                ->orWhere('alasan', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $replaceclass = replaceclass::latest()->paginate($perPage);
        }

        return view('admin.replaceclass.index', compact('replaceclass'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.replaceclass.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        replaceclass::create($requestData);

        return redirect('admin/replaceclass')->with('flash_message', 'replaceclass added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $replaceclass = replaceclass::findOrFail($id);

        return view('admin.replaceclass.show', compact('replaceclass'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $replaceclass = replaceclass::findOrFail($id);

        return view('admin.replaceclass.edit', compact('replaceclass'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $replaceclass = replaceclass::findOrFail($id);
        $replaceclass->update($requestData);

        return redirect('admin/replaceclass')->with('flash_message', 'replaceclass updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        replaceclass::destroy($id);

        return redirect('admin/replaceclass')->with('flash_message', 'replaceclass deleted!');
    }

    public function cetak_pdf()
    {
        $replaceclass = replaceclass::all();

        $pdf = PDF::loadview('admin/replaceclass/cetak_pdf',['replaceclass'=>$replaceclass]);
        return $pdf->download('Replacement Class.pdf');
    } 

}
