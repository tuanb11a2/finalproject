<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaleController extends Controller
{
    //
    public function viewSale(){
    	$sale_list=DB::table('tour_trong_nuoc')
    	->where('khuyen_mai','!=',0)
    	->paginate(5);
    	return view('front-end.sale',compact('sale_list'));
    }
}
