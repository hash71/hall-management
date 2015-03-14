<?php

class Entry extends MEloquent {
	
	protected $collection = 'entries';

	protected $guarded = [];

	protected $primary_key = '_id';

	public $timestamps = false;


}