<?php
class Add_site_m extends Model{
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
 
 parent::Model;
 
 }
 function insert_into_db(){
  $this->parentid->$POST['parentid'];
  $this->name->$POST['sitename'];
  $this->link->$POST['link'];
  $this->parts->$POST['parts'];
  $this->programs->$POST['programs'];
  $this->categories->$POST['categories'];
  $this->blocks->$POST['blocks'];
  $this->ourrating->$POST['ourrating'];
  $this->language->$POST['language'];
  $this->smalldesc->$POST['smalldesc'];
  $this->fulldesc->$POST['fulldesc'];
  
  $this-db->insert('sites', $this);
 }
 
}
?>