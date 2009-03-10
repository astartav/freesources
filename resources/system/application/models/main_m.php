<?php
class Main_m extends Model {
 function index_m(){
 $sites = $this->db->query('SELECT * FROM sites');
 return $sites;

 }

}
?>