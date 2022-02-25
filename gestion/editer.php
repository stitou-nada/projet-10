<?php

include "GestionEmployes.php";
$gestionEmployes = new GestionEmployes();
//afficher dans input
if(isset($_GET['id'])){
    $afficherValue = $gestionEmployes->RechercherParId($_GET['id']);
}
// modifier les donnes
if(!empty($_POST)){
    $id = $_GET['id'];
    $matriclue = $_POST['Matricule'];
    $nom = $_POST['Nom'];
    $prenom = $_POST['Prenom'];
    $Date_de_naissance = $_POST['Date_de_naissance'];
    $Departement = $_POST['Departement'];
    $Salaire = $_POST['Salaire'];
    $Fonction = $_POST['Fonction'];
    $Photo = $_POST['Photo'];

    $gestionEmployes->Modifier($id,$matriclue,$nom,$prenom,$Date_de_naissance,$Departement ,$Salaire,$Fonction ,$Photo);
    header('Location:table.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Forms</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link rel="stylesheet" href="css/costumer.css">
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>
<!-- 
<body class="animsition">
    <div class="page-wrapper">
         HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                           
                        <li>
                            <a href="table.php">
                                <i class="fas fa-table"></i>Tableau</a>
                        </li>
                        <li class="active">
                            <a href="Ajoute.php">
                                <i class="far fa-check-square"></i>Insérer</a>
                        </li>
                        </li>
                     
                    </ul>     
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </header> -->

            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">

                                    <!-- form -->
                                    <div class="card-header">Ajouter les informations</div>
                                    <div class="card-body">
                                        
                                       <form action="" method="POST">
                                        <form action="" method="POST" novalidate="novalidate">
                                            <div class="row">
                                                <div class="col-6">
                                                    
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Matricule</label>
                                                        <input id="cc-exp" name="Matricule" type="number" class="form-control cc-exp" value=<?php echo $afficherValue->getmatricule()?> data-val="true" data-val-required="Please enter the card expiration"
                                                            data-val-cc-exp="Please enter a valid month and year" placeholder="MM / YY"
                                                            autocomplete="cc-exp">
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Prenom</label>
                                                        <input id="cc-exp" name="Prenom" type="text" class="form-control cc-exp" value=<?php echo $afficherValue->getPrenom()?> data-val="true" data-val-required="Please enter the card expiration"
                                                            data-val-cc-exp="Please enter a valid month and year" placeholder="prenom"
                                                            autocomplete="cc-exp">
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Nom</label>
                                                    <div class="input-group">
                                                        <input id="x_card_code" name="Nom" type="tel" class="form-control cc-cvc"  value=<?php echo $afficherValue->getNom()?>  data-val="true" data-val-required="Please enter the security code"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off">

                                                    </div>
                                                </div>   
                                            </div>
                                            <div class="form-group">
                                                <div class="row form-group">
                                                   
                                                </div>
                                                <label for="cc-payment" class="control-label mb-1">Date de naissance</label>
                                                <input id="cc-pament" 
                                                name="Date_de_naissance" type="date" class="form-control" aria-required="true" aria-invalid="false" value=<?php echo $afficherValue->getdate_de_naissance()?>>
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Departement</label>
                                                <input id="cc-name" name="Departement" type="text" class="form-control cc-name valid" data-val="true"  value=<?php echo $afficherValue->getdepartement()?>
                                                    autocomplete="cc-name" >
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Salaire</label>
                                                <input id="cc-number" name="Salaire" type="tel" class="form-control cc-number identified visa"  value=<?php echo $afficherValue->getsalaire()?> data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                           
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Fonction</label>
                                                        <select name="Fonction" id="select" value=<?php echo $afficherValue->getfonction()?> class="form-control">
                                                            <option >Please select</option>
                                                            <option>Fonction 1</option>
                                                            <option >Fonction 2</option>
                                                            <option >Fonction 3</option>
                                                        </select>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Photo</label>
                                                    <div class="input-group">
                                                        <input id="x_card_code" name="Photo" type="file" class="form-control cc-cvc "  value=<?php echo $afficherValue->getphoto()?> 
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off">

                                                    </div>
                                                </div>   
                                            </div>
                                            <div class="">
                                                <button class="btn btn-info au-btn--block " type="submit"> Modifier </button>

                                              
                                            </div>
                                         </div>
                                        </form>
                                        </form>
                                    </div>
                                </div>
                                <!-- fin -->                        
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
