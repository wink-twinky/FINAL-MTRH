<?php

class Pharmacycontroller extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /pharmacycontroller
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('pharmacy.create');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /pharmacycontroller/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('pharmacy.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /pharmacycontroller
	 *
	 * @return Response
	 */
	public function store()
	{
       $m = Input::get('filenumber');
       
       $n = Input::get('diagnosis');
       $o = Input::get('prescription');
       $p = Input::get('medication');
       $q = Input::get('servedby');

  		
  	   $a = !empty($m);
  	   //$xo = !empty($x); 
  	   $b = !empty($n);
  	   $c = !empty($o);
  	   $d = !empty($p);
  	   $e = !empty($q);

       


		if ($a  && $b && $c && $d && $e) {


           


			 $Pharmacy= new Pharmacy;
             $Pharmacy ->filenumber = Input::get('filenumber');
             $diagnosis = Input::get('diagnosis');
             $Pharmacy ->diagnosis = $diagnosis ;
             $prescription =Input::get('prescription'); 
             $Pharmacy ->prescription =$prescription ; 
             $medication = Input::get('medication');
             $Pharmacy ->medication = $medication;
             $servedby = Input::get('servedby');
             $Pharmacy ->servedby = $servedby;
             $Pharmacy ->save();


             
            $username = Input::get('username'); 

            $Client = Client::whereusername($username)->first();
           
            $Client->email ;

            $email = $Client->email ;
            

            $to = $email;                 
            $subject = 'Prescription';
            $body = "Hi".$username .".</br>You were diagnosed with .".$diagnosis."</br>This is your medication</br>" .$medication."</br>.And this is the prescription we have given you</br>" .$prescription.".</br>Incase of any complications please visit us again.Thank You.</br>You were served by-".$servedby."." ;
            $headers='From:pharmacy@mtrh.com';

             mail($to, $subject, $body,$headers );

             


             $answer = "yes";

             echo "<center><b>A mail containing diagnosis ,  medication and prescription details has been send to the patient with filenumber: " .$m ." .</b></center>";

             if ($answer="yes")
              {
             	
             	return View::make('pharmacy.create');
             }
		}
		                                             
	}

	/**
	 * Display the specified resource.
	 * GET /pharmacycontroller/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /pharmacycontroller/{id}/edit
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
	 * PUT /pharmacycontroller/{id}
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
	 * DELETE /pharmacycontroller/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}