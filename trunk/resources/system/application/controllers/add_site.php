<?php
class Add_site extends Controller {
 
 function index() {
  $this->load->helper('form');
  $this->load->view('add_site_v');
  if (! empty ($POST)) $query=$this->Add_site_m->insert_into_db(); 
 }
  
}
?>