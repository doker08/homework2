<?php include ROOT . '/lib/template/header.php'; ?>

                    <?php if ($result): ?>
                        <ul><li>Пароль изменен!</li></ul>
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
                                        <h2>Изменить пароль</h2>
                                    </li>
                                    <li>
                                        <label>Пароль:</label>
                                        <input type="password" name="password" class="style1" placeholder="Пароль" value=""/>
                                    </li>
                                    <li>
                                        <label>Повторите пароль:</label>
                                        <input type="password" name="password2" class="style1" placeholder="Пароль" value=""/>
                                    </li>
                                    <li>
                                    <input type="submit" name="submit" class="button1" value="Сохранить" />
                                    </li>
                                </ul>
                            </form>


<?php include ROOT . '/lib/template/footer.php'; ?>