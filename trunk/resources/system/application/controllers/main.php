<?php
class Main extends Controller {

 function index() {
 
  $this->load->model('Main_m'); 
  $data->programming = $this->Main_m->programming(); 
  $data->webdesign = $this->Main_m->webdesign(); 
  $data->design = $this->Main_m->design(); 
  $data->art = $this->Main_m->art(); 
  $data->flash = $this->Main_m->flash(); 
  $data->photography = $this->Main_m->photography(); 
  $this->load->view('main_v', $data);
 
 }


}
?>