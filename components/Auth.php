<?php

class Authentication{
    
    public static function isAuth(){
        if ($_SESSION['user']) {
            return $_SESSION['user'];
        }else{
            return false;
        }
    }
    
    //Тип возращ-о знач BOOLEAN
    public static function auth($log, $pswd){
        $query = "SELECT *"
                ."FROM admin WHERE login=:log AND password=:pswd";
        $pdo = self::connectDB();
        $sttm = $pdo->prepare($query);
        $sttm->execute(
                    array(':log'=>$log,':pswd'=> $pswd)
                );
        if ($sttm->rowCount()) {
            $_SESSION['user'] =  $log;      
        }
        return $sttm->rowCount();
    }

    public static function exitAuth(){
        session_destroy();
    }

    private static function connectDB(){
        include_once(ROOT.'/config/db.php');
        return $pdo = new PDO("mysql:host=".DB_HOST."; dbname=".DB_NAME, DB_USER, DB_PASSWORD);
    }

}

