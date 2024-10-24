@extends('layouts.main');

@section('title', 'Заказы')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <!-- /.row -->
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-info border-info">
                            <h3 class="card-title">Таблица Заказов</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap table-bordered text-center table-success">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>PRODUCT</th>
                                        <th>COUNT</th>
                                        <th>SUMMA</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $ord)
                                        <tr>
                                            <td>{{$ord->id}}</td>
                                            @foreach($productName as $prod_name)
                                                @if ($prod_name->id == $ord->prod_id)
                                                    <td class="wid">{{$prod_name->name}}</td>
                                                @endif
                                            @endforeach
                                            <!-- <td>{{$ord->prod_name}}</td> -->
                                            <td>{{$ord->count}}</td>
                                            <td>{{$ord->summa}}</td>
                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>


        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection