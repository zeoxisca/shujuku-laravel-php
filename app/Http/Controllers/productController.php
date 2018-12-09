<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Doctrine\DBAL\Schema\View;
use App\Http\Controllers\Controller;
use App\users;
use App\products;
use Illuminate\Support\Facades\session;

use Validator;

class productController extends Controller
{
    public function addProduct(Request $request){
    	$validator = Validator::make($request->all(),[
    		'product_name' => 'required',
    		'nums' => 'required|min:100',
    		'type2price' => 'required',
    		'freight' => 'required',
    		'from_where' => 'required',
    	]);

    	if($validator->fails()){
    		return response()->json(['error'=>40101,'msg'=>'lose data']);
    	}

    	$union_id = session(['union_id']);
    	if($union_id != 'administrator'){
    		return response()->json(['error'=>60001, 'msg'=>'no admition']);
    	}

        $new_product = new products;

        $new_product->product_id = (string)strtotime(date('Y-m-d H:i:s',time())).rand(1000,9999);
        $new_product->product_name = $request->product_name;
        if($request->imgs)
            $new_product->imgs = $request->imgs;
        $new_product->nums = $request->nums;
        $new_product->type2price = $request->type2price;
        $new_product->freight = $request->freight;
        $new_product->fromwhere = $request->$from_where;
        if($request->tags)
            $new_product->tags = $request->tags;
        if($request->details)
            $new_product->details = $request->details;

        $new_product->save();

        return response()->json(['error'=>0, 'msg'=>'success added']);
    }


    public function delProduct($product_id){
        $union_id = session('union_id');
        if($union_id != 'administrator')
            return response()->json(['error'=>50001, 'msg'=>'no admition']);

        $product = products::where('product_id', $product_id)->first();

        if(empty($product))
            return response()->json(['error'=>40402,'msg'=>'no product']);

        $product->delete();
        return response()->json(['error'=>0, 'msg'=>'success delete']);
    }
    

    public function showProducts(Request $request){
        $validator = Validator::make($request->all(),[
            'tag' => 'required',    # name
            'order' => 'required',  # DESC/ASC
            'condition' => 'required',
            'condition_what' => 'required'
        ]);

        $condition = array('tags', 'from_where');
        $tag = array('product_name', 'nums', 'seen', 'sale_nums', 'comment_count');
        $order = array('DESC', 'ASC');

        if (!in_array($request->tag, $tag) || !in_array($request->condition, $condition)||!in_array($request->order, $order))
            return response()->json(['error'=>50501, 'msg'=>'wrong data']);

        if($validator->fails()){
            return response()->json(['error'=>'40101', 'msg'=>'lose data']);
        }

        $products = products::where($request->condition, $request->condition_what)->orderBy($request->tag, $request->order)->get();

        if(empty($products)){
            return response()->json(['error'=>40403,'msg'=>"can't search"]);
        }

        return response()->josn(['error'=>0, 'msg'=>$products->toArray()]);
    }


}
