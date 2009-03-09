<?php
class Res extends Model{
 function restake(){
  $id=array(1,2,3,4,5,6);
  $name=array(
  	'Веб-дизайн',
	'Программирование',
	'Дизайн',
	'Арт',
	'Флеш',
	'Фотография');
   $link=array(
  	'link1',
	'link2',
	'link3',
	'link4',
	'link5',
	'link6');
  $i=0;
 foreach ($id as $i=>$val)
  {
  $this->db->set('id', $val[$i]);
  $this->db->set('name', $name[$i]);
  $this->db->set('link', $link[$i]);
  $this->db->insert('parts');
  }
 }
}
?>