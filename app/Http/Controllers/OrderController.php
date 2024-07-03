<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function create(Request $request)
		{
			$validated = $request->validate([
				'child_visitor'=>'numeric',
				'adult_visitor'=>'numeric',
				'destination_id' => 'required|exists:destinations,id',
				'user_id' => 'required|exists:users,id',
				'visit_date' => 'required'
			]);

			Order::create($validated);

			return redirect()->back()->with('success', 'Order created successfully!');
		}

		public function index()
		{
			$userId = Auth::id();

			$orders = Order::where('user_id', $userId)->get();

			return view('profile.orders', ['orders' => $orders]);
		}
}
