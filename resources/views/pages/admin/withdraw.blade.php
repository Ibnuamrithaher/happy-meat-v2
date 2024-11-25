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
            <h1 class="h3 mb-0 text-gray-800">Penarikan Saldo</h1>
        </div>

        <div class="row">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" collspacing="0">
                        <thead>
                            <tr>
                                <?php $no = 1; ?>
                                <th>No</th>
                                <th>Bank</th>
                                <th>Nomo Rekening</th>
                                <th>Nama</th>
                                <th>total</th>
                                <th>status</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                                <td>{{ $no++ }}</td>
                                <td>{{ $item->bank }}</td>
                                <td>{{ $item->no_rekening }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->total }}</td>
                                <td>{{ $item->status }}</td>
                                <td>
                                    @if ($item->status == 'pendding')
                                        <div class="d-flex">
                                            <button data-id="{{ $item->id }}" type="button"
                                                class="mx-2 btn btn-sm btn-primary shadow sm btn-prosses"
                                                data-toggle="modal" data-target="#exampleModal">
                                                prosses
                                            </button>
                                            <a href="{{ route('admin.withdraw.tolak', $item->id) }}"
                                                class="btn btn-sm btn-danger">tolak</a>
                                        </div>
                                    @elseif ($item->status == 'approve')
                                        <a href="{{ asset('storage/'.$item->patch) }}">Lihat Bukti Transfer</a>
                                    @else
                                        -
                                    @endif

                                </td>
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


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tarik Saldo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{ route('admin.withdraw.terima') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" name="item_id" id="item_id" value="">
                        <!-- Input hidden untuk ID item -->
                        <div class="form-group">
                            <label for="patch">Upload bukti transaksi</label>
                            <input type="file" accept=".jpg,.pdf,.jpeg,.png" class="form-control" id="patch" name="patch"
                                aria-describedby="bank">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
<script>
    $(document).ready(function() {
        $('.btn-prosses').on('click',function(){
            $('#item_id').val($(this).data('id'));
        })
    })
</script>
@endsection
