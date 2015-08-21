<?php

class Consultationcontroller extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /consultationcontroller
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('consultation.create');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /consultationcontroller/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('consultation.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /consultationcontroller
	 *
	 * @return Response
	 */
	public function store()
	{
		$Consultation = new Consultation;
        $Consultation->filenumber = Input::get('filenumber');
        $Consultation->symptoms = Input::get('symptoms');
        $Consultation->doctor = Input::get('doctor');
        $Consultation->save();
        $answer = "yes";

        echo "<center><strong>Consultation data successfully updated</strong></center>";

        if ($answer = "yes") {
        	
        	return View::make('consultation.create');
        }
	}

	/**
	 * Display the specified resource.
	 * GET /consultationcontroller/{id}
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
	 * GET /consultationcontroller/{id}/edit
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
	 * PUT /consultationcontroller/{id}
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
	 * DELETE /consultationcontroller/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}