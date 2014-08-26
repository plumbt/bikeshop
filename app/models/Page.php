<?php

class Page extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'title' => 'required',
		'slug' => 'required',
		'content' => 'required'
	);
}
