<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//defined('BASEPATH') OR exit('No direct script access allowed');

class Admins extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
    $this->load->model('Admin');
  }

  public function index(){
    $this->session->set_userdata('current', 1);
    if ($this->session->userdata("logged_in") == true){
      redirect('Admins/displayorders');
    } else {
      $this->load->view('/Admin/login');
    }
  }


  public function login()
  {
    $is_logged = $this->Admin->login($this->input->post());


    if($is_logged){
      $this->session->set_userdata('email', $is_logged['email']);
      $this->session->set_userdata("logged_in", true);
      redirect('/');
    }
  }

  public function displayorders()
  {
    $orders = $this->Admin->getorders();
    $this->load->view('Admin/Orders', array('orders' => $orders));
  }


  public function displaypackages()
  {
    $packages = $this->Admin->get_trim_packages(0);
    $this->load->view('/Admin/products', array('packages' => $packages));
  }

  

  public function logoff()
  {
    $this->session->sess_destroy();
    redirect('/');
  }

  public function edit($id)
  {
    $order = $this->Admin->get_order_by_id($id);
    $this->load->view('admin/partials/edit', array('order' => $order));    
  }

  public function all(){
    $orders = $this->Admin->getorders();
    $this->load->view('admin/partials/orders', array('orders' => $orders));
  }

  public function editProcess(){
    $this->Admin->edit($this->input->post());
    $orders = $this->Admin->getorders();
    $this->load->view('admin/partials/orders', array('orders' => $orders));
  }

  public function delete(){
    $this->Admin->deleteOrder($this->input->post());
    $orders = $this->Admin->getorders();
    $this->load->view('admin/partials/orders', array('orders' => $orders));
  }

  public function allProducts(){
    $products = $this->Admin->get_trim_packages(0);
    $this->load->view('admin/partials/packages', array('packages' => $products));
  }

  public function defaultPagination(){
    $this->session->set_userdata('current', 1);
    $products = $this->Admin->getpackages();
    $this->load->view('admin/partials/pagination', array('packages' => $products, 'current' => 1));
  }

  public function newPackage(){
    $cities = $this->Admin->get_cities();
    $this->load->view('admin/partials/newPackage', array('cities' => $cities));
  }

  public function newPackageProcess(){
    $this->Admin->add_package($this->input->post());
    $this->pagedResultsSolo($this->session->userdata('current'));
  }

  public function deletePackage(){
    $this->Admin->delete_package($this->input->post());
    $this->pagedResultsSolo($this->session->userdata('current'));
  }

  public function editPackage($id){
    $cities = $this->Admin->get_cities();
    $package = $this->Admin->get_package_by_id($id);
    $this->load->view('admin/partials/editPackage', array('cities' => $cities, 'package' => $package));
  }

  public function editPackageProcess(){
    $this->Admin->edit_package($this->input->post());
    $this->pagedResultsSolo($this->session->userdata('current'));
  }

  public function searchPackages(){
    $results = $this->Admin->get_trim_packages_by_key($this->input->post('search'), 0);
    $this->load->view('admin/partials/packages', array('packages' => $results));
  }

  public function searchOrders(){
    $results = $this->Admin->get_orders_by_key($this->input->post());
    $this->load->view('admin/partials/orders', array('orders' => $results));
  }

  public function pagination($current){
    $this->session->set_userdata('current', $current);
    $results = $this->Admin->get_packages_by_key($this->input->post('search'));
    $this->load->view('admin/partials/pagination', array('packages' => $results, 'current' => 1));
  }

  public function pagedResults($current, $query){
    $results = $this->Admin->get_trim_packages_by_key($query, 10 * ($current-1));
    $this->load->view('admin/partials/packages', array('packages' => $results));
  }

  public function pagedPagination($current, $query){
    $this->session->set_userdata('current', $current);
    $results = $this->Admin->get_packages_by_key($query, $current);
    $this->load->view('admin/partials/pagination', array('packages' => $results, 'current' => $current));
  }

  public function pagedResultsSolo($current){
    $results = $this->Admin->get_trim_packages(10 * ($current-1));
    $this->load->view('admin/partials/packages', array('packages' => $results));
  }

  public function pagedPaginationSolo($current){
    $this->session->set_userdata('current', $current);
    $results = $this->Admin->getpackages($current);
    $this->load->view('admin/partials/pagination', array('packages' => $results, 'current' => $current));
  }

  public function currentPagination(){
    $results = $this->Admin->getpackages($this->session->userdata('current'));
    $this->load->view('admin/partials/pagination', array('packages' => $results, 'current' => $this->session->userdata('current')));
  }


}
?>
