<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/image/logo_amikom_full_color.png')?>">

    <style>
     .about .tombol .btn-warning{
        background-color: #fff !important;
        color: #cf00ff;
        font-family: 'Rubik' sans-serif !important;
        font-weight: bold;
        margin-left: 5px;
        border-radius: 20px;
        border-style: none;
        outline-style: none ;
      }

      .about .tombol .btn-warning:hover{
        background-color: #cf00ff !important;
        color: #fff;
        transition: 0.3s ease;
      }
    </style>
</head>
<body class="about">

    <!-- Awal Nav-bar -->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">AMI<span style="color: #cf00ff;">KOM</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link " href="<?php echo site_url('Home/index');?>">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link " href="<?php echo site_url('About/index');?>">About</a>
                <a class="nav-item nav-link active" href="<?php echo site_url('Program/index');?>">Programs</a>
                <a class="nav-item nav-link" href="<?php echo site_url('Registration/index');?>">Registration</a>
              </div>
              <div class="tombol"><a href="<?php echo site_url('Auth/index');?>" class="btn btn-warning">Login</a></div>
            </div>
          </nav>
    </div>
    <!-- Akhir Nav-bar -->

    <!-- Background -->
    <div class="jumbotron jumbotron-fluid">
    </div>
    <!-- Akhir Background -->

    <!-- Text -->
    <div class="container" style="text-align: center;">
      <h1 class="display-4"><span style="color: #ffffff;">Program Amikom scholarship</h1>
    </div>
    <!-- Akhir text -->

    <!-- Grid -->
    <div class="container">
        <div class="content-box">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-sm table-light">
                    <thead class="bg-warning">
                    <tr>
                        <th scope="col" colspan="2">DIPLOMA PROGRAM</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Diploma of Informatics Management</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Diploma of Informatics Engineer</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Diploma of Cyber Security</td>
                    </tr>
                    </tbody>
                    <thead class="bg-warning">
                    <tr>
                        <th scope="col" colspan="2">BACHELOR PROGRAM</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Bachelor of Informatics</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Bachelor of Information System</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Bachelor of Information Technology</td>
                    </tr>
                    </tbody>
                    <thead class="bg-warning">
                        <tr>
                            <th scope="col" colspan="2">MASTER PROGRAM</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Master of Information Technology</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Master of Cyber Security</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Master of Data Science</td>
                        </tr>
                        </tbody>
                </table>
            </div>
        </div>
        </div>
        <button type="button" class="btn btn-outline-success btn-block">All programs are certified as A+ predicate by International University Certification.</button>
        <br><br>

        <!-- <div class="jumbotron text-align-center">
            <h1 class="display-4 ">Get closer with your program's choice!</h1>
            <p class="lead">Learn more about all of the programs. So, you can choose a right choice for you future.</p>
            <hr class="my-4">
            <p>Now considered a key industry within the UK's fast-growing digital sector, skilled graduates can choose from the range of information technology (IT) careers on offer.</p>
        </div> -->
    </div>
    <!-- akhir testimoni -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="<?php echo base_url('assets/js/js.js')?>"></script>
</body>
</html>