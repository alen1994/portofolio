<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O meni</title>
    <meta name="description" content="">
    <meta name="author" content="Alen Tivadar">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/stylee.css">
    <link rel="stylesheet" href="styles/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/401bf556b0.js" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-nav-demo" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php" class="navbar-brand">Domov</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-nav-demo">
                <ul class="nav navbar-nav">
                    <li><a href="about.php">O meni</a></li>
                    <li><a href="project.php">Projekti</a></li>
                    <li class="mobile-nav"><a href="contact.php">Kontakt</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">

                </ul>
            </div>
        </div>
    </nav>
    <div class="pull-right col-lg-6 com-md-6 col-sm-12">
    <div class="img-left">
            <div class="img thumbnail">
                <img src="images/tivadar.jpg" alt="alenslika" width="900px" height="700px">
            </div>
        </div>
    </div> 

    <div class="pull-left col-lg-6 com-md-6 col-sm-12">
        <h1 class="rainbow">O meni:</h1>
        <h3>- In??enir informatike</h3>
        <h3>- in??enir varstva okolja in kmomunale</h3>
        <h3> Sem preprosta oseba, katera vedno i????e nove izive. </h3>
        <h4 class="space"> Obiskoval sem srednjo kemijsko ??olo v Ru??ah, nato pa nadeljeval ??tudij Varstvo okolja in komunala v Mariboru.
            Ker me ??e od nekdaj zanima tehnologija in njihovo delovanje sem se po nekaj letih redne zaposlitve odlo??il ??e 
            za ??tudij informatike na VS?? Murska Sobota.
        </h4>
        <h4>
            <p class="space">Pridobil sem ogromno novega znanja, katerega sem nadgrajeval z samou??enjem.</p>
            <p>* Imam pridobljen certifikat Ve????ine vodenja - Pro Acta</p>
            <p>* Opravljen te??aj Za??etni JavaScript te??aj - Moje znanje</p>
            <p>* Opravljen te??aj Drupala - Agiledrop</p>
            <p>* Opravljam te??aj The Web Developer Bootcamp - Udemy</p>
        </h4>
        <h2 class="space">Hobiji</h2>
        <h4>
            <p>* Nogomet</p>
            <p>* Tenis</p>
            <p>* Smu??anje</p>
            <p>* Igranje video igric</p>
        </h4>
    </div>

    <script>
        $(function(){
            $('h1,h2,h3,h4').hide(1).fadeIn(1000);
        });
        </script>
<script src="scripts/jquery-3.1.1.min.js" type="text/javascript"></script> 
<script src="scripts/bootstrap3/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/default.js" type="text/javascript"></script>
</body>
</html>