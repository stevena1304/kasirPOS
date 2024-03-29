@extends('layout.body')
@section('title', 'Dashboard')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-lg-12">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card shadow">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="m-0" id="displayText">Status : </h4>
                            </div>
                            <div class="col-md-6">
                                <label class="switch">
                                    <input type="checkbox" id="myCheckbox">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Small boxes (Stat box) -->
                        <div class="row">
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h3>150</h3>

                                        <p>Today's Orders</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-bag"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">More info
                                        <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-success">
                                    <div class="inner">
                                        <h3>53</h3>

                                        <p>Total Order</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-checkmark"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-warning">
                                    <div class="inner">
                                        <h3>Rp. 44</h3>

                                        <p>Today's Income</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-cash"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-danger">
                                    <div class="inner">
                                        <h3>Rp. 65</h3>

                                        <p>Total Income</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-cash"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
                        </div>
                        <!-- /.row -->
                        <!-- Main row -->
                        <div class="row">
                            <!-- Left col -->
                            <section class="col-lg-12">
                                <!-- Custom tabs (Charts with tabs)-->
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            <i class="fas fa-chart-pie mr-1"></i>
                                            Sales
                                        </h3>
                                        <div class="card-tools">
                                            <ul class="nav nav-pills ml-auto">
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="tab-content p-0">
                                            <!-- Morris chart - Sales -->
                                            <div class="chart tab-pane active" id="revenue-chart"
                                                style="position: relative; height: 300px;">
                                                <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                                            </div>
                                            <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                                                <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                                            </div>
                                        </div>
                                    </div><!-- /.card-body -->
                                </div>
                                <!-- /.card -->

                                <!-- TO DO List -->
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            <i class="ion ion-clipboard mr-1"></i>
                                            To Do List
                                        </h3>

                                        <div class="card-tools">
                                            <ul class="pagination pagination-sm">
                                                <li class="page-item"><a href="#" class="page-link">&laquo;</a>
                                                </li>
                                                <li class="page-item"><a href="#" class="page-link">1</a></li>
                                                <li class="page-item"><a href="#" class="page-link">2</a></li>
                                                <li class="page-item"><a href="#" class="page-link">3</a></li>
                                                <li class="page-item"><a href="#" class="page-link">&raquo;</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <ul class="todo-list" data-widget="todo-list">
                                            <li>
                                                <!-- drag handle -->
                                                <span class="handle">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </span>
                                                <!-- checkbox -->
                                                <div class="icheck-primary d-inline ml-2">
                                                    <input type="checkbox" value="" name="todo1" id="todoCheck1">
                                                    <label for="todoCheck1"></label>
                                                </div>
                                                <!-- todo text -->
                                                <span class="text">Design a nice theme</span>
                                                <!-- Emphasis label -->
                                                <small class="badge badge-danger"><i class="far fa-clock"></i> 2
                                                    mins</small>
                                                <!-- General tools such as edit or delete-->
                                                <div class="tools">
                                                    <i class="fas fa-edit"></i>
                                                    <i class="fas fa-trash-o"></i>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="handle">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </span>
                                                <div class="icheck-primary d-inline ml-2">
                                                    <input type="checkbox" value="" name="todo2" id="todoCheck2"
                                                        checked>
                                                    <label for="todoCheck2"></label>
                                                </div>
                                                <span class="text">Make the theme responsive</span>
                                                <small class="badge badge-info"><i class="far fa-clock"></i> 4
                                                    hours</small>
                                                <div class="tools">
                                                    <i class="fas fa-edit"></i>
                                                    <i class="fas fa-trash-o"></i>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="handle">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </span>
                                                <div class="icheck-primary d-inline ml-2">
                                                    <input type="checkbox" value="" name="todo3" id="todoCheck3">
                                                    <label for="todoCheck3"></label>
                                                </div>
                                                <span class="text">Let theme shine like a star</span>
                                                <small class="badge badge-warning"><i class="far fa-clock"></i> 1
                                                    day</small>
                                                <div class="tools">
                                                    <i class="fas fa-edit"></i>
                                                    <i class="fas fa-trash-o"></i>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="handle">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </span>
                                                <div class="icheck-primary d-inline ml-2">
                                                    <input type="checkbox" value="" name="todo4" id="todoCheck4">
                                                    <label for="todoCheck4"></label>
                                                </div>
                                                <span class="text">Let theme shine like a star</span>
                                                <small class="badge badge-success"><i class="far fa-clock"></i> 3
                                                    days</small>
                                                <div class="tools">
                                                    <i class="fas fa-edit"></i>
                                                    <i class="fas fa-trash-o"></i>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="handle">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </span>
                                                <div class="icheck-primary d-inline ml-2">
                                                    <input type="checkbox" value="" name="todo5" id="todoCheck5">
                                                    <label for="todoCheck5"></label>
                                                </div>
                                                <span class="text">Check your messages and notifications</span>
                                                <small class="badge badge-primary"><i class="far fa-clock"></i> 1
                                                    week</small>
                                                <div class="tools">
                                                    <i class="fas fa-edit"></i>
                                                    <i class="fas fa-trash-o"></i>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="handle">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </span>
                                                <div class="icheck-primary d-inline ml-2">
                                                    <input type="checkbox" value="" name="todo6" id="todoCheck6">
                                                    <label for="todoCheck6"></label>
                                                </div>
                                                <span class="text">Let theme shine like a star</span>
                                                <small class="badge badge-secondary"><i class="far fa-clock"></i> 1
                                                    month</small>
                                                <div class="tools">
                                                    <i class="fas fa-edit"></i>
                                                    <i class="fas fa-trash-o"></i>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer clearfix">
                                        <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i>
                                            Add item</button>
                                    </div>
                                </div>
                                <!-- /.card -->
                            </section>
                            <!-- /.Left col -->
                        </div>
                        <!-- /.row (main row) -->
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <style>
        /* The switch - the box around the slider */
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        /* Hide default HTML checkbox */
        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        /* The slider */
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: lightcoral;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked+.slider {
            background-color: lightgreen;
        }

        input:focus+.slider {
            box-shadow: 0 0 1px lightgreen;
        }

        input:checked+.slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            if ($('#myCheckbox').prop('checked')) {
                $('#displayText').text('Status : OPEN NOW');
            } else {
                $('#displayText').text('Status : CLOSED');
            }
        });

        // Mendapatkan elemen checkbox
        var checkbox = document.getElementById('myCheckbox');

        // Mendapatkan elemen untuk menampilkan tulisan
        var displayTextElement = document.getElementById('displayText');

        // Menambahkan event listener untuk mendeteksi perubahan status checkbox
        checkbox.addEventListener('change', function() {
            // Memeriksa apakah checkbox checked atau tidak
            if (checkbox.checked) {
                // Jika checked, tampilkan tulisan
                displayTextElement.innerHTML = 'Status : OPEN NOW';
            } else {
                // Jika tidak checked, sembunyikan tulisan
                displayTextElement.innerHTML = 'Status : CLOSED';
            }
        });
    </script>
@endsection
