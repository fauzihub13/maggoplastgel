<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() {

        // $orders = Order::with(['user', 'orderItems.product.productImages', 'transaction'])->get();
        $orders = Order::all();

        $order_status_message = [
            'pending' => 'Menunggu Pembayaran',
            'paid' => 'Pembayaran Diterima',
            'shipped' => 'Barang Dikirim',
            'arrived' => 'Barang Diterima'
        ];

        $order_status_color = [
            'pending' => 'warning',
            'paid' => 'info',
            'shipped' => 'primary',
            'arrived' => 'success'
        ];

        return view('pages.admin.order.order-list', [
            'type_menu' => 'order',
            'orders' => $orders,
            'order_status_message' => $order_status_message,
            'order_status_color' => $order_status_color
        ]);
    }
}
