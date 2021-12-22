<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ticketController extends Controller
{
	
	public function move()
	{
		return view('ticket');
	}
}