@extends('layouts.admin')

@section('content')
<div class="jumbotron">
<table  class="table table-striped">
              <tr> 
                <th> ID </th>              
                <th> User Id </th>     
                <th>Start Price </th>
                <th> Buy It Now Price </th>                
                <th> Status </th>                 
                <th> Item Description</th>                 
                <th> Product Type</th>                 
                <th> Posted Date</th>                 
                <th> Duration</th>                 
                <th> Edit</th>                 
                <th> Delete</th>                 
              </tr>
                @foreach($b_data as $bid)          
              <tr> 
                <td> {{$bid->id}} </td>              
                <td> {{$bid->user_id}} </td>     
                <td> {{$bid->startPrice}} </td>
                <td> {{$bid->buyItNowPrice}} </td>
                <td> {{$bid->status}} </td>
                <td> {{$bid->itemDescription}} </td>
                <td> {{$bid->product_type}} </td>
                <td> {{$bid->bidDate}} </td>
                <td> {{$bid->Duration}} </td>
                <td> <a href="{{ URL::to('editProduct', array($bid->id) )}}"> 
                       <button type="button" class="btn btn-info">Edit</button> </a> 
                </td>
                <td> <a href="{{ URL::to('productDelete',array($bid->id))}}"> 
                      <button type="button" class="btn btn-danger">Delete</button> </a> 
                  </td>
              </tr>
            @endforeach
           </table>
</div>
           
@endsection
