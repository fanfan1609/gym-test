<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$data = ['title' => "HOME"];

		$this->load->view("landing", $data);
		// $this->render("home", $data);		
	}

    public function gallery()
    {
        $data = ['title' => "GALLERY"];

        $this->render("gallery", $data);
    }

	public function price()
	{
		$data = ['title' => "PRICE"];

        $this->render("price", $data);
	}
}
