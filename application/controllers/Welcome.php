<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function index()
	{
		
		echo $this->blade->view()->make('membreSearch');
	}
}
