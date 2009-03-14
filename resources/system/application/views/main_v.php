<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Main Page</title>
<style>
.head {
position: absolute;
width: 100%;
height: 10%;
top: 0%;
left: 0%;
background: red;
}
.body_sites {
 position: absolute;
 top: 15%;
 left: 35%;
 width: 30%;
 padding: 5px;
}
</style>
</head>
<body>
<div class="head">
<h1>The Best Links Ever</h1>
<a style="background: silver;" href="http://localhost/index.php/add_site">Add site</a>
</div>
<div class="body_sites">
<?php 
foreach ($all_sites->result() as $row) {
 if ($row->ourrating>90){?>
  <div style="background: silver;"><a href="<?php echo $row->link;?>"><?php echo $row->name;?></a><span style="position: absolute; right: 5px; background: red;">99</span><br>
  <a style="font-size: 9px;" href="category<?php echo $row->parentid;?>">Категория <?php echo $row->parentid;?></a></div>
   <?php
   //echo "<br>";  
   echo $row->smalldesc; 
   echo "<br>";
   //echo $row->fulldesc;
   //echo $row->language;
   //echo $row->ourrating;?>
   <div style="text-align: right; background: yellow;"><a href="id">info</a> | <a href="idcomment">комментировать (23)</a></div>
   <hr>
    <?php }} ?>
     </div>
</body>
</html>
