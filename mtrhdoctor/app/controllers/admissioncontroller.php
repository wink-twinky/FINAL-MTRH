<?php

class Admissioncontroller extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /admissioncontroller
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('admission.create');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /admissioncontroller/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admission.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /admissioncontroller
	 *
	 * @return Response
	 */
	public function store()
	{
		                                              $Admission= new Admission;
                                                      $Admission ->filenumber = Input::get('filenumber');
                                                      $Admission ->admissiondate = Input::get('admissiondate');
                                                      $Admission ->wing = Input::get('wing');
                                                      $Admission ->word = Input::get('word');
                                                      $Admission ->bednumber = Input::get('bednumber');
                                                      $Admission ->save();

                                                      $answer = "yes";

                                                      echo "<center>Patient is succesfully admitted.</center>";

                                                      if ($answer="yes") {
                                                      	
                                                      	return View::make('admission.create');
                                                      }
	}

	/**
	 * Display the specified resource.
	 * GET /admissioncontroller/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		 
            $filenumber = Input::get('filenumber');
           

		    $Admission = Admission::wherefilenumber($filenumber)->first();
            $Admission->admissiondate;
            $Admission->wing;
            $Admission->word;
            $Admission->bednumber;

            

            $Client = Client::wherefilenumber($filenumber)->first();
            $Client ->firstname;
            $Client ->nhif;
            $Client ->keen;
            $Client ->keenmobile;
            
            $Diagnosis = Diagnosis::wherefilenumber($filenumber)->first();
            $Diagnosis ->diagnosis;
            $Diagnosis ->prescription;
            $Diagnosis ->comments;
            $Diagnosis ->doctor;


            $Pharmacy = Pharmacy::wherefilenumber($filenumber)->first();
            $Pharmacy ->prescription;
            $Pharmacy ->medication;
            $Pharmacy ->servedby;

            $Payment = Payment::wherefilenumber($filenumber)->first();
            $Payment ->consultationfee;
            $Payment ->labfee;
            $Payment ->medicationfee;
            $Payment ->admissionfee;
            $Payment ->totalcharges;
            $Payment ->paid;
            $Payment ->balance;
            


                 return View::make('admission.show', ['payment'=>$Payment],['pharmacy'=>$Pharmacy],['diagnosis'=>$Diagnosis],['client'=>$Client],['admission'=>$Admission]);




	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /admissioncontroller/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /admissioncontroller/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /admissioncontroller/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}