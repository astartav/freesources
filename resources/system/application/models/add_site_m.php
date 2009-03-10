<?php
class Add_site_m extends Model {
  var $parentid='';
  var $name='';
  var $link='';
  var $parts='';
  var $programs='';
  var $categories='';
  var $blocks='';
  var $ourrating='';
  var $language='';
  var $smalldesc='';
  var $fulldesc=''; 
 function Add_site_m(){
 
 parent::Model();
 
 }
 
 function insert_into_db() {
  
  $this->parentid = $_POST['parentid'];
  $this->name = $_POST['sitename'];
  $this->link = $_POST['link'];
  $this->parts = $_POST['parts'];
  //$this->programs = $_POST['programs'];
  //$this->categories = $_POST['categories'];
  //$this->blocks = $_POST['blocks'];
  $this->ourrating = $_POST['ourrating'];
  $this->language = $_POST['language'];
  $this->smalldesc = $_POST['smalldesc'];
  $this->fulldesc = $_POST['fulldesc'];
  
  $this->db->insert('sites', $this);
 }
 
}
?>

