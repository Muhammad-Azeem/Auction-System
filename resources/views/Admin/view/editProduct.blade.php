@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit User</div>
                <div class="panel-body">

                    <form  action="{{ URL::to('updateProduct')}}" method="post">

                            <label for="Bid price" class="col-md-4 control-label">start Price</label>

                            <div class="col-md-6">
                                <input  type="number" class="form-control" name="startPrice" value="{{ $d_data->startPrice }}" required autofocus>
                            </div>

                            <label for="status" class="col-md-4 control-label">Product Status</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control" name="status" value="{{ $d_data->status }}" required>
                           </div>
                            <label for="status" class="col-md-4 control-label">Product Type</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control" name="product_type" value="{{ $d_data->product_type }}" required>
                           </div>
 
                            <label for="bidDate" class="col-md-4 control-label">Selling Date</label>

                            <div class="col-md-6">
                                <input id="sellDate" type="Date" class="form-control" name="sellDate" value="{{$d_data->bidDate}}" required>
                            </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                            </div>
                        </div>
                        <input type="hidden" value="{{$d_data->id}}" name="id">
			           <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection