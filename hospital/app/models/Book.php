<?php

class Book extends \Eloquent {

	protected $table = 'book';
	
	protected $fillable = ['filenumber','name','visit2','time','reason'];
}

