<?php

class Diagnosiscontroller extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /diagnosiscontroller
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('diagnosis.create');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /diagnosiscontroller/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('diagnosis.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /diagnosiscontroller
	 *
	 * @return Response
	 */
	public function store()
	{
		
                                          $Diagnosis = new Diagnosis;
                                          $Diagnosis ->filenumber = Input::get('filenumber');
                                          $Diagnosis ->diagnosis = Input::get('diagnosis');
                                          $Diagnosis ->prescription = Input::get('prescription');
                                          $Diagnosis ->comments = Input::get('comments');
                                          $Diagnosis ->doctor = Input::get('doctor');
                                          $Diagnosis ->save();

                                          $say = 'yes';

                                          echo "<center>records successful uploaded to database.</center>";

                                          if($say='yes')
                                          {


                                          			return View::make('diagnosis.create');

                                          }

                                          
	}

	/**
	 * Display the specified resource.
	 * GET /diagnosiscontroller/{id}
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
	 * GET /diagnosiscontroller/{id}/edit
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
	 * PUT /diagnosiscontroller/{id}
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
	 * DELETE /diagnosiscontroller/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}