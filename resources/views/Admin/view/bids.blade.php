@extends('layouts.admin')

@section('content')
<table style="padding-top:150px; margin-left: 100px" class="table table-striped">
           		<tr> 
           			<th> ID </th>        	     
           			<th> Product Id </th>	    
           			<th width="25%"> User Id </th>
                <th> Bid Price </th>                
                <th> Bid Date </th>                 
                <th> Bid Status </th>                 
                <th> Edit </th>                 
           			<th> Delete </th>           			
           		</tr>
                @foreach($b_data as $bid)          
           		<tr> 
           			<td> {{$bid->id}} </td>        	     
           			<td> {{$bid->p_id}} </td>	    
           			<td width="25%"> {{$bid->user_id}} </td>
                <td> {{$bid->bidPrice}} </td>
                <td> {{$bid->bidDate}} </td>
           			<td> {{$bid->status}} </td>
           			<td> <a href="{{ URL::to('editBid', array($bid->id) )}}"> 
           			       <button type="button" class="btn btn-info">Edit</button> </a> 
           			</td>
           			<td> <a href="{{ URL::to('bidDelete',array($bid->id))}}"> 
           			      <button type="button" class="btn btn-danger">Delete</button> </a> 
           			  </td>
           		</tr>
           	@endforeach
           </table>

           
@endsection
