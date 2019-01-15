<?php



class AdminController{
    
    //Список альбомов
    public function actionIndex(){
        include ROOT.'/views/admin/list.php';
    }
    
    //Создание альбомы
    public function actionCreate(){
        
        if(isset($_POST['create_btn'])){
            include ROOT.'/components/DataBase.php';
            $db = new DataBase();
            $pdo = $db->connect();
            
            $count_img = count($_FILES['files']['name']);
            
            $query = "INSERT INTO albums(name_album, description, date, count_img)"
                    ."VALUES (:name_album, :description, :date, :count_img); ";
            $sttm = $pdo->prepare($query);
            $sttm->execute(
                    array(
                        ':name_album' => $_POST['name_album'],
                        ':description' => $_POST['description'],
                        ':date' => $_POST['date'],
                        ':count_img'=> $count_img
                    )
                    );
            
            $this->parent_album_id = $parent_album_id = $pdo->lastInsertId();
            
            foreach($_FILES['files']['name'] as $key => $value){
                
               $album_name = $_FILES['files']['name'][$key];
               $album_size = $_FILES['files']['size'][$key];
               $album_tmp_name = $_FILES['files']['tmp_name'][$key];
               
               $target = ROOT."\\assets\\gallery\\".$_FILES['files']['name'][$key];
                   
               move_uploaded_file($album_tmp_name, $target);
                
               $query = "INSERT INTO images (parent_album_id, name_img, size, date)"
                       . "VALUES (:parent_album_id, :name_img, :size, now())";
                
               $sttm = $pdo->prepare($query); 
               $sttm->execute(
                    array(
                        ':parent_album_id' => $parent_album_id,
                        ':name_img' => $album_name,
                        ':size' => $album_size
                    ));
             
            } 
            
            //echo "Успешно добавленоv'<script>setTimeout(function(){ location.href = '$_SERVER[HTTP_REFERER]';},1000);</script>";
        
            echo '<script> location.href = "http://photoalb:'.PORT.'/admin/setname";</script>';
        }
        
        
            include ROOT.'/views/admin/create.php';
     
    }
    
    //Добавить
    public function actionAdd(){
        include ROOT.'/views/admin/add.php';
    }
    
    //Задать имя фотографии
    public function actionSetname(){
        include ROOT.'/components/DataBase.php';
        $db = new DataBase();
        $pdo = $db->connect();
        
        $parent_album_id = $this->parent_album_id;
        
        echo $parent_album_id . "123";
        /*
        $query = "SELECT * FROM images WHERE `parent_album_id` = '$parent_album_id'";
        
        $sttm = $pdo->prepare($query); 
        $sttm->execute();
        $result = $sttm->fetchAll();
        
        print_r($result);
        */
        include ROOT.'/views/admin/setname.php';
        
    }
}
