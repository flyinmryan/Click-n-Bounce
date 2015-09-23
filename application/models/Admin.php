<?php

class Admin extends CI_Model {

  public function getorders()
  {
    $query = "SELECT orders.id, orders.depdate, orders.retdate, orders.billadd, orders.billadd2, orders.billcity, 
                     orders.billstate, orders.billzip, orders.user_id, orders.status, orders.qty, packages.price, 
                     orders.created_at, orders.updated_at FROM orders
              JOIN packages
              ON orders.package_id = packages.id;";
    return $this->db->query($query)->result_array();
  }

  public function getpackages()
  { return $this->db->query("SELECT packages.id, packages.duration, packages.price,
    cities.name from packages LEFT JOIN cities on cities.id = packages.city_id;")->result_array();

  }

  public function get_trim_packages($offset){
    return $this->db->query("SELECT packages.id, packages.duration, packages.price,
    cities.name from packages LEFT JOIN cities on cities.id = packages.city_id LIMIT {$offset}, 10;")->result_array();
  }

  public function get_order_by_id($id){
    $query = "SELECT * FROM orders WHERE id = {$id}";
    return $this->db->query($query)->row_array();
  }

  public function edit($post){
    $query = "UPDATE orders SET billadd = ?, billadd2 = ?, billcity = ?, billstate = ?, billzip = ?, shipadd = ?, 
                                shipadd2 = ?, shipcity = ?, shipstate = ?, shipzip = ?, depdate = ?, retdate = ?, 
                                qty = ?, status = ?, updated_at = NOW() WHERE id = ?;";
    $dep = DateTime::createFromFormat('F j, Y H:i', $post['depdate'] . ' ' . $post['deptime']);
    $ret = DateTime::createFromFormat('F j, Y H:i', $post['retdate'] . ' ' . $post['rettime']);
    $values = array($post['billadd'], $post['billadd2'], $post['billcity'], $post['billstate'], $post['billzip'], 
                    $post['shipadd'], $post['shipadd2'], $post['shipcity'], $post['shipstate'], $post['shipzip'], 
                    $dep->format('Y-m-d H:i:s'), $ret->format('Y-m-d H:i:s'), $post['qty'], $post['status'], $post['postNum']);
    $this->db->query($query, $values);
  }

  public function deleteOrder($post){
    $query = "DELETE FROM orders WHERE id = {$post['orderID']};";
    $this->db->query($query);
  }

  public function get_cities(){
    $query = "SELECT DISTINCT(name), id FROM cities ORDER BY name;";
    return $this->db->query($query)->result_array();
  }

  public function add_package($post){
    $query = "INSERT INTO packages (duration, price, created_at, updated_at, city_id)
                             VALUES(?, ?, NOW(), NOW(), ?);";
    $values = array($post['duration'], $post['price'], $post['city']);
    $this->db->query($query, $values);
  }

  public function delete_package($post){
    $query = "DELETE FROM packages WHERE id = {$post['packageID']};";
    $this->db->query($query);
  }

  public function get_package_by_id($id){
    $query = "SELECT * FROM packages WHERE id = {$id}";
    return $this->db->query($query)->row_array();
  }

  public function edit_package($post){
    $query = "UPDATE packages SET duration = ?, price = ?, city_id = ? WHERE id = ?;";
    $values = array($post['duration'], $post['price'], $post['city'], $post['packNum']);
    $this->db->query($query, $values);
  }

  public function get_packages_by_key($key){
    return $this->db->query("SELECT * from packages LEFT JOIN cities on cities.id = packages.city_id WHERE packages.id LIKE '%{$key}%' OR 
    packages.duration LIKE '%{$key}%' OR packages.price LIKE '%{$key}%' OR cities.name LIKE '%{$key}%';")->result_array();
  }

  public function get_trim_packages_by_key($key, $offset){
    return $this->db->query("SELECT packages.id, packages.duration, packages.price,
    cities.name from packages LEFT JOIN cities on cities.id = packages.city_id WHERE packages.id LIKE '%{$key}%' OR 
    packages.duration LIKE '%{$key}%' OR packages.price LIKE '%{$key}%' OR cities.name LIKE '%{$key}%' 
    LIMIT {$offset}, 10;")->result_array();
  }

  public function get_orders_by_key($post){
    $key = $post['search'];
    $query = "SELECT orders.id, orders.depdate, orders.retdate, orders.billadd, orders.billadd2, orders.billcity, 
                     orders.billstate, orders.billzip, orders.user_id, orders.status, orders.qty, packages.price, 
                     orders.created_at, orders.updated_at FROM orders
              JOIN packages
              ON orders.package_id = packages.id
              WHERE orders.id LIKE '%{$key}%' OR orders.depdate LIKE '%{$key}%' OR 
              orders.retdate LIKE '%{$key}%' OR orders.billadd LIKE '%{$key}%' OR orders.billcity LIKE '%{$key}%' OR 
              orders.billstate LIKE '%{$key}%' OR orders.billzip LIKE '%{$key}%' OR orders.user_id LIKE '%{$key}%' OR 
              orders.status LIKE '%{$key}%' OR orders.qty LIKE '%{$key}%' OR packages.price LIKE '%{$key}%' OR 
              orders.created_at LIKE '%{$key}%' OR orders.updated_at LIKE '%{$key}%';";
    return $this->db->query($query)->result_array();
  }
}
 ?>
