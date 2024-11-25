@extends('layouts.admin')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Video Tutorial</h1>
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
        <form action="{{ route('video-tutorial.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Title" value="{{ old('title') }}">
            </div>
            <div class="form-group">
                <label for="resource">Resource</label>
                <input type="text" class="form-control" name="resource" placeholder="resource (URL Video)" value="{{ old('resource') }}">
            </div>
            <div class="form-group">
                <label for="creator">Creator</label>
                <input type="text" class="form-control" name="creator" placeholder="creator" value="{{ old('creator') }}">
            </div>
            <div class="form-group">
                <label for="publish">Publish</label>
                <input type="text" class="form-control" name="publish" placeholder="Publish" value="{{ old('publish') }}">
            </div>
            <div class="form-group">
                <label for="desc">Desc</label>
                <textarea name="desc" rows="10" class="d-block w-100 from-control">{{ old('desc') }}</textarea>
            </div>
            <button class="btn btn-primary btn-block" type="submit">
                Simpan
            </button>
        </form>
    </div>
</div>

</div>
<!-- /.container-fluid -->
@endsection