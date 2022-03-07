<?php

namespace App\Http\Controllers\Country;

use App\Http\Controllers\Controller;
use App\Models\Countries\City;
use App\Models\Countries\Country;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $cities = City::all();

        return view('admin.cities.index',compact('cities'));
    }

    public function create(){

        $countries = Country::all();

        return view('admin.cities.create',compact('countries'));
    }

}
