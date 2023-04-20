<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Manager;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index()
    {
        $nbrProducts = 7;
        return view('backOffice.dashboard')->with(["manager" => "Achraf","nbrClients" => 3,"nbrProducts" => $nbrProducts]);
    }

}
