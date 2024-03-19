<?php

namespace App\Http\Controllers;
use App\Models\products;
use App\Http\Requests\productsrequest;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
  public function addproductview(){
    return view('FOOD project.addpro');
  }



  public function addproduct(productsrequest $request){
    $product =new products();
    $product->food_name=$request->fname;
    $product->food_content=$request->fcontent;
    $product->food_price=$request->fprice;

    $name = $request->file('fimg')->getClientOriginalName();
    $file=$request->file('fimg')->storeAs('/',$name,'productimgs');
    $product->food_img=$name;
    $product->save();

    return redirect()->route('addproductview');


  }

  public function viewprod(){
    $data =new products();
    $products =$data->all();
    return view('FOOD project.viewprod', compact('products'));
  }

  public function del($id){
    products::destroy($id);

    return 'Deleted';

  }

  public function updatvew($id){
    $data =products::find($id);
    return view('FOOD project.updateprod',compact('data'));

  }
  public function submituodat(request $request, $id){
    $product =products::find($id);
    $product->food_name=$request->fname;
    $product->food_content=$request->fcontent;
    $product->food_price=$request->fprice;
    $product->save();
    return redirect()->route('viewproduct');

  }
  public function viewmenu(){
    $data = products::get();
    $products =$data->all();
    return view('FOOD project.menu', compact('data'));
  }
}
