@extends('layouts.admin')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Artikel {{ $item->title }}</h1>
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
        <form action="{{ route('artikel-package.update', $item->id) }}" method="post">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $item->title }}">
            </div>
            <div class="form-group">
                <label for="writer">Writer</label>
                <input type="text" class="form-control" name="writer" placeholder="Writer" value="{{ $item->writer }}">
            </div>
            <div class="form-group">
                <label for="publish">Publish</label>
                <input type="text" class="form-control" name="publish" placeholder="Publish" value="{{ $item->publish }}">
            </div>
            <div class="form-group">
                <label for="desc">Desc</label>
                <textarea name="desc" rows="10" class="d-block w-100 from-control">{{ $item->desc }}</textarea>
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