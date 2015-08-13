<?php

class Client extends \Eloquent {
	
	protected $table = 'client';

	protected $fillable = ['firstname','medianname','lastname','picpath','residence','personalmobile','homemobile','email',
	'email','nhif','profesion','location','keen','keenmobile','username','password'];
}

