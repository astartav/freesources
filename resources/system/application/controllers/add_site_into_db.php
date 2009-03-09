<?php
class Add_site_into_db extends Controller{
 function index(){
  $this->load->model('Add_site_m');
  
  if (! empty ($_POST)) {
   $query=$this->Add_site_m->insert_into_db(); 
   echo $query; 
  }
   
  else print_r($_POST); 
 }
 
}
?>
