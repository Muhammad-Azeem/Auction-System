<?php

namespace App\Http\Controllers;
use App\bidModel;
use App\userModel;
use App\productModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class adminController extends Controller
{
    public function adminPanel()
    {
    	return view('Admin.view.adminPanel');
    }
    public function users()
    {
    	$data = userModel::all();
    	return view('Admin.view.user')->with('b_data',$data);
    }
    public function userDelete($id)
    {
    	$data = userModel::find($id);
    	$data->delete();
    	$data = userModel::all();
    	return redirect('adminPanel/users')->with('b_data',$data);
    }
    public function editUser($id)
    {
    	$data = userModel::find($id);
    	return view('Admin.view.editUserr')->with('d_data',$data);
    }
    public function updateUser()
    {
    	$id=input::get('id');
    	$data = userModel::find($id);
    	$data->name = input::get('name');
    	$data->email = input::get('email');
    	$data->password = input::get('password');
    	$data->save();
    	return redirect('adminPanel/users');
    }
    public function bids()
    {
    	$data = bidModel::all();
    	return view('Admin.view.bids')->with('b_data',$data);
    }
    public function editBid($id)
    {
    	$data = bidModel::find($id);
    	return view('Admin.view.editBid')->with('d_data',$data);
    }
    public function updateBid()
    {
    	$id=input::get('id');
    	$data = bidModel::find($id);
    	$data->bidPrice = input::get('bidPrice');
    	$data->status = input::get('status');
    	$data->bidDate = input::get('bidDate');
    	$data->save();
    	return redirect('adminPanel/bids');
    }

    public function bidDelete($id)
    {
    	$data = bidModel::find($id);
    	$data->delete();
    	return redirect('adminPanel/bids')->with('b_data',$data);
    }
    public function products()
    {
    	$data = productModel::all();
    	return view('Admin.view.products')->with('b_data',$data);
    }
    public function editProduct($id)
    {
    	$data = productModel::find($id);
    	return view('Admin.view.editProduct')->with('d_data',$data);
    }
    public function updateProduct()
    {
    	$id=input::get('id');
    	$data = productModel::find($id);
    	$data->startPrice = input::get('startPrice');
    	$data->status = input::get('status');
    	$data->bidDate = input::get('sellDate');
    	$data->product_type = input::get('product_type');
    	$data->save();
    	return redirect('adminPanel/products');
    }

    public function productDelete($id)
    {
    	$data = productModel::find($id);
    	$data->delete();
    	return redirect('adminPanel/products')->with('b_data',$data);
    }

}
