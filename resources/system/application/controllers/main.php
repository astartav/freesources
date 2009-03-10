<?php
class Main extends Controller {

 function index() {
  $this->load->model('Main_m');
  $data->all_sites = $this->Main_m->index_m(); 
  $this->load->view('main_v', $data);
 
 }


}
?>