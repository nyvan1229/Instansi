@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">Instansi Create</div>
            <div class="card-body">

                <form action="{{ url('/instansi') }}" method="post">
                    {!! csrf_field() !!}
                    <label>Instansi</label></br>
                    <input type="text" name="instansi" id="instansi" class="form-control"></br>
                    <label>Deskripsi</label></br>
                    <textarea type="text" name="deskripsi" id="deskripsi" class="form-control"> </textarea></br>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <input type="submit" value="Save" class="btn btn-success">
                    <a href="/instansi" class="btn btn-warning content-end">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
