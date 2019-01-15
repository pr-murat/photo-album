<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="\assets\css\bootstrap.css">
    <link rel="stylesheet" href="\assets\css\custom.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="http://photoalb:<?=PORT?>/album">Photo-Album</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <?php if(Authentication::isAuth()){  ?>
              <a class="nav-item nav-link" href="http://photoalb:<?=PORT;?>/authentication/exit">Выход</a>
            <?php }?>
          </div>
        </div>
     </nav>
    
    
    




