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
                                            <th>Decription</th>
                                            <th>Parent Id</th>
                                             <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon fffffffffffffff</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>$320,800</td>
                                            <td>$1</td>
                                            <td>
                                                <a href="{{route('get.editCategory')}}" type="button" class="btn btn-warning">Edit</a>
                                                <a href="" type="button" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>$170,750</td>
                                            <td>$1</td>
                                            <td>
                                               <a href="{{route('get.editCategory')}}" type="button" class="btn btn-warning">Edit</a>
                                                <a href="" type="button" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>$86,000</td>
                                            <td>$1</td>
                                            <td>
                                                <a href="{{route('get.editCategory')}}" type="button" class="btn btn-warning">Edit</a>
                                                <a href="" type="button" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>

                                        
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
