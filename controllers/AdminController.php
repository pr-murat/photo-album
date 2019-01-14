<?php
$_SESSION['user'] = 'username';

function isAuthentication(){
    if ($_SESSION['user']) {
        return $_SESSION['user'];
        echo 'Вы авторизованы';
    }else{
        echo 'Вы не авторизованы';
    }
    echo 'Вы не авторизованы';
}
isAuthentication();



class AdminController{
    
    
    
    
    
    //Список альбомов
    public function actionIndex(){
        include ROOT.'/views/admin/list.php';
    }
    
    //Создание альбомы
    public function actionCreate(){
        include ROOT.'/views/admin/create.php';
    }
    
    //Добавить
    public function actionAdd(){
        include ROOT.'/views/admin/add.php';
    }
    
    //Задать имя фотографии
    public function actionSetname(){
        include ROOT.'/views/admin/setname.php';
    }
}
