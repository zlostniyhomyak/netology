<?php 
	$name = "Рома";
	$age = 27;
	$email = "shesternin@sph.kz";
	$city = "Алматы";
	$about = "Краткий текст обо мне: учусь в нетологии, очень интересно :). <br> С html не заморачивался - тут же важно php?";

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Обо мне</title>
	<style>
	    body {
	        font-family: sans-serif;  
	    }
	    
	    dl {
	        display: table-row;
	    }
	    
	    dt, dd {
	        display: table-cell;
	        padding: 5px 10px;
	    }
	</style>
</head>
<body>
	<h1>Страница пользователя <?php echo $name; ?></h1>
    <dl>
        <dt>Имя</dt>
        <dd><?php echo $name; ?></dd>
    </dl>
    <dl>
        <dt>Возраст</dt>
        <dd><?php echo $age; ?></dd>
    </dl>
    <dl>
        <dt>Адрес электронной почты</dt>
        <dd><a href="mailto:shesternin@sph.kz"><?php echo $email; ?></a></dd>
    </dl>
    <dl>
        <dt>Город</dt>
        <dd><?php echo $city; ?></dd>
    </dl>
    <dl>
        <dt>О себе</dt>
        <dd><?php echo $about; ?></dd>
    </dl>
</body>
</html>