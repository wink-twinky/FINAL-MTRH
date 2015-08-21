<?php

class Payment extends \Eloquent {

    protected $table = 'payment';

	protected $fillable = ['filenumber',
'consultationfee',
'medicationfee',
'admissionfee',
'totalcharges',
'paid',
'balance'];
}