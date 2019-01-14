<?php
class Album{

    private function connect(){
        include_once(ROOT.'/config/db.php');
        return $pdo = new PDO("mysql:host=".DB_HOST."; dbname=".DB_NAME, DB_USER, DB_PASSWORD);
    }
    
    public function getAlbum(){
        $query = "SELECT *"
                ."FROM albums "
                ."ORDER BY name_album ";
        $pdo = $this->connect();
        $sttm = $pdo->prepare($query);
        $sttm->execute();
        
        $albums = $sttm->fetchAll();
        foreach ($albums as $key => &$value){
            $queryIMG = "SELECT name_img "
                ."FROM images WHERE parent_album_id=$value[album_id] "
                ."ORDER BY parent_album_id LIMIT 1 ";
            $pdo = $this->connect();
            $sttmIMG = $pdo->prepare($queryIMG);
            $sttmIMG->execute();
            $path = $sttmIMG->fetchAll();
            array_push($value, $path[0][0]);
            //echo $path[0][0];
        }

        return $albums;
    }
    

    public function getAlbumOne($id){
        $query = "SELECT *"
                ."FROM albums WHERE album_id=$id";
        $pdo = $this->connect();
        $sttm = $pdo->prepare($query);
        $sttm->execute();
        return $sttm->fetchAll();
    }
    
    
    public function getImages($id){
        $query = "SELECT name_img "
                ."FROM images WHERE parent_album_id=$id";
        $pdo = $this->connect();
        $sttm = $pdo->prepare($query);
        $sttm->execute();
        return $sttm->fetchAll();
    }
}








