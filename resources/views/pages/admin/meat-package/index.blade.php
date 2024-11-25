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
        @endif
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Paket Daging</h1>
        </div>

        <div class="row">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" collspacing="0">
                        <thead>
                            <tr>
                                <?php $no = 1; ?>
                                <th>No</th>
                                <th>title</th>
                                <th>type</th>
                                <th>status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    {{-- <td>{{ $item->id }}</td> --}}
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->type }}</td>
                                    @if ($item->status == 'pendding')
                                        <td>Pengajuan</td>
                                    @elseif ($item->status == 'aproved')
                                        <td>Di setujui</td>
                                    @elseif ($item->status == 'denied')
                                        <td>Di tolak</td>
                                    @endif
                                    @if ($item->status == 'pendding')
                                        <td>
                                            <a href="{{ route('approve.meat.package', $item->id) }}" class="btn btn-info">
                                                Terima
                                            </a>
                                            <a href="{{ route('denied.meat.package', $item->id) }}" class="btn btn-danger">
                                                Tolak
                                            </a>
                                        </td>
                                    @else
                                        <td>
                                            -
                                        </td>
                                    @endif

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
                <div class="d-flex justify-content-end">
                    {{ $items->links() }}
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
