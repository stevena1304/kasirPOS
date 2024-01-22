@extends('layout.body')
@section('title', 'Products')
@section('content')

    <div class="card">
        <div class="card-body">
            <div class="col-lg-12">
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
                            <div class="row">
                                <div class="col-lg-9">
                                    <button class="btn btn-md btn-success mb-3" data-toggle="modal"
                                        data-target="#tambahProduct">Add Product</button>
                                    <table class="table table-striped">
                                        <thead class="table-primary">
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>Category</th>
                                            <th>Harga</th>
                                            <th>Foto</th>
                                            <th>Action</th>
                                        </thead>

                                        <tbody>
                                            @foreach ($product as $p)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $p->nama_produk }}</td>
                                                    <td>{{ $p->category->category }}</td>
                                                    <td>{{ $p->harga }}</td>
                                                    <td><img src="{{ asset('product/' . $p->foto) }}" width="100px"></td>
                                                    <td>
                                                        <a href="{{ route('products.edit', $p->id) }}"><button
                                                                class="btn btn-sm btn-warning">Edit</button></a>
                                                        <a href="{{ route('products.destroy', $p->id) }}"><button
                                                                class="btn btn-sm btn-danger">Hapus</button></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-lg-3">
                                    <button class="btn btn-md btn-success mb-3" data-toggle="modal"
                                        data-target="#tambahCategory">Add Category</button>
                                    <table class="table table-striped">
                                        <thead class="table-primary">
                                            <th>Category</th>
                                            <th>Action</th>
                                        </thead>

                                        <tbody>
                                            @foreach ($category as $c)
                                                <tr>
                                                    <td>{{ $c->category }}</td>
                                                    <td>
                                                        <a href="{{ route('category.edit', $c->id) }}"><button
                                                                class="btn btn-sm btn-warning">Edit</button></a>
                                                        <a href="{{ route('category.destroy', $c->id) }}"><button
                                                                class="btn btn-sm btn-danger">Hapus</button></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="tambahProduct" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label for="nama_product">Nama Product : </label>
                            <input class="form-control" type="text" name="nama_product" id="nama_product">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga Product : </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp</span>
                                </div>
                                <input class="form-control" type="number" min="1" name="harga" id="harga">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="category_id">Category Product : </label>
                            <select class="form-select form-control" name="category_id" id="category_id">
                                <option>Select Category</option>
                                @foreach ($category as $c)
                                    <option value="{{ $c->id }}">{{ $c->category }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto Product : </label>
                            <input class="form-control-file" type="file" name="foto" id="foto">
                        </div>
                    </div>
                    <div class="modal-footer">"
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="tambahCategory" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label for="category">Nama Category : </label>
                            <input class="form-control" type="text" name="category" id="category">
                        </div>
                    </div>
                    <div class="modal-footer">"
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
