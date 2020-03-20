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
                            @if(session('thongbao'))
                                    <div class="alert alert-primary">
                                        {{session('thongbao')}}
                                    </div>
                                
                            @endif
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        	<th>Số thứ tự</th>
                                            <th>Danh mục cha</th>
                                            <!-- <th>Slug</th>
                                            <th>Mô tả</th>
                                            <th>Parent Id</th> -->
                                             
                                             <th>Danh mục con</th>
                                             <th>Thao tác</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($category as $key=> $cate)
                                        <tr>
                                            <td>{{++$key}}</td>
                                            <td>{{$cate->name}}</td>
                                            
                                      
                                            <td>
                                               {!!getchil($cateall,$cate->id)!!}
                                                
                                            </td>
                                            <td>
                                                <a href="{{route('get.editCategory',['id'=>$cate->id])}}" type="button" class="btn btn-warning">Sửa</a>
                                                <a onclick="return Delcate()" href="{{route('get.deleteCategory',['id'=>$cate->id])}}" type="button" class="btn btn-danger">Xóa</a>
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
