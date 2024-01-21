@extends('layout.body')
@section('title', 'Product')
@section('content')

    <div class="card">
        <div class="card-body">
            <div class="col-lg-12">
                <div class="content-wrapper">
                    <div class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                                <div class="col-lg-12">
                                    <h1 class="m-0">Product</h1>
                                </div><!-- /.col -->
                            </div><!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </div>

                    <section class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-9">
                                    <table class="table table-striped">
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Category</th>
                                        <th>Harga</th>
                                        <th>Foto</th>
                                        <th>Action</th>
                                    </table>
                                </div>
                                <div class="col-lg-3">
                                    <table class="table table-striped">
                                        <th>Category</th>
                                        <th>Action</th>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

@endsection
