<?php include ROOT.'/views/templates/main.php' ?>


<div class="mycontent">
    <div class="row">
        <div class="col-md-3 create-album-link">
            <a href="#"> <button class="btn btn-primary">Создать альбом</button> </a>
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-form">Задайвайте имя каждому фотографий</div>

                    <form>
                        <div  class="row setname">
                            <div class="img-setname">
                                <img src="/1.jpg">
                                <div class="col-md-12">
                                    <input placeholder="Название фотографий" class="form-text" type="text" >
                                </div>
                            </div>
                            <div class="img-setname">
                                <img src="/1.jpg">
                                <div class="col-md-12">
                                    <input class="form-text" type="text" >
                                </div>
                            </div>
                            <div class="img-setname">
                                <img src="/1.jpg">
                                <div class="col-md-12">
                                    <input class="form-text" type="text" >
                                </div>
                            </div>
                            
                            
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