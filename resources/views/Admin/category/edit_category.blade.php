@extends('admin.layout.main')
@section('content')
<div class="row">
	<div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">CATEGORY</strong>
                            </div>
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center">Edit Category</h3>
                                        </div>
                                        <div class="row form-group">
	                                        <div class="col col-md-12"><label for="select" class=" form-control-label">Parent</label></div>
	                                        <div class="col-12 col-md-12">
	                                            <select name="select" id="select" class="form-control">
	                                                <option value="0">Please select</option>
	                                                <option value="1">Option #1</option>
	                                                <option value="2">Option #2</option>
	                                                <option value="3">Option #3</option>
	                                            </select>
	                                        </div>
	                                    </div>
  
                                        <div style="margin: 0px; padding: 0px;" class="col col-md-12"><label for="select" class=" form-control-label">Child</label></div>
                                        <form action="#" method="post" novalidate="novalidate">
                                            
                                            <div class="form-group">
                                                
                                                <input style="height: 50px;" id="cc-payment" name="cc-payment" type="text" class="form-control" aria-required="true" aria-invalid="false" value="100.00">
                                            </div>
                                            
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    
                                                    <span id="payment-button-amount">Add</span>
                                                    
                                                </button>
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block btn btn-danger">
                                                    
                                                    <span id="payment-button-amount">Cancel</span>
                                                    
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- .card -->

                    </div><!--/.col-->

</div>
@endsection