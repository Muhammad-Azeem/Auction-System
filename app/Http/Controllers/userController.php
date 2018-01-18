<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\productModel;
use App\bidModel;
use DB;
use Auth;
use Carbon\Carbon;
class userController extends Controller
{
    public function index()
    {
        return view('homePage');
    }
    public function tellUsWhatYouAreSelling()
    {
    	return view("user.sell.tellUsWhatYouAreSelling");
    }
    public function getCategory(Request $request)
    {
        $this->validate($request, [
        'title' => 'required|max:255',
        ]);
    	$data=productModel::all();
   		$title = input::get('title');
    	session(['title' => $title]);
        return view("user.sell.getCategory")->with('product',$data)->with('title',$title);
    }
    public function createYourListing(Request $request)
    {
        if(input::has('productType'))
        {
            $productType = input::get('productType');
            session(['productType' => $productType]);
        }
    	return view("user.sell.createYourListing");
    }
    public function reviewYourListing(Request $request)
    {
        $this->validate($request, [
        'condition' => 'required',
        'ConditionDescription' => 'required',
        'itemDescription' => 'required',
        'startingPrice' => 'required',
        'duration' => 'required',
        'buyItNow' => 'required',
        'cash' => 'required',
        'pic1' => 'required',
        'pic2' => 'required',
        'pic3' => 'required',
        ]);
        $p = new productModel;
        if(Input::hasfile('pic1'))
        {
            $pic1 = input::file('pic1');
            $pic1->move('upload',$pic1->getClientOriginalName());
            $p1 = $pic1->getClientOriginalName();
            $p->pic1 = $p1;
        }
        if(Input::hasfile('pic2'))
        {
            $pic2 = input::file('pic2');
            $pic2->move('upload',$pic2->getClientOriginalName());
            $p2 = $pic2->getClientOriginalName();
            $p->pic2 = $p2;
        }
        if(Input::hasfile('pic3'))
        {
            $pic3 = input::file('pic3');
            $pic3->move('upload',$pic3->getClientOriginalName());
            $p3 = $pic3->getClientOriginalName();
            $p->pic3 = $p3;
        }
        $dt = Carbon::now();
        $dt->addDays(input::get('duration'));
        //$date = $dt->toFormattedDateString();      // Dec 19, 2015
        $p->bidDate =  $dt;
        $p->status =  "active";
        $p->user_id = input::get('id');
        $p->title = input::get('title');
        $p->itemCondition = input::get('condition');
        $p->conditionDescription = input::get('ConditionDescription');
        $p->startPrice = input::get('startingPrice');
        $p->buyItNowPrice = input::get('buyItNow');
        $p->duration = input::get('duration');
        $p->payment = input::get('cash');
        $p->itemDescription = input::get('itemDescription');
        $product_token = str_random(40);           
        $p->productToken = $product_token;
        $p->product_type = session('productType');
        session(['token' => $product_token]);
        $p->save();
        return redirect('reviewYourListing');
    }
    public function review()
    {
        $product_token =  session('token');
        $data = DB::table('product')->where('productToken',$product_token)->get();
        return view('user.sell.reviewListing')->with('data',$data);

    }
    public function showProductDetail($id)
    {
        $userid = Auth::user()->id;
        $msg = session('msg');
        $disabled = "";
        session()->forget('msg');
        $data = productModel::find($id);
        $bdata = DB::table('bid')
                            ->where('p_id', '=', $id)
                            ->get();
        $notAgain = $data->status;
        $user_id = $data->user_id;
        if($notAgain=='unsold' || $notAgain=="sold" || $userid==$user_id)
        {
            $disabled = 'disabled';
        }
        $counter = 0;
        foreach($bdata as $d)
        {
            $counter++;
        }              
        session(['bids'=>$counter]);      
        return view('user.sell.productDetail')
                                ->with('data',$data)
                                ->with('bid',$bdata)
                                ->with('msg',$msg)
                                ->with('disable',$disabled)
                                ->with('notAgain',$notAgain);
    }
    public function products()
    {
        $data = productModel::paginate(10);
        return view('user.products')->with('products',$data);
    }
    public function search()
    {
        $category = input::get('category');
        $data = productModel::where('product_type', '=', $category)->simplePaginate(10);
        return view('user.products')->with('products',$data);
    }
    public function productResult($cat)
    {
        $data = productModel::where('product_type', '=', $cat)->simplePaginate(10);
        return view('user.products')->with('products',$data);
    }
    public function bidPlaced(Request $request)
    {
        $this->validate($request, [
        'bidPrice' => 'required',
        ]);
        $startPrice = input::get('startPrice');
        $bidPrice = input::get('bidPrice');
        $p_id = input::get('p_id');
        $data = bidModel::where('p_id', '=', $p_id);
        $d = bidModel::all(); 
        $price = "ok";
        $temp= "new";
        foreach($d as $outer)
        {
            if($startPrice < $outer->bidPrice && $p_id == $outer->p_id)
            {
                foreach($d as $inner)
                {
                    $price = $outer->bidPrice;
                    if($outer->bidPrice <= $inner->bidPrice && $p_id == $inner->p_id)
                    {
                        $temp = "old";
                        $price = $inner->bidPrice;
                        $outer->bidPrice = $inner->bidPrice;
                    }
                }
                    break;
            }
        }
        if($bidPrice > $startPrice)
        {

            if($bidPrice >= $price  || $temp=="new")
            {
                session(['msg'=>'Bid Successfully Placed']);
                $dt = Carbon::now();        
                $bid = new bidModel;
                $bid->p_id = input::get('p_id');
                $bid->status = "active";
                $bid->bidPrice = input::get('bidPrice');
                $bid->user_id = input::get('user_id');
                $bid->bidDate = $dt;
                $bid->save();
                return redirect()->route('productDetail', [$p_id]);        
            }        
        }
        if($price=="ok")
            session(['msg' => 'Bid price should greater than $'. $startPrice]);
        else
            session(['msg' => 'Bid price should greater than $'. $price]);
        return redirect()->route('productDetail', [$p_id]);        
    }       
    public function UserPanel()
    {
        return view('user.userPanel');   
    }
    public function mybids()
    {
        $id = Auth::user()->id;
        $data = bidModel::all();
        $product = productModel::all();

        return view('user.myBid')
                ->with('bids',$data)   
                ->with('products',$product);   
    }
    public function allSelling()
    {
        $id = Auth::user()->id;
        $data = productModel::find($id);
        $product = DB::table('product')
                            ->where([['status', '=', 'active'],['user_id', '=', $id]])
                            ->get();
        $product1 = DB::table('product')
                            ->where([['status', '=', 'sold'],['user_id', '=', $id]])
                            ->get();
        $product2 = DB::table('product')
                            ->where([['status', '=', 'unsold'],['user_id', '=', $id]])
                            ->get();
        return view('user.allSelling')
                        ->with('active',$product) 
                        ->with('sold',$product1)   
                        ->with('unsold',$product2);   
    }
    public function sold()
    {
        $id = Auth::user()->id;
        $data = productModel::find($id);
        $product = DB::table('product')
                            ->where([['status', '=', 'sold'],['user_id', '=', $id]])
                            ->get();
        return view('user.sold')->with('data',$product);   
    }
    public function active()
    {
        $id = Auth::user()->id;
        $data = productModel::find($id);
        $product = DB::table('product')
                            ->where([['status', '=', 'active'],['user_id', '=', $id]])
                            ->get();
        return view('user.active')->with('data',$product);   
    }
    public function unsold()
    {
        $id = Auth::user()->id;
        $data = productModel::find($id);
        $product = DB::table('product')
                            ->where([['status', '=', 'unsold'],['user_id', '=', $id]])
                            ->get();
        return view('user.unsold')->with('data',$product);   
    }
    public function bidWon()
    {
        $startPrice = input::get('startPrice');
        $bidPrice = input::get('bidPrice');
        $p_id = input::get('p_id');
        $d = DB::table('bid')
                            ->where([['p_id', '=', $p_id],['status', '=', 'active']])
                            ->get();
        $product = DB::table('product')
                            ->where([['id', '=', $p_id],['status', '=', 'active']])
                            ->get();

        $price = "noBid";
        $temp= "new";
        foreach($d as $outer)
        {
            if($startPrice < $outer->bidPrice && $p_id == $outer->p_id)
            {
                foreach($d as $inner)
                {
                    $price = $outer->bidPrice;
                    if($outer->bidPrice <= $inner->bidPrice && $p_id == $inner->p_id)
                    {
                        $temp = "old";
                        $id = $inner->user_id;
                        $price = $inner->bidPrice;
                        $outer->bidPrice = $inner->bidPrice;
                    }
                }
                    break;
            }
        }
        $bdata = DB::table('bid')
                            ->where([['p_id', '=', $p_id],['status', '=', 'active']])
                            ->get();        
        foreach($bdata as $data)
        {
            if($data->bidPrice == $price)
            {
                echo $data->bidPrice;
                echo $price;
                echo "won";
                DB::table('bid')
                            ->where('id', $data->id)
                            ->update(['status' => 'won']);            
            }
            else
            {
                echo "lose";
                DB::table('bid')
                            ->where('id', $data->id)
                            ->update(['status' => "lose"]);           
            }
        
        }
        if($price=="noBid")
        {
            DB::table('product')
                        ->where('id', $p_id)
                        ->update(['status' => 'unsold']);            
        }
        else
        {
            DB::table('product')
                        ->where('id', $p_id)
                        ->update(['status' => 'sold']);            

        }
         return redirect()->route('productDetail', [$p_id]);        
    }
}