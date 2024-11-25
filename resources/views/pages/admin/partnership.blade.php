@extends('layouts.admin')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session('success') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @elseif(session()->has('errorss'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{ session('errorss') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @elseif (session()->has('errors'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        @if ($errors->any())
        @foreach ($errors->all() as $error)
        <strong>{{ $error }}</strong>
        @endforeach
        @endif
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Partnership</h1>
    </div>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" collspacing="0">
                    <thead>
                        <tr>
                            <?php $no = 1; ?>
                            <th>No</th>
                            <th>name</th>
                            <th>email</th>
                            <th>roles</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->roles }}</td>
                                <td>
                                    @if ($item->roles == 'MITRA')
                                    <div class="d-flex">
                                        <a href="{{ route('partnership.terima', $item->id) }}" class="btn btn-sm btn-primary">Terima</a>
                                        <a href="{{ route('partnership.tolak', $item->id) }}" class="btn btn-sm btn-danger">Tolak</a>
                                    </div>
                                    @else
                                    -
                                    @endif

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-end">
                {{ $items->links() }}
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection
@section('js')
<script>
    $(document).ready(function() {

    })
</script>
@endsection
