@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">


            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Replacement Class {{ $replaceclass->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/replaceclass') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/replaceclass/' . $replaceclass->id . '/edit') }}" title="Edit replaceclass"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/replaceclass' . '/' . $replaceclass->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete replaceclass" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <a href="{{ url('admin/replaceclass/cetak_pdf' ) }}" title="Print replaceclass"><button class="btn btn-warning btn-sm"><i class="fa fa-print" aria-hidden="true"></i> Print</button></a>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $replaceclass->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> Nama Lengkap </th><td> {{ $replaceclass->nama_lengkap }} </td>
                                    </tr>
                                    <tr>
                                        <th> Mata Kuliah </th><td> {{ $replaceclass->mata_kuliah }} </td>
                                    </tr>
                                    <tr>
                                        <th> Kelas </th><td> {{ $replaceclass->kelas }} </td>
                                    </tr>
                                    <tr>
                                        <th> Jadwal Kuliah </th><td> {{ $replaceclass->jadwal_kuliah }} </td>
                                    </tr>
                                    <tr>
                                        <th> Jam Kuliah </th><td> {{ $replaceclass->jam_kuliah }} </td>
                                    </tr>
                                    <tr>
                                        <th> Jadwal Replacement </th><td> {{ $replaceclass->tanggal_replacement }} </td>
                                    </tr>
                                    <tr>
                                        <th> Jam Replacement</th><td> {{ $replaceclass->jam_replacement }} </td>
                                    </tr>
                                    <tr>
                                        <th> Alasan </th><td> {{ $replaceclass->alasan }} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
