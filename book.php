<?php
class User {
    private $login;
    private $role;

    public function __construct($login, $role = 'user') {
        $this->login = $login;
        $this->role = $role;
    }
    public function getLogin() {
        return $this->login;
    }
    public function getRole(){
        return $this->role;
    }
    public function getDescription(){
        return "Пользователь " . $this->login . ", роль " . $this->role;
    }
}