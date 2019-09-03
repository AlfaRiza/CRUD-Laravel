@extends('layout/main')

@section('title','Daftar Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1 class="mt-3">Daftar Students</h1>
            <a href="{{url('/students/create')}}" class="btn btn-primary mt-3 mb-3">Tambah Mahasiswa</a>
            @if(session('status'))
                <div class="alert alert-success">
                {{session('status')}}
                </div>
            @endif
            <ul class="list-group">
            @foreach ($student as $std)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                {{$std->nama}}
                    <a href="/students/{{$std->id}}" class="badge badge-info">Detail</a>
                </li>
            @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
