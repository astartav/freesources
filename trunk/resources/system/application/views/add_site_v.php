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
<h1>The Best Intranet Ever</h1>
</div>
<form class="admin_form" method="post" action="http://localhost/index.php/add_site_into_db">
<input type="text" name="parentid", value="ID ���������", size="12" /><br><br>
<input type="text" name="sitename", value="�������� �����", size="80" /><br><br>
<input type="text" name="link", value="������ �� ����", size="80" /><br><br>
<textarea name="smalldesc", value="������� �������� (200 �������� ��������)", maxlength="200", rows="4", cols="61"></textarea><br><br>
<textarea  name="fulldesc", value="������ ��������", rows="6", cols="61"></textarea><br><br>
<select multiple name="parts">
<option value="����������������">����������������</option>
<option value="���-������">���-������</option>
<option value="������">������</option>
<option value="���">���</option>
<option value="����">����</option>
<option value="����������">����������</option>
</select><br><br>
<p>
<input type="radio" name="language" value="russian" checked /> �������<br>
<input type="radio" name="language" value="english" /> ����������<br><br>
�������
<input type="text" name="ourrating" size="3" /></p>
<input type="submit" name="go" value="���������" />
</form>
</body>
</html>
