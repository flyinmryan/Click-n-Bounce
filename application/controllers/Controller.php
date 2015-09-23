<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->output->enable_profiler();
		$this->load->library('session');
		$this->load->library('googlemaps');
		$this->load->library('form_validation');
		$this->load->model('Model');
		$this->load->helper('url');
		$this->session->set_userdata('logged_in', false);
	}

	 public function index()
	{
		$this->load->view('users/index', array('errors' => $this->session->flashdata('errors')));
  }

	public function processCoords(){
		$post = $this->input->post();
		$latLngSess = array('lat' => $post['lat'], 'lng' => $post['lng']);
		$this->session->set_userdata('post', $post);
		$cities = $this->Model->getCities($post['lat'], $post['lng']);
		$results = array('results' => $post, 'cities' => $cities, 'errors' => $this->session->flashdata('errors'));
		$this->load->view('users/trips', $results);
	}
	public function checkout(){
		$order = $this->input->post();
		if (count($order) == 3) {
			$orderArr = array('ord' => $order);
			$this->load->view('users/checkout', $orderArr);

		} else {
			$this->session->set_flashdata('errors', '<p>Please enter a valid package/quantity before purchasing.</p>');
			$cities = $this->Model->getCities($this->session->userdata('post')['lat'], $this->session->userdata('post')['lng']);
			$results = array('results' => $this->session->userdata('post'), 'cities' => $cities, 'errors' => $this->session->flashdata('errors'));
			$this->load->view('users/trips', $results);
		}
	}
	public function submitPayment(){
		$newOrd = $this->input->post();
		$bill = $this->Model->newOrder($newOrd);
		$post = array('info' => $bill);
		$this->load->view("users/itinerary", $post);
	}
	public function returnToTrips(){
		$cities = $this->Model->getCities($this->session->userdata('post')['lat'], $this->session->userdata('post')['lng']);
		$results = array('results' => $this->session->userdata('post'), 'cities' => $cities, 'errors' => '');
		$this->load->view('users/trips', $results);
	}

	public function confirmation(){
		$this->load->view('users/confirmation', array('post' => $this->session->userdata('post'), 'dest' => $this->session->userdata('city_name')));
	}
	
	public function register(){
		$this->Model->register($this->input->post());
		redirect('/');
	}

	public function login(){
		$user = $this->Model->login($this->input->post());
		if ($user) {
			$this->session->set_userdata('logged_in', true);
			$this->session->set_userdata('user_id', $user['id']);
			if ($user['admin_level'] == 9) {
				redirect('/orders/');
			} else {
				$this->index();
			}
		} else {
			redirect('/');
		}
	}

	public function logoff(){
		$this->session->set_userdata('logged_in', false);
		$this->session->set_userdata('user_id', 0);
		redirect('/');
	}
}