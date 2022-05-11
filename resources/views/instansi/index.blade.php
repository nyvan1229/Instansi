@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h2>Instansi</h2>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <a href="{{ url('/instansi/create') }}" class="btn btn-success btn-sm" title="Add Instansi">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add
                        </a>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <form class="form" method="get" action="">
                            <div class="form-group w-100 mb-3">
                                <label for="search" class="d-block mr-2">Pencarian</label>
                                <input type="text" name="search" class="form-control w-75 d-inline" id="search"
                                    placeholder="Masukkan keyword">
                                <button type="submit" class="btn btn-primary mb-1">Cari</button>
                            </div>
                        </form>
                    </div>
                    <br />
                    <br />
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Instansi</th>
                                    <th>Deskripsi</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($instansi as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->instansi }}</td>
                                    <td>{{ $item->deskripsi }}</td>
                                    <td>
                                        <a href="{{ url('/instansi/' . $item->id) }}" title="View instansi"><button
                                                class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>
                                                View</button></a>
                                        <a href="{{ url('/instansi/' . $item->id . '/edit') }}"
                                            title="Edit instansi"><button class="btn btn-primary btn-sm"><i
                                                    class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                Edit</button></a>
                                        <form method="POST" action="{{ url( '/instansi' .'/'. $item->id) }}"
                                            accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete instansi"
                                                onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                    class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection