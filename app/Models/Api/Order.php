<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Http\Controllers\Frontend\APIController;
use App\Http\Models;

class Order extends Model
{

    protected $fillable = ['order_no','discount','tax','shipping_cost','shipping_state','total_price','currency_id','exchange_rate','shipping_name','shipping_address_1','shipping_address_2','shipping_mobile','shipping_email','shipping_post','shipping_town','shipping_country_id','shipping_note','payment_by','user_id','user_first_name','user_last_name','user_address_1','user_post_code','user_city','user_country_id','user_mobile','user_email', 'shipping_state_id', 'user_state', 'order_junky'];

    /**
     * An order is belongs to a status
     *
     * @return BelongsTo
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(OrderStatus::class,'order_stat');
    }

    /**
     * An order is belongs to a country
     *
     * @return BelongsTo
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class,'user_country');
    }

     /**
     * An order is belongs to a state
     *
     * @return BelongsTo
     */
    public function state(): BelongsTo
    {
        return $this->belongsToMany(State::class,'user_state', 'shipping_state_id');
    }

    /**
     * An order is belongs to a customer
     *
     * @return BelongsTo
     */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }

    /**
     * An order has many items
     *
     * @return HasMany
     */
    public function items(): HasMany
    {
        return $this->hasMany(OrderDetail::class,'order_id');
    }

    public function order_items(){
        return $this->hasMany(OrderDetail::class,'order_id');
    }



   


    public static function pushOrder($order_id){
    $orderDetails = Order::with('order_items')->where('id', $order_id)->first()->toArray();
    $stateID = $orderDetails["shipping_state_id"];
    $state = State::where('id', $stateID)->first()->toArray();
    // $productID = Product::where
    // $product = Products::where('id', $productID );
    // $productID = $orderDetails[product_id]->first();
    $product = array_values($orderDetails['order_items']);
    $productArray = $product['0'];
    $productId = $productArray['product_id'];
    $productFromDB = Product::where('id', $productId)->first()->toArray();
    $productName = $productFromDB['name'];
    $productSku = $productFromDB['sku'];
    $productUnit = $productFromDB['unit'];
    $productPrice = $productFromDB['sale_price'];
    $productDiscount = $productFromDB['discount'];



    $stateName =$state['state'];

    $country = Country::where('id', 104)->first();
    $countryName = $country['name'];

    // dd($orderDetails); die;

    $orderDetails['order_id'] = $orderDetails['id'];
    $orderDetails['order_date'] = $orderDetails['created_at'];
    $orderDetails['pickup_location'] = "Primary";
    $orderDetails['channel_id'] = "2959543";
    $orderDetails['pickup_location'] = "Primary";
    $orderDetails['comment'] = $orderDetails["shipping_note"];
    $orderDetails['billing_customer_name'] = $orderDetails["user_first_name"];
    $orderDetails['billing_last_name'] = $orderDetails["user_last_name"];
    $orderDetails['billing_address'] = $orderDetails["user_address_1"];
    $orderDetails['billing_address_2'] = $orderDetails["shipping_address_2"];
    $orderDetails['billing_city'] = $orderDetails["user_city"];
    $orderDetails['billing_pincode'] = $orderDetails["user_post_code"];
    $orderDetails['billing_state'] = $stateName;
    $orderDetails['billing_country'] = $countryName;
    $orderDetails['billing_email'] = $orderDetails["user_email"];
    $orderDetails["billing_phone"] = $orderDetails["shipping_mobile"];
    $orderDetails['billing_email'] = $orderDetails["shipping_email"];
    $orderDetails['shipping_is_billing'] = true;
    $orderDetails['shipping_customer_name'] = $orderDetails["user_first_name"];
    $orderDetails['shipping_last_name'] = $orderDetails["user_last_name"];
    $orderDetails['shipping_address'] = $orderDetails["user_address_1"];
    $orderDetails['shipping_address_2'] = $orderDetails["shipping_address_2"];
    $orderDetails['shipping_city'] = $orderDetails["user_city"];
    $orderDetails['shipping_pincode'] = $orderDetails["user_post_code"];
    $orderDetails['shipping_country'] = $countryName;
    $orderDetails['shipping_state'] = $stateName;
    $orderDetails['shipping_email'] = $orderDetails["shipping_email"];
    $orderDetails["shipping_phone"] = $orderDetails["shipping_mobile"];
    foreach ($orderDetails['order_items'] as $key => $item){
        $orderDetails['order_items'][$key]['name']= $productName;
        $orderDetails['order_items'][$key]['sku']= $productSku;
        $orderDetails['order_items'][$key]['units']= $item['qty'];
        $orderDetails['order_items'][$key]['selling_price']= $productPrice;
        $orderDetails['order_items'][$key]['discount']= $productDiscount;
        $orderDetails['order_items'][$key]['tax']= "";
        $orderDetails['order_items'][$key]['hsn']= "";
        }

        //there was array call back error so I kept this copy for refernce.
    
//   foreach ($orderDetails['order_items'] as $key => $item){
//     $orderDetails['order_items'][$key]['name']= $item($productName);
//     $orderDetails['order_items'][$key]['sku']= $item($productSku);
//     $orderDetails['order_items'][$key]['units']= $item($productUnit);
//     $orderDetails['order_items'][$key]['selling_price']= $item($productPrice);
//     $orderDetails['order_items'][$key]['discount']= $item($productDiscount);
//     $orderDetails['order_items'][$key]['tax']= "";
//     $orderDetails['order_items'][$key]['hsn']= "";
//   }



  $orderDetails["payment_method"] = $orderDetails["payment_by"];
  $orderDetails["shipping_charges"] = $orderDetails["shipping_cost"];
  $orderDetails["giftwrap_charges"] = 0;
  $orderDetails["transaction_charges"] = 0;
  $orderDetails["total_discount"] = $orderDetails["discount"];
  $orderDetails["sub_total"] = $orderDetails["total_price"];
  $orderDetails["length"] = 10;
  $orderDetails["breadth"] = 10;
  $orderDetails["height"] = 10;
  $orderDetails["weight"] = 0.400;
  
  
//   echo "<pre>";print_r(json_encode($orderDetails));die;

  $orderDetails = json_encode($orderDetails);


    //Generate Access Token

    $c = curl_init();
    $url = "https://apiv2.shiprocket.in/v1/external/auth/login";
    curl_setopt($c, CURLOPT_URL, $url);
    curl_setopt($c, CURLOPT_POST, 1);
    curl_setopt($c, CURLOPT_POSTFIELDS, "email=mdshahzebumer@gmail.com&password=Fuckthatshit@2");
    curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
    $server_output=curl_exec($c);
    curl_close($c);

    $server_output = json_decode($server_output, true);
    // echo '<prev'; print_r($server_output); die;
    // dd($server_output); die;


    //Create order on ShipRocket

    $url = 'https://apiv2.shiprocket.in/v1/external/orders/create/adhoc';
    $c = curl_init($url);
    curl_setopt($c, CURLOPT_POSTFIELDS, $orderDetails);
    curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($c, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($c, CURLOPT_SSL_VERIFYPEER, 0); 
    curl_setopt($c, CURLOPT_HTTPHEADER, array('Content-Type:application/json', "Authorization: Bearer ".$server_output['token'].''));
    $result = curl_exec($c);
    curl_close($c);



$result = json_decode($result, true);
//  dd($result); die;

if(isset($result['status_code'])&&$result['status_code']==1){
    //Update Order Table Column is_pushed to 1
    Order::where('id', $order_id)->update(['is_pushed'=>1]);
    $status = true;
    $message = "Order Successfully Pushed to ShipRocket";
}else{
    $status= false;
    $message = "Order Failed";
}
return array('status'=>$status, 'message'=>$message);






    }



}

