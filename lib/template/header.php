<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/lib/css/style.css"/>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <title>HW2</title>
</head>
<body>
<div id="header">
    <div id="navbar">
        <!--<a href="/">Главная</a>-->
        <?php if(!isset($_SESSION['user'])):?>
            <a href="/user/login">Войти</a>
            <a href="/user/register">Регистрация</a>
        <?php endif ?>
        <?php if(isset($_SESSION['user'])):?>
            <a class="user" href="/cabinet"><?php echo $_SESSION['username'] ?></a>
            <a href="/user/logout">Выйти</a>
        <?php endif ?>
    </div>
</div>
<div id="content">