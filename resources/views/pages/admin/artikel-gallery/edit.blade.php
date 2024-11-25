@extends('layouts.admin')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Gallery</h1>
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
        <form action="{{ route('artikel-gallery.update', $item->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="artikel_packages_id">Paket Daging</label>
                <select name="artikel_packages_id" required class="form-control">
                    <option value="{{ $item->artikel_packages_id }}">Jangan Diubah</option>
                    @foreach($artikel_packages as $artikel_package)
                    <option value="{{ $artikel_package->id }}">
                        {{ $artikel_package->title }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" name="image" placeholder="Image">
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