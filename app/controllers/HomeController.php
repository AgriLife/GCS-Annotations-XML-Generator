<?php

class HomeController extends BaseController {

	protected $user;

	public function __construct()
	{
		$this->user = Auth::user();
	}

	public function showDashboard()
	{
		$data = array();

		$data['user'] = $this->user;

		$data['searches'] = $this->user->searches;

		$data['sites'] = $this->user->sites;

		return View::make('dashboard', $data);
	}

}