<?php

class AlbumController{

    
    public function actionIndex(){
        //Получаем модель
        include(ROOT.'/models/Album.php');
        $album = new Album;
        $arrayAlbum = $album->getAlbum();
        
       
        
        /*echo '<pre>';
        print_r($arrayAlbum);
        echo '</pre>';*/
        
        //Render indexView
        include ROOT.'/views/album/index.php';
    }

    public function actionView($id = 'empty'){
        //echo $id;
        include(ROOT.'/models/Album.php');
        $album = new Album;
        $albumDesc = $album->getAlbumOne($id);//Описание одного альбома
        $images = $album->getImages($id);//Все пути к файлу
        include ROOT.'/views/album/view.php';
    }

}



?>