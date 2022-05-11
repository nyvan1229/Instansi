@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Edit Instansi</div>
                <div class="card-body">

                    <form action="{{ url('/instansi/' .$instansi->id) }}" method="post">
                        {!! csrf_field() !!}
                        @method("PATCH")
                        <input type="hidden" name="id" id="id" value="{{$instansi->id}}" id="id" />
                        <label>Instansi</label></br>
                        <input type="text" name="instansi" id="instansi" value="{{$instansi->instansi}}"
                            class="form-control"></br>
                        <label>Deskripsi</label></br>
                        <input type="text" name="deskripsi" id="deskripsi" value="{{$instansi->deskripsi}}"
                            class="form-control"></br>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                          <input type="submit" value="Update" class="btn btn-success">
                          <a href="/instansi" class="btn btn-warning">Back</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@stop