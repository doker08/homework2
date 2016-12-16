<?php

/**
 * Created by PhpStorm.
 * User: sokol_000
 * Date: 16.12.2016
 * Time: 0:07
 */
include_once(ROOT."/models/User.php");

class UserController
{
    /**
     * Action для активации аккаунта
     */
    public function actionActivation($hash){
        if(!$result = User::activate($hash)){
            $errors[] = 'Ошибка активации аккаунта.';
        }

        require_once(ROOT . '/views/user/activation.php');
        return true;
    }

    /**
     * Action для страницы регистрации
     */
    public function actionRegister(){
        $login = false;
        $email = false;
        $password = false;
        $password2 = false;
        $result = false;
        if (isset($_POST['submit'])) {

            $login = $_POST['login'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $password2 = $_POST['password2'];

            $errors = false;

            if (!User::checkLogin($login)) {
                $errors[] = 'Логин не должен быть короче 4-х символов';
            }

            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов и содержать символы верхнего регистра.';
            }

            if(!User::checkPasswordMatch($password, $password2)){
                $errors[] = 'Пароли не совпадают.';
            }

            if (User::checkEmailExists($email)) {
                $errors[] = 'Такой email уже используется';
            }

            if ($errors == false) {
                $result = User::register($login, $email, $password);
            }
        }

        require_once(ROOT . '/views/user/register.php');
        return true;
    }

    /**
     * Action для страницы входа
     */
    public function actionLogin(){
        $email = false;
        $password = false;
        $secret = false;

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Получаем данные из формы
            $email = $_POST['email'];
            $password = $_POST['password'];

            if($_SESSION['auth_count'] >= 3){
                $secret = $_POST['g-recaptcha-response'];
            }

            $errors = false;
            // Валидация полей
            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }

            $userId = User::checkUserData($email, $password);

            if ($userId == false) {
                $errors[] = 'Неправильные данные для входа на сайт';
                $_SESSION['auth_count']++;
            } else if(!User::checkActivation($userId)){
                $errors[] = 'Аккаунт не активирован. Проверьте, пожалуйста, Вашу почту.';
            } else if($_SESSION['auth_count'] >= 3 && empty($secret)){
                $errors[] = 'Неверная капча.';
            }else {
                User::auth($userId);

                $_SESSION['auth_count'] = 0;

                header("Location: /cabinet");
            }
        }

        require_once(ROOT . '/views/user/login.php');
        return true;
    }

    /**
     * Action для выхода с аккаунта
     */
    public function actionLogout()
    {
        session_start();

        unset($_SESSION["user"]);

        header("Location: /");
    }
}