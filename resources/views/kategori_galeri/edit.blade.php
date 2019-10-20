@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info" button class="btn btn-primary">Tambah Kategori galeri</div>
          
                <div class="card-body">                   
                    {!! Form::model($kategori_galeri, ['route' => ['kategori_galeri.update', $kategori_galeri->id],'method'=>'patch']) !!}
                        
                        @include('kategori_galeri.form')
                    
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
     </div>
@endsection