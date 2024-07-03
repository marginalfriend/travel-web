<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Order extends Controller
{
    public function order(Request $request)
		{
			$user = Auth::user();
			$data = $request->validate([
				'child_visitor'=>'numeric',
				'adult_visitor'=>'numeric'
			]);

			$data->user = $user;

			
		}
}
