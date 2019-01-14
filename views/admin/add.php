<?php include ROOT.'/views/templates/main.php' ?>


<div class="mycontent">
    <div class="row">
        <div class="col-md-3 create-album-link">
            <a href="#"> <button class="btn btn-primary">Создать альбом</button> </a>
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-form">Добавления фотографий. Альбом: NAME</div>
                    <form>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="exampleInputEmail1">Выберите фотографий для загрузки</label>
                                <input type="file" accept=".jpg, .jpeg, .png" name="files[]" multiple="multiple">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" id="btn_create_album">Добавить</button>
                     </form>

                </div>
            </div>

        </div>
    </div>

</div>




<?php include ROOT.'/views/templates/footer.php' ?>