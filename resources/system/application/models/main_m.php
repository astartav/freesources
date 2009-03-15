<?php
class Main_m extends Model {
 function programming(){
 $sites = $this->db->query('SELECT * FROM sites WHERE parts="Программирование"');
 return $sites;

 }
function webdesign(){
 $sites = $this->db->query('SELECT * FROM sites WHERE parts="Веб-дизайн"');
 return $sites;

 }
function design(){
 $sites = $this->db->query('SELECT * FROM sites WHERE parts="Дизайн"');
 return $sites;

 }
function art(){
 $sites = $this->db->query('SELECT * FROM sites WHERE parts="Арт"');
 return $sites;

 }
function flash(){
 $sites = $this->db->query('SELECT * FROM sites WHERE parts="Флеш"');
 return $sites;

 }
function photography(){
 $sites = $this->db->query('SELECT * FROM sites WHERE parts="Фотография"');
 return $sites;

 }

}
?>