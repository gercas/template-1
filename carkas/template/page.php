<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
    <title>
    	template no-cms
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="template/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="template/js/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
<body>
    <div class="TopBlock">
        <div class="wrap row">
            <div class="col-sm-6 pa20">
                <h1><?=$words['PageTitle'];?></h1>
            </div>
            <div class="col-sm-6 pa20 text-right">
                <a href="<?php echo url('/?lang=en'); ?>">en</a> 
                <a href="<?php echo url('/?lang=lt'); ?>">lt</a> 
            </div>
            <div class="clearfix"></div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-item nav-link active" href="<?php echo url('/welcome'); ?>"><?=$words['home'];?></a>
                <a class="nav-item nav-link active" href="<?php echo url('/contacts'); ?>"><?=$words['contacts'];?></a>
                </div>
            </div>
            </nav>
        </div>
    </div>
    <div class="nav-uri">
        <div class="wrap pa20">
            <h1><?php include 'system/nav-uri.php';?></h1>
        </div>
    </div>
    <div class="wrap pa20">

        <?php echo $view; ?>
        
    </div>
    <div class="FooterTop">
        <div class="wrap pa20 text-right">
            &copy; 2018
        </div>
    </div>
</body>
</html>