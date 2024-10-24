@extends('layouts.main');

@section('title', 'Посты')

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
                            <h3 class="card-title">Таблица Постов</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap table-bordered text-center table-success">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>CATEGORY</th>
                                        <th>TITLE</th>
                                        <th>BODY</th>
                                        <th>LIKES</th>
                                        <th>DISLIKES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $pos)
                                        <tr>
                                            <td class="wid">{{$pos->id}}</td>
                                            @foreach($categoryName as $cat_name)
                                                @if ($cat_name->id == $pos->cat_id)
                                                    <td class="wid">{{$cat_name->name}}</td>
                                                @endif
                                            @endforeach
                                            <!-- <td class="wid">{{$pos->cat_name}}</td> -->
                                            <td class="wid">{{$pos->title}}</td>
                                            <td class="wid">{{substr($pos->body, 0, 50)}}</td>
                                            <td class="wid">{{$pos->likes}}</td>
                                            <td class="wid">{{$pos->dislikes}}</td>
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