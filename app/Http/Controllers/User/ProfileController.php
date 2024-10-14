<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        return view('pages.admin.dashboard-general-dashboard', [
            'type_menu' => 'dashboard'
        ]);
    }

    public function orderIndex() {
        Carbon::setLocale('id');
        $user = Auth::user();

        $orders = Order::with(['user', 'orderItems.product.productImages', 'transaction'])
                ->where('user_id','=', $user->id)
                ->get()->groupBy('status');

        foreach($orders as $order){
            $order[0]['created_at_formatted'] = $order[0]['created_at']->toDayDateTimeString();
        }

        // return json_decode($orders);


        return view('pages.user.profile.order.index', [
            'type_menu' => 'order',
            'orders' => $orders,
        ]);

        // return view('pages.user.profile.order.index');
    }
}
