<?php
class Main_m extends Model {
 function programming(){
 $sites = $this->db->query('SELECT * FROM sites WHERE parts="����������������"');
 return $sites;

 }
function webdesign(){
 $sites = $this->db->query('SELECT * FROM sites WHERE parts="���-������"');
 return $sites;

 }
function design(){
 $sites = $this->db->query('SELECT * FROM sites WHERE parts="������"');
 return $sites;

 }
function art(){
 $sites = $this->db->query('SELECT * FROM sites WHERE parts="���"');
 return $sites;

 }
function flash(){
 $sites = $this->db->query('SELECT * FROM sites WHERE parts="����"');
 return $sites;

 }
function photography(){
 $sites = $this->db->query('SELECT * FROM sites WHERE parts="����������"');
 return $sites;

 }
function programs(){
 $sites = $this->db->query('SELECT * FROM sites WHERE programs IS NOT NULL');
 return $sites;

 }
function preview(){
 $sites= $this->db->query('SELECT preview FROM sites');
 return $sites;		
} 
}
?>