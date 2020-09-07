<?php

namespace App\Http\Controllers;


use App\Payment;
use App\User;
use Sentinel;
use Illuminate\Http\Request;

class WalletController extends Controller
{

    public function create()
    {

        return view('WalletSend');

    }

    public function store(Request $request)
    {

        $payment = new Payment;
        $payment->tips = request('tips');
        $payment->datums = request('datums');
        $payment->summa = request('summa');
        $payment->merkis = request('merkis');
        $payment->sanemejs = request('sanemejs');

        $payment->save();

    }

    public function userstable()
    {

        $users = User::all();
        $showpayments = Payment::all();

        return view('WalletUsers')->with('users',$users)->with('showpayments',$showpayments);

    }

}
