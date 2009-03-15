<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Resources Main</title>
<style>
.admin_form{
 position: absolute;
 width: 30%;
 top: 12%;
 right: 50%;
 left: 30%;
 }
.admin_form input, textarea, select{
 border: 1px solid brown;
 }
.header{
 position: absolute;
 width: 100%;
 height: 10%;
 background: gold;
 }
</style>
</head>
<body>
<div class="header">
<h1>The Best Satyr Ever</h1>
</div>
<form class="admin_form" method="post" action="http://localhost/index.php/add_site_into_db">
<input type="text" name="parentid", value="ID категории", size="12" /><br><br>
<input type="text" name="sitename", value="Название сайта", size="80" /><br><br>
<input type="text" name="link", value="Ссылка на сайт", size="80" /><br><br>
<?php  $smalldescdata=array( 'name' => 'smalldesc',
'value' => 'Краткое описание сайта (200 символов max)',
'maxlength' => '200','rows' => '4', 'cols' => '61' );
echo form_textarea($smalldescdata); 
echo "<br><br>";
 $fulldescdata=array( 'name' => 'fulldesc',
  'value' => 'Полное описание сайта (без ограничений)',
  'rows' => '6', 'cols' => '61' );
echo form_textarea($fulldescdata);?>
<br><br>
<select multiple name="parts">
	<option value="Программирование">Программирование</option>
	<option value="Веб-дизайн">Веб-дизайн</option>
	<option value="Дизайн">Дизайн</option>
	<option value="Арт">Арт</option>
	<option value="Флеш">Флеш</option>
	<option value="Фотография">Фотография</option>
</select><br><br>
<select multiple name="programs">
	<option value="Adobe Photoshop">Photoshop</option>
	<option value="Eclipse">Eclipse</option>
	<option value="Adobe Illustrator">Adobe Illustrator</option>
	<option value="Adobe Flash">Adobe Flash</option>
	<option value="Xara Xtreme">Xara Xtreme</option>
	<option value="Microsoft Word">Microsoft Word</option>
</select><br><br>
<select multiple name="categories">
	<option value="PHP">PHP</option>
	<option value="JavaScript">JavaScript</option>
	<option value="Верстка">Верстка</option>
	<option value="Графика">Графика</option>
	<option value="Промдизайн">Промдизайн</option>
	<option value="Баннеры">Баннеры</option>
	<option value="Рекламная фотография">Рекламная фотография</option>
</select><br><br>
<select multiple name="categories">
	<option value="Блоги">Блоги</option>
	<option value="Форумы">Форумы</option>
	<option value="Ресурсы">Ресурсы</option>
	<option value="Уроки">Уроки</option>
	<option value="Сервис">Сервисы</option>
	<option value="Порталы">Порталы</option>
	<option value="Описание">Описание</option>
	<option value="История">История</option>
	<option value="Официальный сайт">Официальный сайт</option>
</select><br><br>
Язык:<br>
<input type="radio" name="language" value="russian" checked /> Русский<br>
<input type="radio" name="language" value="english" /> Английский<br><br>
Рейтинг:
<input type="text" name="ourrating" size="3" /></p>
<input type="submit" name="go" value="Отправить" />
</form>
</body>
</html>
