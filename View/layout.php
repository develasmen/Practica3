<?php

function PrintCss()
{
    echo '<head>

                <title>Practica 3</title>

                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=Edge">
                <meta name="description" content="">
                <meta name="keywords" content="">
                <meta name="author" content="">
                <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

                <link rel="stylesheet" href="/Practica3/View//css/bootstrap.min.css">
                <link rel="stylesheet" href="/Practica3/View//css/font-awesome.min.css">
                <link rel="stylesheet" href="/Practica3/View/css/aos.css">
                <link rel="stylesheet" href="/Practica3/View/css/styles.css">
            </head>';
}


function PrintMenu()
{
    echo 
    '
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/Practica3/View/index.html">
                <img src="/Practica3/View/images/logo.png" style="height: 60px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item">
                        <a href="/Practica3/View/home.php" class="nav-link smoothScroll">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="/Practica3/View/Consulta/Consulta.php" class="nav-link smoothScroll">Principal</a>
                    </li>
                    <li class="nav-item">
                        <a href="/Practica3/View/Registro/Registro.php" class="nav-link smoothScroll">Abonos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    ';
}


function PrintFooter()
{
    echo '     
    <footer class="site-footer">
          <div class="container">
               <div class="row">
                    <div class="ml-auto col-lg-4 col-md-5">
                        <p class="copyright-text">Copyright &copy; 2025 ...                   
                    </div>
                    <div class="d-flex justify-content-center mx-auto col-lg-5 col-md-7 col-12">
                        <p class="mr-4">
                            <i class="fa fa-envelope-o mr-1"></i>
                            <a href="#">...@....com</a>
                        </p>
                        <p><i class="fa fa-phone mr-1"></i> 8888-8888</p>
                    </div>
                    
               </div>
          </div>
     </footer>';
}


function PrintScript()
{
    echo '
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/smoothscroll.js"></script>
         <script src="js/custom.js"></script>
         ';
}

?>