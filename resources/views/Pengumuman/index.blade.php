@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pengumuman</div>
                <div class="card-body">
                <table class="table table-bordered">
                    <thead class="bg-danger">
                         <a href="{!! route('Pengumuman.create') !!}" class="btn btn-primary">Tambah Data</a>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">judul</th>
                        <th scope="col">isi</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Users Id</th>
                        <th scope="col">Create</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $Pengumuman as $item)
                       <tr>
                        <td>{!! $item->id !!}</td>
                        <td>{!! $item->judul !!}</td>
                        <td>{!! $item->isi !!}</td>
                        <td>{!! $item->kategori_pengumuman_id !!}</td>
                        <td>{!! $item->users_id !!}</td>
                        <td>{!! $item->created_at->format('d/m/Y H:i:s') !!}</td>
                        <td>
                         <a href="{!! route('Pengumuman.show',[$item->id]) !!}"class="btn btn-success">Lihat</a>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
		@endsection