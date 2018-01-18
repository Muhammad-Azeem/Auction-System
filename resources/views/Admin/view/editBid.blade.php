@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit User</div>
                <div class="panel-body">

                    <form  action="{{ URL::to('updateBid')}}" method="post">

                            <label for="Bid price" class="col-md-4 control-label">Bid Price</label>

                            <div class="col-md-6">
                                <input  type="number" class="form-control" name="bidPrice" value="{{ $d_data->bidPrice }}" required autofocus>
                            </div>

                            <label for="status" class="col-md-4 control-label">Bid Status</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control" name="status" value="{{ $d_data->status }}" required>
                           </div>
 
                            <label for="bidDate" class="col-md-4 control-label">Bid Date</label>

                            <div class="col-md-6">
                                <input id="bidDate" type="Date" class="form-control" name="bidDate" value="{{$d_data->bidDate}}" required>
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