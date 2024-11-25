@extends('layouts.admin')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Video Tutorial</h1>
    <a href="{{ route('video-tutorial.create') }}" class="btn btn-sm btn-primary shadow sm">
        <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Video Tutorial
    </a>
</div>

<div class="row">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" collspacing="0">
                <thead>
                    <tr>
                        <?php $no = 1 ?>
                        <th>No</th>
                        <th>Title</th>
                        <th>Creator</th>
                        <th>Publish</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($items as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->creator }}</td>
                        <td>{{ $item->publish }}</td>
                        <td>
                            <a href="{{ route('video-tutorial.edit', $item->id) }}" class="btn btn-info">
                                <i class="fa fa-pencil-alt"></i>
                            </a>
                            <form action="{{ route('video-tutorial.destroy', $item->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center">
                            Data Kosong
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->
@endsection