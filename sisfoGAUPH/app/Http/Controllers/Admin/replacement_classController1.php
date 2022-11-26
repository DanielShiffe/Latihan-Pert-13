<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\replacement_class;
use Illuminate\Http\Request;
use PDF;

class replacement_classController extends Controller
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
            $replacement_class = replacement_class::where('nama_lengkap', 'LIKE', "%$keyword%")
                ->orWhere('mata_kuliah', 'LIKE', "%$keyword%")
                ->orWhere('kelas', 'LIKE', "%$keyword%")
                ->orWhere('jadwal_kuliah', 'LIKE', "%$keyword%")
                ->orWhere('jam_kuliah', 'LIKE', "%$keyword%")
                ->orWhere('tanggal_replacement', 'LIKE', "%$keyword%")
                ->orWhere('jam_replacement', 'LIKE', "%$keyword%")
                ->orWhere('alasan', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $replacement_class = replacement_class::latest()->paginate($perPage);
        }

        return view('admin.replacement_class.index', compact('replacement_class'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.replacement_class.create');
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
        
        replacement_class::create($requestData);

        return redirect('admin/replacement_class')->with('flash_message', 'replacement_class added!');
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
        $replacement_class = replacement_class::findOrFail($id);

        return view('admin.replacement_class.show', compact('replacement_class'));
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
        $replacement_class = replacement_class::findOrFail($id);

        return view('admin.replacement_class.edit', compact('replacement_class'));
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
        
        $replacement_class = replacement_class::findOrFail($id);
        $replacement_class->update($requestData);

        return redirect('admin/replacement_class')->with('flash_message', 'replacement_class updated!');
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
        replacement_class::destroy($id);

        return redirect('admin/replacement_class')->with('flash_message', 'replacement_class deleted!');
    }

    public function cetak_pdf()
    {
        $replacement_class = replacement_class::all();

        $pdf = PDF::loadview('admin/replacement_class/cetak_pdf',['replacement_Class'=>$replacement_class]);
        return $pdf->download('admin.replacement_class.cetak_pdf', );
        
    }

}
