<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Main Page</title>
</head>
<body>
<a href="http://localhost/index.php/add_site">Add site</a>
<?php 

foreach ($all_sites->result() as $row) {
   echo $row->parentid;
   echo $row->name;
   echo $row->link;
   echo $row->smalldesc;
   echo $row->fulldesc;
   echo $row->language;
   echo $row->ourrating;
 
  }
?> 
Здеьс ттескт яЧНО!?

</body>
</html>
