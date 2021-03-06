@extends('backend.layout.master')

@section('title', 'Category')

@section('main')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh mục sản phẩm</h1>
                @include('errors.all_errors')
                @include('notifications.all_notifications')
            </div>

        </div><!--/.row-->

        <div class="row">
            <div class="col-xs-12 col-md-5 col-lg-5">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Thêm danh mục
                    </div>
                    <div class="panel-body">

                        <form method="post">
                            <div class="form-group">
                                <label for="name">Tên danh mục:</label>
                                <input type="text" name="name" id="name" class="form-control"
                                       placeholder="Tên danh mục...">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="add" id="add" class="form-control btn btn-primary"
                                       value="Thêm mới">
                            </div>
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-7 col-lg-7">
                <div class="panel panel-primary">
                    <div class="panel-heading">Danh sách danh mục</div>
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <table class="table table-bordered">
                                <thead>
                                <tr class="bg-primary">
                                    <th>Tên danh mục</th>
                                    <th style="width:30%">Tùy chọn</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{ $category->name }}</td>
                                        <td>
                                            <a href="{{ url('admin/category/edit/' . $category->category_id) }}"
                                               class="btn btn-warning">
                                                <span class="glyphicon glyphicon-edit"></span>
                                                Sửa
                                            </a>
                                            <a href="{{ url('admin/category/delete/' . $category->category_id) }}"
                                               class="btn btn-danger"
                                               onclick="return confirm('Bạn có chắc chắn muốn xóa [{{ $category->name }}]?')">
                                                <span class="glyphicon glyphicon-trash"></span>
                                                Xóa
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div><!--/.row-->
    </div>    <!--/.main-->
@endsection
