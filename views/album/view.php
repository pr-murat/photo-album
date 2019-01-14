<?php include ROOT.'/views/templates/main.php' ?>


<div class="mycontent">
    <div class="row">
        <div class="col-md-3 create-album-link">
            
            <a href="#"> <button class="btn btn-primary">Управления альбомов</button> </a>
            
             <!--Iss-->
            <form class="from-enter">
                <div class="title-form">Вход с аккаунта</div>
                
                <div class="form-group row">
                  <div class="col-sm-12">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                  </div>
                </div>


                <div class="form-group row">
                  <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary">Войти</button>
                  </div>
                </div>
              </form> 
              <!--Iss-->
              
              
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-form">Все фотографий из альбома</div>
                    <h1><?=$albumDesc[0]['name_album']?></h1>
                    <p>Дата создание альбома: <?=$albumDesc[0]['date']?></p>
                    <p><?=$albumDesc[0]['description']?></p>
                    <hr>
                    <form>
                        <div  class="row album-view">
                            
                            <?php foreach ($images as $value){ ?>
                            
                            <div class="col-lg-2 every-image">
                                <img src="/assets/gallery/<?=$value['name_img']?>">
                            </div>
                            <?php } ?>
                            
                        </div>
                     </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include ROOT.'/views/templates/footer.php' ?>