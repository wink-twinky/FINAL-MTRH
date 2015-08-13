<?php

class Admission extends \Eloquent {

	protected $table = 'admission'; 

	protected $fillable = ['filenumber','admissiondate','wing','word','bednumber'];
}