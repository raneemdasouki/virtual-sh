<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use DB;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data['bags'] = Product::where('department_id',1)->get(); //department 1 is bags
        return view('page.bag',$data);
        //dd($peoducts);
    }
    public function index1()
    {
        $data = [];
        $data['flowers'] = Product::where('department_id',4)->get(); //department 4 is flowers
        return view('page.flower',$data);
     }
     public function index2()
     {
         $data = [];
         $data['food'] = Product::where('department_id',5)->get(); //department 5 is food
         return view('page.food',$data);
      }
      public function index3()
      {
          $data = [];
          $data['gifts'] = Product::where('department_id',3)->get(); //department 3 is gifts
          return view('page.gift',$data);
       }
       public function index4()
       {
           $data = [];
           $data['shoes'] = Product::where('department_id',2)->get(); //department 2 is shoes
           return view('page.shoe',$data);
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function getproducts($id)
    // {
    //     $products = DB::table('products')->where('department_id',$id)->get();
    //     //dd($pl);
    //     return view('page.bag',['products' => $products]);
    // }

    public function show(Product $product)
    {
        $products = DB::table('products')->get();
        return view('page.bag',compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
