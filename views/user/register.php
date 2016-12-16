<?php include ROOT . '/lib/template/header.php'; ?>

<?php if ($result): ?>
    <ul>
        <li>Вы зарегистрированы! На вашу почту было отправлено сообщение с ссылкой на активацию.</li>
    </ul>
        <?php else: ?>
            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
<?php endif; ?>

                        <form action="#" method="post" class="form">
                            <ul>
                                <li>
                                    <h2>Регистрация на сайте</h2>
                                </li>
                                <li>
                                    <label>Логин:</label>
                                    <input type="text" name="login" class="style1" placeholder="Логин" value="<?php echo $login; ?>"/>
                                </li>
                                <li>
                                    <label for="name">Почта:</label>
                                    <input type="email" name="email" class="style1" placeholder="E-mail" value="<?php echo $email; ?>"/>
                                </li>
                                <li>
                                    <label for="name">Пароль:</label>
                                    <input type="password" name="password" class="style1" placeholder="Пароль" value="<?php echo $password; ?>"/>
                                </li>
                                <li>
                                    <label for="name">Повторите пароль:</label>
                                    <input type="password" name="password2" class="style1" placeholder="Пароль" value="<?php echo $password; ?>"/>
                                </li>
                                <li>
                                    <input type="submit" name="submit" class="button1" value="Регистрация" />
                                </li>
                            </ul>
                        </form>

<?php include ROOT . '/lib/template/footer.php'; ?>