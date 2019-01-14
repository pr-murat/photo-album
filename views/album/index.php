<?php include ROOT.'/views/templates/main.php' ; ?>

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
                    <div class="title-form">Все ваши альбомы</div>
                    
                    
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                              <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                  <span aria-hidden="true">&laquo;</span>
                                  <span class="sr-only">Previous</span>
                                </a>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                  <span aria-hidden="true">&raquo;</span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </li>
                            </ul>
                         </nav>
                    <form>
                        <div  class="row" style="max-width: 1000px">
 
                            <?php foreach ($arrayAlbum as $value){?>
                            <div class="card album-card">
                                <div class="card-body">
                                    <a href="<?='album/view/'.$value['album_id']?>" class="card-title">
                                        <div class="img-albums">
                                            <img src="/assets/gallery/<?=$value[5]?>">
                                        </div>
                                        <?=$value['name_album'];?> (<?=$value['count_img']?>)
                                    </a>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                        <div class="row">
                            <button type="submit" class="btn btn-primary" id="btn_create_album">Создать</button>
                        </div>
                        
                     </form>

                </div>
            </div>
        </div>
    </div>
</div>
<?php include ROOT.'/views/templates/footer.php' ?>


