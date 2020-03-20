@extends('admin.layout.main')
@section('content')
<div class="row">
    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">DANH MỤC</strong>
                            </div>
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center">Sửa danh mục</h3>
                                        </div>
                                        @if(session('thongbao'))
                                            <div class="alert alert-danger">
                                                {{session('thongbao')}}
                                            </div>
                                            
                                        @endif
                                        <form action="{{route('post.editCategory',['id'=>$cate->id])}}" method="post" >
                                            @csrf
                                            <div class="row form-group">
                                                <div class="col col-md-12"><label for="select" class=" form-control-label">Danh mục cha</label></div>
                                                <div class="col-12 col-md-12">
                                                    <select name="parent_id" id="select" class="form-control">
                                                        <option value="0">PARENT</option>
                                                        {!!getCategory($category,0,'',$cate->parent_id)!!}
                                                    </select>
                                                </div>
                                            </div>
      
                                            <div style="margin: 0px; padding: 0px;" class="col col-md-12"><label for="select" class=" form-control-label">Tên danh mục</label></div>
                                            
                                                <div class="form-group">
                                                    
                                                    <input style="height: 50px;" id="cc-payment" name="name" type="text" class="form-control" value="{{$cate->name}}">
                                                </div>
                                                {!!showErrors($errors,'name')!!}
                                                <div class="form-group" >
                                             <div style="padding:0px;" class="col col-md-12"><label for="select" class=" form-control-label">Miêu tả</label></div>
                                            <textarea id="editor1" style="width: 100%" class="ckeditor" required name="description">{{$cate->description}}</textarea>


                                        </div> 
                                                <div>
                                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                        
                                                        <span id="payment-button-amount">Sửa</span>
                                                        
                                                    </button>
                                                </div>
                                                <div>
                                                    <a href="{{route('get.Category')}}" id="payment-button" type="submit" class="btn btn-lg btn-info btn-block btn btn-danger">
                                                        
                                                        <span id="payment-button-amount">Hủy bỏ</span>
                                                        
                                                    </a>
                                                </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- .card -->

                    </div><!--/.col-->

</div>
@endsection