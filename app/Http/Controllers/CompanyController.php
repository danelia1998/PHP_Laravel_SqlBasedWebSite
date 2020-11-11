<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::all();

        return view('all-company')->with('companies', $companies);
    }

    public function edit(Request $request)
    {

        $companies = Company::where('id', $request->company_id)->first();

        return view('edit-company')->with('companies', $companies);
    }

    public function read()
    {
        return 'this is read';
    }

    public function update(Request $request)
    {

        Company::where('id', $request->id)->update([
            'name' => $request->name,
            'code' =>  $request->code,
            'address' => $request->address,
            'city' => $request->city,
            'country' => $request->country
        ]);

        return redirect('/companies');
    }

    public function delete(Request $request)
    {
        Company::where("id", $request->company_id)->delete();

        return redirect('/companies');
    }

    public function create()
    {
        return 'this is create';
    }

    public function date()
    {


        $last_year = $year = date("Y");

        return view('edit-company')->with('last_year', $last_year);
    }

    public function store(Request $request)
    {
        Company::create([
            'name' => $request->name,
            'code' =>  $request->code,
            'address' => $request->address,
            'city' => $request->city,
            'country' => $request->country
        ]);

        return redirect('/companies');
    }
}
