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
                    
                    
                    
                    
                    <form action="http://photoalb:<?=PORT?>/admin/create" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="exampleInputEmail1">Название фотоальбома:</label>
                                <input type="text" class="form-control" id="name" name="name_album">
                            </div>
                            <div class="col-md-4">
                                <label for="exampleInputEmail1">Дата создание фотоальбома:</label>
                                <input type="date" class="form-control" id="" name="date">
                             </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <label for="exampleInputEmail1">Дата создание фотоальбома:</label>
                                <textarea class="form-control" id="" name="description"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="exampleInputEmail1">Выберите фотографий для загрузки</label>
                                <input type="file" accept=".jpg, .jpeg, .png" name="files[]" multiple="multiple" id="file_inp">
                                <p type="hidden" name="count_img" class="count_img" id="message_counter"></p>
                                    
                            </div>
                        </div>

                        
                        
                        <form>
                            <div class="row added_image" id="child_form">


                            </div>
                        </form>
                        <button type="submit" class="btn btn-primary" id="btn_create_album" name="create_btn">Создать</button>
                     </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include ROOT.'/views/templates/footer.php' ?>

<script>
    
    $('#file_inp').change(function(){
        
        alert(this.files.length);
        //alert(this.val());
        var path = $('#file_inp').val();
        path = (path.substring(0, path.lastIndexOf('\\')) || path);
        for (var i = 0; i < this.files.length; i++) {
            console.log(this.files[i].name)
            
            $('#child_form').append($(`<div class="img-setname">
            <img src="${path}\\${this.files[i].name}">
                <div class="col-md-12">
                    <input placeholder="Название фотографий" class="form-text" type="text" >
                </div>
            </div>`));

            
            
        }
                    });

         
    
   
</script>
