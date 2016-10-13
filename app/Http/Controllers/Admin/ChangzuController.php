<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ChangzuController extends Controller
{
    //
    public function index ()
    {
    	// echo "hi";
    	return view("admin.part.changzu");
    }
}
