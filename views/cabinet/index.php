<?php include ROOT . '/lib/template/header.php'; ?>

    <div class="form">
        <h2>Кабинет пользователя</h2>

        <h4>Привет, <?php echo $user['login'];?>!</h4>
        <ul>
            <li><a href="/cabinet/edit/login">Изменить логин</a></li>
            <li><a href="/cabinet/edit/password">Изменить пароль</a></li>
            <li><a href="/cabinet/edit/email">Изменить почту</a></li>
        </ul>
    </div>

<?php include ROOT . '/lib/template/footer.php'; ?>