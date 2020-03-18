@extends('admin.layout.main')
@section('content')
<div class="col-xs-12 col-sm-12">
    <div class="col-xs-12 col-sm-12 card">
        <div class="card-header">
            <strong>Masked Input</strong> <small> Small Text Mask</small>
        </div>
        <div class="row">
            <div class="col-xs-4 col-sm-4 card-body card-block ">
                <div class="form-group">
                    <label class=" form-control-label">Tên sản phẩm</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-tags"></i></div>
                        <input class="form-control">
                    </div>
                    <small class="form-text text-muted">ex. 99/99/9999</small>
                </div>

                <div class="form-group">
                    <label class=" form-control-label">Danh mục chính</label>
                    <div class="input-group">
                        <select class="form-control province" name="province">
                            <option value="0" disabled="true" selected="true">-- Danh mục --</option>
                            <option value=""></option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class=" form-control-label">Danh mục phụ</label>
                    <div class="input-group">
                        <select class="form-control province" name="province">
                            <option value="0" disabled="true" selected="true">-- Danh mục --</option>
                            <option value=""></option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class=" form-control-label">Giá sản phẩm</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-usd"></i></div>
                        <input class="form-control">
                    </div>
                    <small class="form-text text-muted">ex. 99-9999999</small>
                </div>
                <div class="form-group">
                    <label class=" form-control-label">Giá khuyến mại</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-usd"></i></div>
                        <input class="form-control">
                    </div>
                    <small class="form-text text-muted">ex. 999-99-9999</small>
                </div>
                <div class="form-group">
                    <label class=" form-control-label">Đánh giá</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-star"></i></div>
                        <input class="form-control">
                    </div>
                    <small class="form-text text-muted">ex. ~9.99 ~9.99 999</small>
                </div>
                <div class="form-group">
                    <label class=" form-control-label">Số lượng</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-sort-amount-asc"></i></div>
                        <input class="form-control">
                    </div>
                    <small class="form-text text-muted">ex. 9999 9999 9999 9999</small>
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 ">
                <br>
                <label class=" form-control-label">Ảnh sản phẩm</label>
                <img id="imageTarget" src="{{url('/')}}/admin/images/default.png" width="350px" height="330px" class="img-responsive">
                <div class="form-group">
                    <label class=" form-control-label">Chọn ảnh</label>
                    <div class="input-group">
                        <input type="file" class="form-control" id="product_image">
                    </div>
                </div>
                <div class="form-group">
                    <label class=" form-control-label">Mô tả sản phẩm</label>
                    <div class="input-group">
                        <textarea class="form-control" placeholder="mô tả.." style="height: 203px"></textarea>
                    </div>
                </div>
            </div>
            <div class="col-xs-4 col-sm-4">
                <label class=" form-control-label mt-4">Các thuộc tính</label>
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Size</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Màu</a>
                        <a class="nav-item nav-link" id="nav-contact1-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"><img src="{{url('/')}}/admin/images/daucong.jpg" height="20px"></a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="col-sm-12">
                            <div class="row mt-4">
                                <div class="col-2">S</div>
                                <div class="col-2">M</div>
                                <div class="col-2">L</div>
                            </div>
                            <hr>
                            <div class="row mt-4">
                                <div class="col-2"><input type="radio" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"></div>
                                <div class="collapse" id="collapseExample">
                                    <div class="form-group">
                                        <label class=" form-control-label">Thêm Giá</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-plus-square"></i></div>
                                            <input class="form-control">
                                        </div>
                                        <button type="button" class="btn btn-outline-success btn-sm mt-2">Thêm</button>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label class=" form-control-label">Thêm thuộc tính</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-plus-square"></i></div>
                                    <input class="form-control">
                                </div>
                                <button type="button" class="btn btn-outline-success btn-sm mt-2">Thêm</button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="form-group">
                            <label class=" form-control-label">Thêm thuộc tính</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-plus-square"></i></div>
                                <input class="form-control">
                            </div>
                            <button type="button" class="btn btn-outline-success btn-sm mt-2">Thêm</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 h-2">
            <div class="text-center">
                <a href="/" title="" class="btn btn-danger">Quay lại</a>
                <input class="btn btn-success" type="submit" value="Lưu">
            </div>
        </div>
        </br>
    </div>
</div>

@endsection