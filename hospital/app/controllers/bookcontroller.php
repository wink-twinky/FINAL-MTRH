<?php

class Bookcontroller extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /bookcontroller
	 *
	 * @return Response
	 */
	public function index()
	{
	      return View::make('book.create');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /bookcontroller/create
	 *
	 * @return Response
	 */
	public function create()
	{

		return View::make('book.create');  

        

	}

	/**
	 * Store a newly created resource in storage.
	 * POST /bookcontroller
	 *
	 * @return Response
	 */
	public function store()
	{
		                      $Book = new Book;
                              $Book->filenumber = Input::get('filenumber');
                              $Book->name = Input::get('name');
                              $Book->visit2 = Input::get('visit2');
                              $Book->time = Input::get('time');
                              $Book->reason = Input::get('reason');
                              $Book->save();
                              $answer = "yes";
                               
                               echo "<center><strong>You have succesfully booked an appoindment</strong></center>";

                               if ($answer = "yes") {
                               	
                               	return View::make('book.create');
                               }





	}

	/**
	 * Display the specified resource.
	 * GET /bookcontroller/{id}
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
	 * GET /bookcontroller/{id}/edit
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
	 * PUT /bookcontroller/{id}
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
	 * DELETE /bookcontroller/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}