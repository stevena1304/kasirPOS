@extends('layout.body')
@section('title', 'Products')
@section('content')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-lg-12">
                        <h1 class="m-0">Products</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="card shadow">
                    <div class="card-header">
                        <h4>Product List</h4>
                    </div>
                    <div class="card-body">
                        <div class="col-lg-12">
                            <button class="btn btn-md btn-success mb-3" data-toggle="modal" data-target="#tambahProduct">Add
                                Product</button>
                            <table class="table table-striped">
                                <thead class="table-primary">
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Category</th>
                                    <th>Harga</th>
                                    <th>Stock</th>
                                    <th>Barcode</th>
                                    <th>Foto</th>
                                    <th>Action</th>
                                </thead>

                                <tbody>
                                    @if ($product->isEmpty())
                                        <tr>
                                            <td colspan="8" class="text-center">
                                                <h3>--Belum Ada Product--</h3>
                                            </td>
                                        </tr>
                                    @else
                                        @foreach ($product as $p)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $p->nama_produk }}</td>
                                                <td>{{ $p->category->category }}</td>
                                                <td>Rp {{ number_format($p->harga, 0, ',', '.') }}</td>
                                                <td>{{ $p->stok }}</td>
                                                <td>
                                                    <div>
                                                        {!! $p->barcode !!}
                                                    </div>
                                                    <div style="margin-left: 35px; font-family: 'Courier New', monospace;">
                                                        {{ $p->kode_produk }}
                                                    </div>
                                                </td>
                                                <td><img src="{{ asset('product/' . $p->foto) }}" width="100px"></td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-lg-3 mr-1">
                                                            <button class="btn btn-sm btn-warning edit-product mr-3"
                                                                data-toggle="modal" data-target="#editProduct"
                                                                data-id="{{ $p->id }}">Edit</button>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <form action="" id="deleteProductForm">
                                                                @csrf
                                                                <button class="btn btn-sm btn-danger delete-product"
                                                                    data-id="{{ $p->id }}">Hapus</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card shadow">
                    <div class="card-header">
                        <h4>Category List</h4>
                    </div>
                    <div class="card-body">
                        <div class="col-lg-12">
                            <button class="btn btn-md btn-success mb-3" data-toggle="modal"
                                data-target="#tambahCategory">Add
                                Category</button>
                            <table class="table table-striped">
                                <thead class="table-primary">
                                    <th>No.</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </thead>

                                <tbody>
                                    @if ($category->isEmpty())
                                        <tr>
                                            <td colspan="3" class="text-center">
                                                <h3>--Belum Ada Category--</h3>
                                            </td>
                                        </tr>
                                    @else
                                        @foreach ($category as $c)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $c->category }}</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-lg-2">
                                                            <button class="btn btn-sm btn-warning edit-category"
                                                                data-toggle="modal" data-target="#editCategory"
                                                                data-id="{{ $c->id }}">Edit</button>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <form action="" id="deleteCategoryForm">
                                                                @csrf
                                                                <button class="btn btn-sm btn-danger delete-category"
                                                                    data-id="{{ $c->id }}">Hapus</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @include('product.modal')

@endsection
