<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::orderBy('created_at', 'DESC')->get();

        return view('company.show', [
            'companies' => $companies
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/company/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $company = new Company;
        $company->name = $request->name;
        $company->address = $request->address;
        $company->vat = $request->vat;
        $company->email = $request->email;
        $company->phone_number = $request->phone_number;
        $company->socials = $request->socials;
        $company->save();

        return redirect('/company/show')
        ->with(
            [
                'message'=>$company->name.' added correctly.'
            ]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::find($id);

        return view('company.edit',
            ['company'=>$company]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $company = Company::find($id);
        $company->name = $request->name;
        $company->address = $request->address;
        $company->vat = $request->vat;
        $company->email = $request->email;
        $company->phone_number = $request->phone_number;
        $company->socials = $request->socials;
        $company->save();

        return redirect('/company/show')
        ->with(
            [
                'message'=>$company->name.' modified correctly.'
            ]
        );
    }

    public function confirmDelete($id)
    {
        //instantiate the object to delete
        $company = Company::find($id);
        return view('company/delete',
            [
                'company'=>$company
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $company = Company::find($request->id);
        $name = $company->name;
        $company->delete();

        return redirect('/company/show')
            ->with(['deleted'=> $name. ' deleted correctly']);
    }
}
