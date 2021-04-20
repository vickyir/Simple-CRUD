<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?> ">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/image/logo_amikom_full_color.png')?>">

    <style>

    .home .container .btn-primary{
        margin-top: 10px;
        border-radius: 26px !important;
        padding: 12px 17px !important;
        border-style: none;
        width: 150px;
        background-color: #fff;
        font-size: 20px;
        color: #cf00ff;
        font-weight: 600;
    }

    .home .container .btn-primary:active{
        background-color: #cf00ff;
        color: #fff;
    }

    .home .container .btn-primary:visited{
        background-color: #cf00ff;
        color: #fff;
    }

    .home .container .btn-primary:hover{
        background-color: #cf00ff;
        color: #fff;
        transition: 0.5s ease;
    }

    .home .tombol .btn-warning{
        background-color: #fff !important;
        color: #cf00ff;
        font-family: 'Rubik' sans-serif !important;
        font-weight: bold;
        margin-left: 5px;
        border-radius: 20px;
        border-style: none;
        outline-style: none ;
      }

      .home .tombol .btn-warning:hover{
        background-color: #cf00ff !important;
        color: #fff;
        transition: 0.3s ease;
      }
   
    </style>

</head>
<body class="home">
    
    <!-- Awal Nav-bar -->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">AMI<span style="color: #cf00ff;">KOM</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link active" href="<?php echo site_url('Home/index');?>">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="<?php echo site_url('About/index');?>">About</a>
                <a class="nav-item nav-link" href="<?php echo site_url('Program/index');?>">Programs</a>
                <a class="nav-item nav-link" href="<?php echo site_url('Registration/index');?>">Registration</a>
              </div>
             <div class="tombol"><a href="<?php echo site_url('Auth/index');?>" class="btn btn-warning">Login</a></div>
            </div>
          </nav>
    </div>
    <!-- Akhir Nav-bar -->

    <!-- Awal Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4"><span style="color: #cf00ff;">AMIKOM</span> SCHOLARSHIPS <br>FOR <span class="typing"></span></h1>
          <p class="lead">Amikom scholarships is a scholarship program provided by Amikom Yogyakarta University, for students who are currently undergoing diploma, bachelor and master education. To find out more, please press the join button now</p>
          <div class="btn btn-primary">Join Now</div>
        </div>
      </div>
    <!-- Akhir Jumbotron -->


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="<?php echo base_url('assets/js/js.js')?>"></script>
</body>
</html>