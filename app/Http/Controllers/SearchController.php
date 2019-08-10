<?php

namespace App\Http\Controllers;
use App\Models\Category as CategoryModel;
use App\Models\Brand as BrandModel;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function searchCategory($name){
        $products = CategoryModel::with('products.brand')
                                    ->where('name', $name)
                                    ->first()->products;
        $brands = BrandModel::all();
        $categories = CategoryModel::all();
        return view('product.index',compact('brands','categories'))
                ->with('products',$products)
                ->with('title',$name);
    }
    public function search(Request $req){
        $param = $req->search_param;
        $products = \DB::table('products')
                    ->leftJoin('categories','products.category_id','=','categories.id')
                    ->leftJoin('brands','products.brand_id','=','brands.id')->where(function($q) use ($param){
                        $q->where('products.name', 'like', '%' .$param . '%')
                        ->orWhere('brands.brand_name', 'like', '%' . $param . '%')
                        ->orWhere('categories.name','like', '%' . $param . '%');
                    })
                    ->select('products.name'
                                ,'products.price'
                                ,'products.description'
                                ,'brands.brand_name')
                    ->get();

            $brands = BrandModel::all();
            $categories = CategoryModel::all();
            \Session::flash('message.level', 'success'); 
            \Session::flash('message.content', 'Search result : ' . $param); 
            return view('product.index',compact('brands','categories'))
            ->with('products',$products)
            ->with('title','search-result');
    }
}
