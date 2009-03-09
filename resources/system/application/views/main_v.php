<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Insert title here</title>
<style>
form{
 position: absolute;
 width: 30%;
 top: 20%;
 right: 35%;
 left: 35%;
}
form input, select{
 border: 1px solid red;
}
</style>
</head>
<body>
<form>
<?php
 $namedata=array(
 'name' => 'sitename',
 'value' => 'Название сайта',
 'size' => '60'
 );
 echo form_input($namedata);
 $linkdata=array(
 'name' => 'link',
 'value' => 'ссылка на сайт',
 'size' => '60'
 );
 echo "<br><br>";
 echo form_input($linkdata);
 $partsdata=array(
 'webdesign' => 'Веб-дизайн',
 'programming' => 'Программирование',
 'design' => 'Дизайн',
 'art' => 'Арт',
 'flash' => 'Флеш',
 'photography' => 'Фотография'
 );
 echo "<br><br>";
 echo form_dropdown('parts', $partsdata);
 echo "<br><br>";
 $ratingdata=array(
 'name' => 'our_rating',
 'value' => '100',
 'size' => '3'
 );
 echo form_input($ratingdata);
?>
</form>
</body>
</html>
