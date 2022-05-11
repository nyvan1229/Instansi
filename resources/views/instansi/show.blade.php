@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Show Instansi</div>
                <div class="card-body">

                    <div class="card-body">
                        <h5 class="card-text">Instansi : {{ $instansi->instansi }}</h5>
                        <h5 class="card-text">Deskripsi : {{ $instansi->deskripsi }}</h5>
                    </div>

                    </hr>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="/instansi" class="btn btn-warning">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection