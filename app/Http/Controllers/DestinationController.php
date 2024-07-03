<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Destination;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class DestinationController extends Controller
{
    public function index(): View
		{
			$user = Auth::user();
			$destinations = Destination::all();

			return view('destination.index', ['destinations' => $destinations, 'user' => $user]);
		}

		public function view(Destination $destination) {
			$user = Auth::user();
			
			return view('destination.view', ['destination' => $destination, 'user' => $user]);
		}
}
