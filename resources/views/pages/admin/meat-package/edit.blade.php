@extends('layouts.admin')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Paket Daging {{ $item->title }}</h1>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="card shadow">
    <div class="card-body">
        <form action="{{ route('meat-package.update', $item->id) }}" method="post">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $item->title }}">
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <input type="text" class="form-control" name="type" placeholder="Type" value="{{ $item->type }}">
            </div>
            <div class="form-group">
                <label for="about">About</label>
                <textarea name="about" rows="10" class="d-block w-100 from-control">{{ $item->about }}</textarea>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" name="price" placeholder="price" value="{{ $item->price }}">
            </div>
            <button class="btn btn-primary btn-block" type="submit">
                Ubah
            </button>
        </form>
    </div>
</div>

</div>
<!-- /.container-fluid -->
@endsection