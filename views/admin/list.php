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
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                    
                </div>
            </div>
            
        </div>
    </div>

</div>




<?php include ROOT.'/views/templates/footer.php' ?>