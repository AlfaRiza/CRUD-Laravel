@extends('layout/main')

@section('title','Daftar Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1 class="mt-3">Detail Students</h1>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$student->nama}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$student->nim}}</h6>
                    <p class="card-text">{{$student->email}}</p>
                    <button type="submit" class="btn btn-primary">Edit</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                    <a href="{{ url('/students') }}" class="card-link">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
