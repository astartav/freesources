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
        background: gold;
    } .body_sites {
        position: absolute;
        top: 13%;
        bottom: 3%;
        left: 30%;
        width: 60%;
        background: #e5cac4;
    } .programs {
        position: absolute;
        top: 13%;
        left: 0%;
        bottom: 3%;
        width: 20%;
        border: 2px solid brown;
        color: white;
    } .img {
        position: absolute;
        border: 1px solid black;
    } .programming {
        position: relative;
        margin-left: 204px;
        height: 141px;
        background: #d53838;
    } .webdesign {
        position: relative;
        top: 14%;
        height: 20%;
        background: pink;
    }
</style>
</head>
<body>
<div class="head">
    <h1>The Best Links Ever</h1>
    <a style="background: silver;" href="http://localhost/index.php/add_site">Add site</a>
</div>
<div class="programs">
    <ul>
    <?php
    foreach ($programs->result() as $row){
    ?>
    <li>
        <a href="<?php echo $row->link ?>"><?php echo $row->name;?></a>
    </li>
    <?php } ?>
    </ul>
</div>
<div class="body_sites">
    <img class="img" src="http://webmorda.kz/site2img/?u=astartav.livejournal.com&s=s&q=5" />
    <div class="programming">
        <?php
        foreach ($programming->result() as $row) {
            if ($row->ourrating > 90) { ?>
        <div>
            <a href="<?php echo $row->link;?>"><?php echo $row->name; ?></a>
            <span style="position: absolute; right: 3%;">123 <b><span style="color: red;">+</span><span style="color: blue">-</span></b></span>
            <br>
        </div>
        <div style="position: absolute;">
            <a style="font-size: 9px;" href="category<?php echo $row->parentid;?>">категория <?php echo $row->parentid; ?></a>
        </div>
        <br>
        <?php
        echo $row->smalldesc;
        echo "<br>";
        ?>
        <div style="text-align: right;">
		<a href="id">info</a> | <a href="idcomment">комментировать (23)</a>
        </div>
        <hr>
        <?php
        }
        }
        ?>
    </div>
    <?php
    foreach ($webdesign->result() as $row) {
        if ($row->ourrating > 90) { ?>
    <div class="webdesign">
        <div class="body_sites_pic">
            <img src="http://p-userpic.livejournal.com/85439587/13466523" />
        </div>
        <div>
            <a href="<?php echo $row->link;?>"><?php echo $row->name;?></a>
            <span style="position: absolute; right: 3%;">123 <b><span style="color: red;">+</span><span style="color: blue">-</span></b></span>
            <br>
        </div>
        <div style="position: absolute;">
            <a style="font-size: 9px;" href="category<?php echo $row->parentid;?>">категория <?php echo $row->parentid;?></a>
        </div>
        <br>
        <?php
        echo $row->smalldesc;
        echo "<br>";
        ?>
        <div style="text-align: right;">
            <a href="id">info</a> | <a href="idcomment">комментировать (23)</a>
        </div>
        <hr>
        <?php
        }
        }
        ?>
    </div>
</div>
</body>
</html>
