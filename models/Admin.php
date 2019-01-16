<?php

include ROOT.'/components/DataBase.php';

class Admin{

    public function createAlbum($name_album,$description,$date,$count_img){
        $db = new DataBase();
        $pdo = $db->connect();
        
        
        //Validation
        $queryIsExistsAlbum = "SELECT name_album "
                ."FROM albums WHERE name_album = :name_album";
        $sttmIsExistsAlbum = $pdo->prepare($queryIsExistsAlbum);
        $existsAlbum = $sttmIsExistsAlbum->execute(array(':name_album' => $name_album));
        $exist = $sttmIsExistsAlbum->rowCount();
        echo $count_img;
        if ($count_img == 0) {
            exit("Выберите фотографий");
        }
        
        if ($exist == 1 || ($count_img==0)) {
            exit("Такой Альбом сущ");
        }
        
        
        $query = "INSERT INTO albums(name_album, description, date, count_img)"
                ."VALUES (:name_album, :description, :date, :count_img); ";
        $sttm = $pdo->prepare($query);
        $successcreatealbum = $sttm->execute(
                array(
                    ':name_album' => $name_album,
                    ':description' => $description,
                    ':date' => $date,
                    ':count_img'=> $count_img
                )
            );
            if (!$successcreatealbum) {
                exit('Error : no created Album');
            }
        return $pdo->lastInsertId();;       
    }  
                  
    public function insertImages($album_name,$album_size,$album_tmp_name, $target,$i,$parent_album_id){
        
        $db = new DataBase();
        $pdo = $db->connect();

        $name = 'images-'.$i;
        $set_name_img = $_POST[$name]; 
        move_uploaded_file($album_tmp_name, $target);

        $query = "INSERT INTO images (parent_album_id, name_img, set_name_img, size, date)"
                . "VALUES (:parent_album_id, :name_img, :set_name_img, :size, now())";

        $sttm = $pdo->prepare($query); 
        
        $succes = $sttm->execute(
             array(
                 ':parent_album_id' => $parent_album_id,
                 ':name_img' => $album_name,
                 ':set_name_img' => $set_name_img,
                 ':size' => $album_size
             ));
         return $succes;
    }
}