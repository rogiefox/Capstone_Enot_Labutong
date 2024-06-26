<?php

namespace App\Http\Controllers;

use App\Models\UserTable;
use App\Models\ProductTable;
use App\Models\OrderTable;

use Illuminate\Http\Request;
use Session;

class OrderController extends Controller
{
    // create and display (ORDER PAGE)
    public function create_order_form(){
        $UserTable = UserTable::query()
        ->select('*')
        ->get();

        $ProductTable = ProductTable::query()
        ->select('*')
        ->get();

        $OrderTable = OrderTable::query()
        ->select('*')
        ->join('user_tables','OrderUserID','=','user_tables.UserID')
        ->join('product_tables','OrderProductID','=','product_tables.ProductID')
        ->get();

        return view('AdminOrders', compact('OrderTable','UserTable','ProductTable'));
    }
    // create and display (ORDER PAGE)

    // create_order_getter (POST)
    public function create_order_getter(request $request){
        $OrderTable = new OrderTable;

        $OrderTable->OrderUserID = $request->input('OrderUserID');
        $OrderTable->OrderProductID = $request->input('OrderProductID');
        $OrderTable->Notes = $request->input('Notes');
        $OrderTable->Address = $request->input('Address');
        $OrderTable->PaymentMethod = $request->input('PaymentMethod');
        $OrderTable->TotalAmount = $request->input('TotalAmount');
        $OrderTable->OrderStatus = $request->input('OrderStatus');
        $OrderTable->save();

        return redirect('orders');
    }
    // create_order_getter (POST)

    // delete_order_getter (DELETE)
    public function delete_order_getter(string $id){
        $OrderTable = OrderTable::where('OrderID','=', $id)
        ->delete();

        return redirect('orders');
    }
    // delete_order_getter (DELETE)

    // update_order_gtter (PUT)
    public function update_order_getter(request $r, string $id){
        $OrderTable = OrderTable::where('OrderID','=', $id)
        ->Update(
            [
                'OrderUserID' => $r->input('OrderUserID'),
                'OrderProductID' => $r->input('OrderProductID'),
                'Notes' => $r->input('Notes'),
                'Address' => $r->input('Address'),
                'PaymentMethod' => $r->input('PaymentMethod'),
                'TotalAmount' => $r->input('TotalAmount'),
                'OrderStatus' => $r->input('OrderStatus')
            ]
            );
        return redirect('orders');
    }
    // update_order_gtter (PUT)


    // user_order_detail (USER ORDER PAGE)
    public function user_order_detail(string $id){
        $OrderTable = OrderTable::query()
        ->select('*')
        ->where('UserID','=', $id)
        ->join('user_tables','OrderUserID','=','user_tables.UserID')
        ->join('product_tables','OrderProductID','=','product_tables.ProductID')
        ->get();

        return view('userorder', compact('OrderTable'));
    }
     // user_order_detail (USER ORDER PAGE)

    //  user cart
     public function show_cart(){
        return view('/UserCart');
    }
    //  user cart

    // user check out
    public function show_checkout(){
        $OrderTable = OrderTable::query()
        ->select('*')
        ->get();
        return view('/UserCheckout');
    }

    // submit order
    public function submitOrder(Request $request)
    {
        $userId = $request->input('userId');
        $orderData = $request->input('order');

        foreach ($orderData as $item) {
            $OrderTable = new OrderTable;
            $OrderTable->OrderUserID = $userId;
            $OrderTable->OrderProductID = $item['id'];
            $OrderTable->Notes = $item['message'];
            $OrderTable->TotalAmount = $item['price'];
            $OrderTable->save();
        }
        return response()->json(['success' => true, 'message' => 'Order submitted successfully']);
    }
    // submit order



    // UserCount
    public function show_count()
    {
        $userCount = UserTable::count(); // Get the count of all users
        $productCount = ProductTable::count(); // Get the count of all users
        $orderCount = OrderTable::count(); // Get the count of all users

        return view('/welcome', compact('userCount','productCount','orderCount')); // Pass the count to the view
    }
}
