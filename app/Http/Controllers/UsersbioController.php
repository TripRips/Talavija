<?php

namespace App\Http\Controllers;
use App\birth_bio;
use Illuminate\Http\Request;
use Sentinel;
use App\User;
use function GuzzleHttp\Promise\all;

class UsersbioController extends Controller
{
    function index(){
        return view('usersbio');
    }

    public function store(Request $request)
    {
        $birth_bio = new birth_bio;
        $birth_bio->date = request('date');
        $birth_bio->country = request('country');
        $birth_bio->city = request('city');
        $birth_bio->adress = request('adress');
        $birth_bio->notes = request('notes');
        $birth_bio->save();
    }

}
