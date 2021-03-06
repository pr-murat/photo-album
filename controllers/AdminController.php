<?php
class AdminController{
    
    public function __construct(){
        include_once ROOT.'/components/Auth.php';
        if (!Authentication::isAuth()) {
            echo '<script>location.href = "http://photoalb:'.PORT.'/album"</script>';
        }
    }
    
    //Список альбомов
    public function actionIndex(){
        include ROOT.'/models/Admin.php';
        $model = new Admin();
        
        $arr = $model->getListAlbum();
        
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

        if(isset($_POST['create_btn'])){
            include ROOT.'/models/Admin.php';
            $model = new Admin();

            $name_album = $_POST['name_album'];
            $description = $_POST['description'];
            $date = $_POST['date'];
            $count_img = count(array_filter($_FILES['files']['name']));
            if ($count_img == 0) {
                exit('Выберите фотографий (AdminController actionSetname)');
            }
            
            $idAlbum = $model->createAlbum($name_album,$description,$date,$count_img);

            $i = 1;
            foreach($_FILES['files']['name'] as $key => $value){
                $album_name = $_FILES['files']['name'][$key];
                $album_size = $_FILES['files']['size'][$key];
                $album_tmp_name = $_FILES['files']['tmp_name'][$key];
                $target = ROOT."\\assets\\gallery\\".$_FILES['files']['name'][$key];

                if(!$model->insertImages($album_name,$album_size,$album_tmp_name,$target,$i,$idAlbum)){
                    exit("Ошибка добавления в Базу Данных images");
                }
                $i++;
            }
            echo '<script>location.href = "http://photoalb:'.PORT.'/admin/create"</script>';
        }else{
            exit(ERR_404);
        }
    }
    
}
