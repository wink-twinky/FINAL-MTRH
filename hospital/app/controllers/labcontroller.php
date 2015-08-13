<?php

class Labcontroller extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /labcontroller
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('lab.create');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /labcontroller/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('lab.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /labcontroller
	 *
	 * @return Response
	 */
	public function store()
	{
            $a = Input::get('filenumber');
            $b = Input::get('symptoms');
			$c = Input::get('test');
			$d = Input::get('observation');
			$e = Input::get('hivaids');
			$f = Input::get('resuilt');
			$g = Input::get('technician');



		                     if (!empty($a) && !empty($b) && !empty($c) && !empty($c) && !empty($d) && !empty($e) && !empty($f)) 
		                     {
					                      $Lab = new Lab;
			                              $Lab ->filenumber = Input::get('filenumber');
			                              $Lab ->symptoms = Input::get('symptoms');
			                              $Lab ->test = Input::get('test');
			                              $Lab ->observation = Input::get('observation');
			                              $Lab ->hivaids = Input::get('hivaids');
			                              $Lab ->resuilt = Input::get('resuilt');
			                              $Lab ->technician = Input::get('technician');
			                              $Lab ->save();
		                       }
		                       else
		                       {


                            
                                           $answer = "true";

                                                    echo "<center></br></br></br></br></br>You have not filled all the  text entri.</br></br></center><center>please check  and verify .</center><center></br>Incase its  a technical problem contact the IT department .</center>";
                
           

                                                      if ( $answer = 'true' ) {


                                                                 //$timeoff = "7";

              	                                                    //sleep($timeoff);

                                                              return View::make('lab.create');
               
                     }





		                       }






		                     



                              
               

                          

	}

	/**
	 * Display the specified resource.
	 * GET /labcontroller/{id}
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
	 * GET /labcontroller/{id}/edit
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
	 * PUT /labcontroller/{id}
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
	 * DELETE /labcontroller/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}