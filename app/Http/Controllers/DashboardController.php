<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Article;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $admins = User::where('role', 'admin')->count();
        $articles = Article::where('status', 'publish')->count();
        $orders = Order::whereNot('status', 'pending')->count();
        $users = User::where('role', 'user')->count();
        $type_menu = 'dashboard';

        return view('pages.admin.dashboard.dashboard', compact(
            'admins', 'articles', 'orders', 'users', 'type_menu'
        ));
    }
}
