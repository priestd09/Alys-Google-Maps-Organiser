<?php


class Company_Controller extends Base_Controller
{
	public $restful = true;

	public function get_index()
	{
		return View::make('extern.index-client');
	}
}