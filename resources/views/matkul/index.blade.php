@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <b>Table Data Matkul</b>
                </div>

                <div class="card-body">
                <a href="{{ route('add.matkul') }}" class="btn btn-success btn-md float-right">Add Data</a><br><br>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <tr class="bg-light">
                                <th style="text-align:center;">No ID</th>
                                <th>Kode Matkul</th>
                                <th>Nama Matkul</th>
                                <th>SKS</th>
                                <th style="width:150px; text-align:center;">Aksi</th>
                            </tr>
                            @foreach ($matkul as $mtk)  
                            <tr>
                                <td style="text-align:center;">{{ $mtk->id }}</td>
                                <td>{{ $mtk->kode_matkul }}</td>
                                <td>{{ $mtk->nama_matkul }}</td>
                                <td>{{ $mtk->sks }}</td>
                                <td style="text-align:center;">
                                    <a href="{{ route('edit.matkul', $mtk->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="{{ route('delete.matkul', $mtk->id) }}" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
