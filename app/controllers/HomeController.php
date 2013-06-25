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

		$data['searches'] = Search::where('user_id', $this->user->id)->get();

		$data['sites'] = Site::where('user_id', $this->user->id)->get();

		return View::make('dashboard', $data);
	}

}