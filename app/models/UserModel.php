<?php
require 'DB.php';

class UserModel {
    private $name;
    private $email;
    private $pass;
    private $re_pass;
   
    private $_db = null;

        public function __construct() {
            $this->_db = DB::getInstence();
        }

        public function setData($name, $email, $pass, $re_pass) {
            $this->name = $name;
            $this->email = $email;
            $this->pass = $pass;
            $this->re_pass = $re_pass;
        }
// проверка формы
    public function validForm($name, $email, $pass) {
  
    $result = $this->_db->query("SELECT COUNT(`id`) AS `count` FROM `users` WHERE `name`= '$name'");
    $user = $result->fetch(PDO::FETCH_ASSOC);
    
    if(strlen($name) < 3)
        return "Логин слишком короткое";
    else if($user['count'] > 0)
        return 'Пользователь с таким логином существует';
    else if(strlen($email) < 3)
        return "Email слишком короткий";
    else if(strlen($pass) < 3)
        return "Пароль не менее 3 символов";
        else if($this->pass != $this->re_pass)
                return "Пароли не совпадают";
    else
        return "Верно";
}

        // добовляем пользователя
    public function addUser() {
            
        $sql = 'INSERT INTO users (name, email, pass) VALUES(:name, :email, :pass)';
        $query = $this->_db->prepare($sql);

        $pass = password_hash($this->pass, PASSWORD_DEFAULT);
        $query->execute(['name' => $this->name, 'email' => $this->email, 'pass' => $pass]);

        $this->setAuth($this->name);
               
           
        }

    public function getUser() {
        $name = $_COOKIE['login'];
        $result = $this->_db->query("SELECT * FROM `users` WHERE `name` = '$name'");
        return $result->fetch(PDO::FETCH_ASSOC);
        }

    public function logOut() {
        setcookie('login', $this->name, time() - 3600, '/');
        unset($_COOKIE['login']);
        header('Location: /user/auth');
        }
// авторизация
    public function auth($name, $pass) {
        $result = $this->_db->query("SELECT * FROM `users` WHERE `name` = '$name'");
        $user = $result->fetch(PDO::FETCH_ASSOC);

        if($user['name'] == '')
            return 'Пользователя с таким логином не существует';
        else if(password_verify($pass, $user['pass']))
            $this->setAuth($name);
        else
            return 'Логин и пароль не совпадают';
        }

    public function setAuth($name) {
        setcookie('login', $name, time() + 3600, '/');
        header('Location: /user/dashboard');
        }
    }