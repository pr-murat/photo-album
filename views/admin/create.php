<?php include ROOT.'/views/templates/main.php' ?>


<div class="mycontent">
    <div class="row">
        <div class="col-md-3 create-album-link">
            <a href="#"> <button class="btn btn-primary">Создать альбом</button> </a>
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-form">Создание фотоальбома</div>
                    
                    
                    
                    
                    <form>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="exampleInputEmail1">Название фотоальбома:</label>
                                <input type="text" class="form-control" id="album_name">
                            </div>
                            <div class="col-md-4">
                                <label for="exampleInputEmail1">Дата создание фотоальбома:</label>
                                <input type="text" class="form-control" id="album_name">
                             </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <label for="exampleInputEmail1">Дата создание фотоальбома:</label>
                                <textarea class="form-control" id="album_name"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="exampleInputEmail1">Выберите фотографий для загрузки</label>
                                <input type="file" accept=".jpg, .jpeg, .png" name="files[]" multiple="multiple">
                            </div>
                        </div>
                        
                        
                        
                        <button type="submit" class="btn btn-primary" id="btn_create_album">Создать</button>
                        

                     </form>

                </div>
            </div>

        </div>
    </div>

</div>




<?php include ROOT.'/views/templates/footer.php' ?>