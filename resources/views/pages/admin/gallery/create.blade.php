@extends('layouts.admin')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Gallery</h1>
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
        <form action="{{ route('gallery.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="meat_packages_id">Paket Daging</label>
                <select name="meat_packages_id" required class="form-control">
                    <option value="">Pilih Paket Daging</option>
                    @foreach($meat_packages as $meat_package)
                    <option value="{{ $meat_package->id }}">
                        {{ $meat_package->title }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" name="image" placeholder="Image">
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