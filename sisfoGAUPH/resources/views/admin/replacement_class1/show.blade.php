<?php
    use App\Models\replacement_class;
?>
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">


            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Replacement Class {{ $replacement_class->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/replacement_class') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/replacement_class/' . $replacement_class->id . '/edit') }}" title="Edit replacement_class"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        
                        <form method="POST" action="{{ url('admin/replacement_class' . '/' . $replacement_class->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete replacement_class" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button> 
                        </form>
                        <a href="{{ url('admin/replacement_class/cetak_pdf' ) }}" title="Print replacement_class"><button class="btn btn-warning btn-sm"><i class="fa fa-print" aria-hidden="true"></i> Print</button></a>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $replacement_class->id }}</td>
                                    </tr>
                                    <tr><th> Nama Lengkap </th><td> {{ $replacement_class->nama_lengkap }} </td></tr><tr><th> Mata Kuliah </th><td> {{ $replacement_class->mata_kuliah }} </td></tr><tr><th> Kelas </th><td> {{ $replacement_class->kelas }} </td></tr> <tr><th> Jadwal Kuliah </th><td> {{ $replacement_class->jadwal_kuliah }} </td></tr><tr><th> Jam Kuliah </th><td> {{ $replacement_class->jam_kuliah }} </td></tr><tr><th> Tanggal Replacement </th><td> {{ $replacement_class->tanggal_replacement }} </td></tr><tr><th> Jam Replacement </th><td> {{ $replacement_class->jam_replacement }} </td></tr> <tr><th> Alasan </th><td> {{ $replacement_class->alasan }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
