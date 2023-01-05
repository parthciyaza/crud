<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class mycontroller extends Controller
{
    function insert(Request $req)
    {
        
        $name = $req->get('pname');
        $price = $req->get('pprice');
        // $pimage = $req->file('image')->getC
        // $req->image->move(public_path('images'), $pimage);

        // return $req->input();

        $prod = new product();
        $prod->pname = $name;
        $Prod->pprice = $price;
        // $Prod->pImage = $pimage;
        $prod->save();
        return redirect('index');

    }
    // function readdata(){
    //     $pdata = product::all();
    //     return view('insertread',['data'=>pdata]);

    // }
}
