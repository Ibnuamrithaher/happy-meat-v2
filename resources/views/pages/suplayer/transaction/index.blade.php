@extends('layouts.suplayer')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Transaksi</h1>
</div>

<div class="row">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" collspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Daging</th>
                        <th>User</th>
                        <th>Total</th>
                        <th>Ongkir</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1 ?>
                    @forelse ($items as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->meat_package->title }}</td>
                        <td>{{ $item->user['name'] ?? 0 }}</td>
                        <td>{{ $item->transaction_total }}</td>
                        <td>{{ $item->ongkir }}</td>
                        <td>{{ $item->transaction_status }}</td>
                        <td>
                            <a href="{{ route('suplayer.list-order.show', $item->id) }}" class="btn btn-primary">
                                <i class="fa fa-eye"></i>
                            </a>
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
