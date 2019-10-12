@extends('layout/main')

@section('title','Daftar Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1 class="mt-3">Form Ubah Data</h1>
            <form method="post" action="/students/{{ $student->id }}">
            @method('patch')
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" placeholder="Masukkan Nama" value="{{ $student->nama }}">
                @error('nama')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" id="nim" placeholder="Masukkan NIM" value="{{ $student->nim }}">
                @error('nim')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Masukkan Email" value="{{ $student->email }}">
                @error('email')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Ubah</button>
            <!-- <button type="reset" class="btn btn-danger">Reset</button> -->
            </form>
        </div>
    </div>
</div>
@endsection
