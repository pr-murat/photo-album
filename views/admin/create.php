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
                    
                    
                    
                    
                    <form action="http://photoalb:<?=PORT?>/admin/setname" method="POST" enctype="multipart/form-data">
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
                                <label for="exampleInputEmail1"><h5>Выберите фотографий для загрузки</h5></label>
                                <input type="file" accept=".jpg, .jpeg, .png" name="files[]" multiple="multiple" id="file_inp">
                                <p type="hidden" name="count_img" class="count_img" id="message_counter"></p>
                                    
                            </div>
                        </div>
                        <div class="row added_image" id="child_form">
                            
                            
                            
                        </div>
                        <style>
                            .px250{width: 250px; padding: 0;}
                            .px250 input{width: inherit; margin-top:10px;}
                        </style>
                        <hr>
                        <input type="reset" id="input_decs_reset" value="Сбросить имя">
                        <input type="reset" id="input_all_reset" value="Сбросить все">
                        <hr>
                        <button type="submit" class="btn btn-primary" id="btn_create_album" name="create_btn">Создать</button>
                     </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include ROOT.'/views/templates/footer.php' ?>

<script>
        //Show TABLE
        $('.table_info_files').hide();
        $('#input_all_reset').hide();
        $('#input_decs_reset').hide();
        //Заполнить таблицу при выборке фалов
        
        var changeImg = function(){
            $('.table_info_files').show();
            $('#input_all_reset').show();
            $('#input_decs_reset').show();
            for (var i = 0; i < this.files.length; i++) {
                var tmppath = event.target.files;
                //document.write(`<img src="${URL.createObjectURL(tmppath[1])}">`);
                $('#child_form').append(`
                    <div class="img-setname">
                        <img src="${URL.createObjectURL(tmppath[i])}">
                        <div class="col-md-12 px250">
                            <input name="images-${i+1}" value=${(this.files[i].name).substring(0, this.files[i].name.lastIndexOf("."))} placeholder="Название фотографий" class="" type="text">
                        </div>
                    </div>
                `);
            }
            var tmppath = event.target.files;
        }
        
        $('#file_inp').change(changeImg);
        //$(window).bind("focus", changeImg($('#file_inp')));
        
        
        
       
       //Очищение поля "Задать имя" при клике "Сбросить"
       $('#input_decs_reset').click(function(){
           $('.input-decs').attr('value','');
           
       });
       //Очищение и скрытие таблица при клике "Сбросить все"
       $('#input_all_reset').click(function(){
           $('#child_form').html(' ');
           $('.table_info_files').hide();
           $('#input_all_reset').hide();
           $('#input_decs_reset').hide();
       });
       
       //Очищение и скрытие таблица при клике "Выбрать"
        $('#file_inp').click(function(){
            $('#child_form').html(' ');
            $('.table_info_files').hide();
        });
  
    
   
</script>
