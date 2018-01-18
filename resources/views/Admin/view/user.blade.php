@extends('layouts.admin')

@section('content')
<div class="jumbotron">
<table  class="table table-striped">
              <tr> 
                <th> ID </th>              
                <th> Name </th>     
                <th>Email </th>
                <th> Edit</th>                 
                <th> Delete</th>                 
              </tr>
                @foreach($b_data as $user)          
              <tr> 
                <td> {{$user->id}} </td>              
                <td> {{$user->name}} </td>     
                <td> {{$user->email}} </td>
                <td> <a href="{{ URL::to('editUser', array($user->id) )}}"> 
                       <button type="button" class="btn btn-info">Edit</button> </a> 
                </td>
                <td> <a href="{{ URL::to('userDelete',array($user->id))}}"> 
                      <button type="button" class="btn btn-danger">Delete</button> </a> 
                  </td>
              </tr>
            @endforeach
           </table>
</div>
           
@endsection
