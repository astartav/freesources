<?php
class Lol extends Controller {
	function index(){
	$data['list']=array
('http://netbiosearch.nsu.ru/',
'http://fs.oks1/',
'http://search.oks1/',
'http://atlantida.homenet/search.asp',
'http://lx.homenet/',
'http://gin.homenet/search/',
'http://owl.pp.ru/search/');
	$this->load->view('lol', $data);
	}
}
?>