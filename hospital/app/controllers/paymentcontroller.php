<?php

class Paymentcontroller extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /paymentcontroller
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('payment.create');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /paymentcontroller/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('payment.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /paymentcontroller
	 *
	 * @return Response
	 */
	public function store()
	{
		     $a = Input::get('filenumber');
		     $b = Input::get('consultationfee');
		     $c = Input::get('labfee');
		     $d = Input::get('medicationfee');
		     $e = Input::get('admissionfee');
		     $f =Input::get('totalcharges');
		     $g = Input::get('paid');
		     $h = Input::get('balance');


		       $i = empty($a);
		       $j= empty($b);
		       $k= empty($c);
		       $l =empty($d);
		       $m =empty($e);
		       $n =empty($f);
		       $o=empty($g);
		       $p =empty($h);
		       $q =empty($i);




                   
             If($i && $j && $k && $l && $m  && $n && $o && $p && $q)
             {


               $answer = "yes" ;
                
                echo "<center>Please fill all the form section.Incase payment is null fill with a zero</center>";

                if($answer = "yes")
                {

                  return View::make('payment.create');       

                }

             

             }
             else
             {

                	                        $Payment = new Payment;
                                            $Payment->filenumber = Input::get('filenumber');
                                            $Payment ->consultationfee = Input::get('consultationfee');
                                            $Payment->labfee = Input::get('labfee');
                                            $Payment ->medicationfee = Input::get('medicationfee');
                                            $Payment ->admissionfee=Input::get('admissionfee');
                                            $charged = Input::get('totalcharges');
                                            $Payment ->totalcharges = $charged;
                                            $paid =  Input::get('paid');
                                            $Payment ->paid = $paid;
                                            $balance = $charged - $paid;
                                            $Payment ->balance = $balance;
                                            $Payment ->save();
                                              
                                              $answer = "yes";

                                              echo "<center><b>Outstanding balance is" .$balance. "ksh.</b></center>";

                                              if($answer = "yes")
                                              {
                                               
                                               return View::make('payment.create');

                                              }


             }





		                                    

	}

	/**
	 * Display the specified resource.
	 * GET /paymentcontroller/{id}
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
	 * GET /paymentcontroller/{id}/edit
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
	 * PUT /paymentcontroller/{id}
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
	 * DELETE /paymentcontroller/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}