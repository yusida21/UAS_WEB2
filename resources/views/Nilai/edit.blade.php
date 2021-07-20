@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Data Nilai</div>
                <div class="card-body">
                    <form action="{{ route('update.nilai', $nilai->id) }}" method="POST" class="form-item">
                        @csrf
                        <div class="form-group">
                            <label for="mahasiswa_id">Nama Mahasiswa</label>
                            <select name="mahasiswa_id" id="mahasiswa_id" class="form-control col-md-9" >
                                <option value="" disabled selected>--Pilih User--</option>
                               @foreach ($mahasiswa as $mhs)
                                    <option value="{{ $mhs->id }}" {{ $nilai->mahasiswa_id == $mhs->id ? 'selected' : '' }} >{{ $mhs->user->name }}</option>
                                @endforeach
                           </select>
                        </div>

                        <div class="form-group">
                            <label for="makul">Nama Makul</label>
                            <select name="makul_id" id="makul_id" class="form-control col-md-9" >
                                <option value="" disabled selected>--Pilih User--</option>
                               @foreach ($makul as $m)
                                    <option value="{{ $m->id }}" {{ $nilai->makul_id == $m->id ? 'selected' : '' }} >{{ $m->nama_makul }}</option>
                                @endforeach
                           </select>
                        </div>

                        <div class="form-group">
                            <label>Nilai</label>
                            <input type="number" name="nilai" class="form-control col-md-9" placeholder="Tambahkan No Telepon" value="{{ is_null($nilai) ? '' : $nilai->nilai }}">
                        </div>

                        <td>
                            <button class="btn btn-sm btn-primary" type="submit">SAVE</button>
                            <a href="{{ route('nilai') }}" class="btn btn-sm btn-danger">CANCEL</a>
                        </td><br><br>
                        </tr>
                
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection