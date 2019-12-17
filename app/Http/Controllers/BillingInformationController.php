<?php

namespace App\Http\Controllers;

use App\BillingInformation;
use Illuminate\Http\Request;
use Validator;
use Session;

class BillingInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
                'total_amount_test' => ['required'],
                //'name_title' => ['required', 'string', 'max:255'],
                'fristname' => ['required', 'string', 'max:255'],
                'lastname' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255'],
                // 'country' => [ 'required'],
                'address' => [ 'required','string', 'max:255'],
                // 'address2' => [ 'string', 'max:255'],
                'city' => [ 'string', 'max:255'],
                'state' => [ 'string', 'max:255'],
                'zip' => ['required', 'max:255'],
                // 'Phone' => ['required', 'max:255'],
        ]);
// dd($request->all());


// Destroying session


              // Create billing info

        $abc = (preg_replace("/[^.0-9]/","",$request->total_amount_test));

        $billings = new BillingInformation;
        $billings->donation_type = $request->donate_type??0;
        $billings->currency = $request->currency??"";
        $billings->amount = (float) $abc??0.0;
        $billings->name_title = $request->title??"";
        $billings->fristname = $request->fristname??"";
        $billings->lastname = $request->lastname??"";
        $billings->email = $request->email??"";
        $billings->country = $request->dropdowncountry??"";
        $billings->address = $request->address??"";
        $billings->address_2 = $request->address2??"";
        $billings->state = $request->state??"";
        $billings->city = $request->city??"";
        $billings->zip = $request->zip??0;
        $billings->phone = $request->phone??"";
        // dd($billings);
        $billings->save();
        Session::flush();
        return redirect('/')->with('success', 'Billing Information Added');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BillingInformation  $billingInformation
     * @return \Illuminate\Http\Response
     */
    public function show(BillingInformation $billingInformation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BillingInformation  $billingInformation
     * @return \Illuminate\Http\Response
     */
    public function edit(BillingInformation $billingInformation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BillingInformation  $billingInformation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BillingInformation $billingInformation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BillingInformation  $billingInformation
     * @return \Illuminate\Http\Response
     */
    public function destroy(BillingInformation $billingInformation)
    {
        //
    }
}
