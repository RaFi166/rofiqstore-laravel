<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\PriceCat;

class ProductController extends Controller
{
    public function add_product(){
        $all_price_range = PriceCat::all();
    
        return view ('admin.product.add_product', compact('all_price_range'));
    }

    public function submit_product(Request $request){
           
           Product::insert([
               'product_name'=> $request->product_name,
               'price_range_id'=> $request->price_range_id,
               'price'=> $request->price,
               'expiry_date'=> $request->expiry_date,
               
           ]);
           return back();
        }

        public function all_product() {
            $all_product = Product::all();
            return view ('admin.product.all_product', compact('all_product'));
        }

        public function edit_product($id){
            $single_product= Product::findOrFail($id);
            $all_price_range = PriceCat::all();
            return view('admin.product.edit_product', compact('single_product','all_price_range'));
        }

        public function edit_product_save(Request $request){
            Product::findOrFail($request->edit_product_id)->update([
                'product_name'=> $request->product_name,
               'price_range_id'=> $request->price_range_id,
               'price'=> $request->price,
               'expiry_date'=> $request->expiry_date,
                
            ]);
            return back();


        }

        function delete_product($product_delete_id){
            Product::find($product_delete_id)->delete();
            return back();
           }

           public function filtered_product($filter_id){
               $all_products = Product::where('price_range_id', $filter_id)->get();
               return view('admin.product.filter_product', compact('all_products'));
           }


      


        //end
    }

