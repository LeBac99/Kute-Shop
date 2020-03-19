@extends('admin.layout.main')
@section('content')
	<!--/. end sidebar left-->
	 <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">CATEGORY</strong>
                                <a href="{{route('get.addCategory')}}" style="float: right;" type="button" class="btn btn-outline-primary">Thêm danh mục</a>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        	<th>Id</th>
                                            <th>Name</th>
                                            <th>Slug</th>
                                            <th>Description</th>
                                            <th>Parent Id</th>
                                             <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($category as $cate)
                                        <tr>
                                            <td>{{$cate->id}}</td>
                                            <td>{{$cate->name}}</td>
                                            <td>{{$cate->slug}}</td>
                                            <td>{{$cate->description}}</td>
                                            <td>{{$cate->parent_id}}</td>
                                            <td>
                                                <a href="{{route('get.editCategory',['id'=>$cate->id])}}" type="button" class="btn btn-warning">Edit</a>
                                                <a onclick="return Delcate()" href="{{route('get.deleteCategory',['id'=>$cate->id])}}" type="button" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                       
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

	


		<!--/.row-->

	<!--/.main-->

@endsection
