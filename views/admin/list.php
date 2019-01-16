<?php include ROOT.'/views/templates/main.php' ?>


<div class="mycontent">
    <div class="row">
        <div class="col-md-3 create-album-link">
            <a href="#"> <button class="btn btn-primary">Создать альбом</button> </a>
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-form">Настрйка сортировок</div>
                    <form>
                        <div class="form-group row sort-setting">
                            <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Сортировака альбомов</label>
                            <div class="col-sm-4">
                              <select id="inputState" class="form-control">
                                <option selected>Имя</option>
                                <option>Размер</option>
                                <option>Дата</option>
                              </select>
                            </div>
                            <div class="col-sm-4">
                              <select id="inputState" class="form-control">
                                <option selected>По возрастанию</option>
                                <option>По убыванию</option>
                              </select>
                            </div>
                         </div>
                
                        <div class="form-group row sort-setting">
                            <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Сортировака фотографий</label>
                            <div class="col-sm-4">
                              <select id="inputState" class="form-control">
                                <option selected>Имя</option>
                                <option>Размер</option>
                                <option>Дата</option>
                              </select>
                            </div>
                            <div class="col-sm-4">
                              <select id="inputState" class="form-control">
                                <option selected>По возрастанию</option>
                                <option>По убыванию</option>
                              </select>
                            </div>
                         </div>
                    <button type="submit" class="btn btn-primary">Изменить</button>
             </form>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    
                    <div class="title-form">Таблица альбомов</div>
                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Название альбома</th>
                            <th scope="col">Описание</th>
                            <th scope="col">Коли-о фото</th>
                            <th scope="col">Действия</th>
                          </tr>
                        </thead>
                        <tbody>
                            
                        <?php 
                        $i = 0;
                        foreach($arr as $value){ $i++; ?>
                          <tr>
                            <th scope="row"><?=$i;?></th>
                            <td><?=$value['name_album']?></td>
                            <td><?=$value['description']?></td>
                            <td><?=$value['count_img']?></td>
                            <td><button>Удалить альбом</button><button>Добавить фото</button></td>
                          </tr>
                          <?php } ?>
                          
                        </tbody>
                      </table>
                    
                </div>
            </div>
            
        </div>
    </div>

</div>




<?php include ROOT.'/views/templates/footer.php' ?>