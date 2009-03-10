<?php
class Main extends Controller {

 function index() {

  $this->load->view('main_v');
  $this->load->model('Main_m');
  $all_sites = $this->Main_m->index_m(); 
  foreach ($all_sites->result() as $row) {
  
   echo $row->parentid;
   echo $row->name;
   echo $row->link;
   echo $row->smalldesc;
   echo $row->fulldesc;
   echo $row->language;
   echo $row->ourrating;
 
  }
 
 }


}
?>