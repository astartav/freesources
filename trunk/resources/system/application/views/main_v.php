<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Main Page</title>
<style>
.body_right {
 position: absolute;
 left: 35%;
 width: 30%;
 background: orange;
 padding: 5px;
}
</style>
</head>
<body>
<a style="background: silver;" href="http://localhost/index.php/add_site">Add site</a>
<div class="body_right">
<?php 
foreach ($all_sites->result() as $row) {
 if ($row->ourrating>90){?>
  <a href="<?php echo $row->link;?>"><?php echo $row->name;?></a><br>
  <a style="font-size: 9px;" href="category<?php echo $row->parentid;?>">Категория <?php echo $row->parentid;?></a>
   <?php
   echo "<br>";  
   echo $row->smalldesc; 
   echo "<br>";
   //echo $row->fulldesc;
   //echo $row->language;
   //echo $row->ourrating;?>
   <div style="text-align: right;"><a href="id">info</a></div>
   <hr>
    <?php }} ?>
     </div>
</body>
</html>