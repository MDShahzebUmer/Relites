<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Api\Order;
use App\Modules\Backend\OrderManagement\Http\Controllers\OrderController;

class APIController extends Controller
{


    public function pushOrder($id){
    $getResults = Order::pushOrder($id);
    // dd($getResults); die;
    return response()->json(['status'=>$getResults['status'], 'message' => $getResults['message']]);
    }

// public function pushOrder($id){
    
//     return dd($id);
// }

}
