@extends('layouts.main');

@section('title', 'Продукты')

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
                            <h3 class="card-title">Таблица Продуктов</h3>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap table-bordered text-center table-success">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>CATEGORY</th>
                                        <th>NAME</th>
                                        <th>PRICE</th>
                                        <th>DESCRIPTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $prod)
                                        <tr>
                                            <td>{{$prod->id}}</td>
                                            @foreach($categoryName as $cat_name)
                                                @if ($cat_name->id == $prod->car_id)
                                                    <td class="wid">{{$cat_name->name}}</td>
                                                @endif
                                            @endforeach
                                            <!-- <td>{{$prod->cat_name}}</td> -->
                                            <td>{{$prod->name}}</td>
                                            <td>{{$prod->price}}</td>
                                            <td>{{substr($prod->description, 0, 50)}}</td>
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