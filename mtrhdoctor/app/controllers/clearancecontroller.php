<?php

class Clearancecontroller extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /clearancecontroller
	 *
	 * @return Response
	 */
	public function index()
	{
		
	      return View::make('clearance.create');	
    }
	/**
	 * Show the form for creating a new resource.
	 * GET /clearancecontroller/create
	 *
	 * @return Response
	 */
	public function create()
	{
		  
		  return View::make('clearance.create');
                  
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /clearancecontroller
	 *
	 * @return Response
	 */
	public function store()
	{
		          $Clearance = new Clearance;
		          $fig =  Input::get('filenumber');
                  $Clearance ->filenumber =$fig;
                  $Clearance ->clearancedate = Input::get('clearancedate');
                  $Clearance  ->comments= Input::get('comments');
                  $Clearance  ->clearedby= Input::get('clearedby');
                  $Clearance  ->save();

                   $answer = "yes";

                   echo "<center>Patient  file number ".$fig." is succesfully cleared.</center>";

                   if ($answer = "yes") {


                   	return View::make('clearance.create');

                   }



	}

	/**
	 * Display the specified resource.
	 * GET /clearancecontroller/{id}
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
	 * GET /clearancecontroller/{id}/edit
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
	 * PUT /clearancecontroller/{id}
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
	 * DELETE /clearancecontroller/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}