<?php

class Diagnosis extends \Eloquent {

    protected $table = 'diagnosis';

	protected $fillable = ['filenumber','diagnosis','prescription','comments','doctor'];






}