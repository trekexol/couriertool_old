<?php

namespace App\Http\Controllers\Country;

use App\Http\Controllers\Controller;
use App\Models\Countries\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $countries = Country::all();

        return view('admin.countries.index',compact('countries'));
    }

    public function create(){

        $countries = Country::all();

        return view('admin.countries.create',compact('countries'));
    }

    public function store(Request $request){

       
        $country = new Country();

        $country->abbreviation = $request->abbreviation;
        $country->code_phone = $request->code_phone;
        $country->name = $request->name;
        $country->save();

        return redirect('/countries/create')->withSuccess('Se ha registrado exitosamente!');
       
     }
 
     public function edit($id){
 
        $country = Country::find($id);
 
        return view('admin.countries.edit',compact('country'));
     }

}
