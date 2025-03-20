<?php

namespace App\Http\Controllers;

use App\Models\PaymentPlatform;
use App\Models\Currency;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $currencies = Currency::all();
        
        $paymentPlatforms = PaymentPlatform::all();
        return view('home')->with(['currencies' => $currencies, 'paymentPlatforms' => $paymentPlatforms]);
    }
}
