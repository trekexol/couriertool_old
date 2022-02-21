<?php

namespace App\Http\Controllers\Agency;

use App\Http\Controllers\Controller;
use App\Models\Countries\Country;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        return view('admin.agencies.index');
    }

    public function create(){

        $countries = Country::all();

        return view('admin.agencies.create',compact('countries'));
    }

}
