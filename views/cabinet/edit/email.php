<?php include ROOT . '/lib/template/header.php'; ?>

                    <?php if ($result): ?>
                    <ul><li>На Вашу почту было отправлено сообщение с подтверждающей ссылкой!</li></ul>
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
                                    <h2>Изменить почту</h2>
                                </li>
                                <li>
                                    <label>Почта:</label>
                                    <input type="text" name="email" class="style1" placeholder="Имя" value="<?php echo $email; ?>"/>
                                </li>
                                <li>
                                    <input type="submit" name="submit" class="button1" value="Сохранить" />
                                </li>
                            </ul>
                        </form>


<?php include ROOT . '/lib/template/footer.php'; ?>