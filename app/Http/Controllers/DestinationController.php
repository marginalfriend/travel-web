<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Destination;
use Illuminate\View\View;

class DestinationController extends Controller
{
    public function index(): View
		{
			$destinations = Destination::all();
			return view('destination.index', ['destinations' => $destinations]);
		}

		public function view(Destination $destination) {
			return view('destination.view', ['destination' => $destination]);
		}
}
