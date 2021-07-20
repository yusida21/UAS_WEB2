@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Mata Kuliah
                    <a href="{{ route('tambah.makul') }}" class="float-right btn btn-dark btn-md"><i class="fa fa-fw fa-plus-circle"></i>Tambah Data</a></div>
                <div class="card-body">
                   <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>No.</th>
                            <th>KODE MATA KULIAH</th>
                            <th>NAMA MATA KULIAH</th>
                            <th>SKS MATA KULIAH</th>
                            <th>AKSI</th>
                        </tr>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($makul as $m)
                        <tr>
                        <td style="text-align: center;">{{ $no++ }}</td>
                        <td>{{ $m->kd_makul }}</td>
                        <td>{{ $m->nama_makul }}</td>
                        <td>{{ $m->sks }}</td>
                        <td>
                            <a href="{{ route('edit.makul', $m->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                            <a href="{{ route('hapus.makul', $m->id) }}" class="btn btn-sm btn-danger">HAPUS</a>
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