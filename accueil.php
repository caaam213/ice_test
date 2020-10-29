<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>ICE test</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--Lien JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!--Liens bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
            
        
        <link rel="stylesheet" href="ressources/styles/ordinateur_page_style.css">
    </head>

    <body>
        
        <!--Haut de la page-->
        <header class="bg" style="background-color:rgb(40,172,222)">
            <div class="container">
                <p class="text-white py-3" id="espaceTitre">VOTRE ESPACE <span class="f-lato-black" >CLIENTS</span></p>

                <p id="personneText">Bonjour Pierre Cuban</p>

                <!--Bouton pour lorsque l'écran est moins grande que lg-->
                <nav class="navbar navbar-expand-lg navbar-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <img src="ressources/SVG/Forme3.svg" alt="">
                    </button>
                   
                    <div class="navbar-collapse collapse"  id="navbarNav">
                        <ul class="navbar-nav py-0">
                            <li class="nav-item py-0 d-flex" id="personneTextDansNav" ><a class="mt-2 mr-1" style="color:white !important;">Bonjour Pierre Cuban</a><div class="b-right mt-1"></div></li>
                            <li class="nav-item py-0 d-flex "><img class="mb-2 mx-1" src="ressources/SVG/Forme7blanc.svg" alt=""> <a href="#" class="nav-link">Mon profil</a><div class="b-right mt-1 mr-1"></div></li>
                            <li class="nav-item py-0 d-flex"><img class="mb-2 mx-1" src="ressources/SVG/Forme6.svg" alt=""> <a href="#" class="nav-link">Agenda</a><div class="b-right mt-1 mr-1"></div></li>
                            <li class="nav-item py-0 d-flex"><img class="mb-2 mx-1" src="ressources/SVG/Forme9-1blanc.svg" alt=""> <a href="#" class="nav-link">Patients</a><div class="b-right mt-1 mr-1"></div></li>
                            <li class="nav-item py-0 d-flex"><img class="mb-2 mx-1" src="ressources/SVG/Forme10blanc.svg" alt=""> <a href="#" class="nav-link">Paramètrage</a><div class="b-right mt-1 mr-1"></div></li>
                            <li class="nav-item py-0 d-flex"><img class="mb-2 mx-1" src="ressources/SVG/ico-closeblanc.svg" alt=""> <a href="#" class="nav-link">Se déconnecter</a><div class="b-right mt-1 mr-1"></div></li>
                        </ul>
                    </div>
                    
                </nav>

                
            </div>
        </header>

        
        <div class="" style="background-color: rgb(237,239,243);">
            <div class="container">
                <p class="font-weight-bold pt-2">Code client : <span>Eh5299</span></p>
                <p class="text-right" style="color:rgb(232,175,32);font-size:30px;">CLIENTS</p>

                <!--Titre des sections statistiques et patients-->
                <div class="row justify-content-around" >
                    <div class="col-lg-4 col-md-5 col rounded-top p-3" id="statistiqueBouton" style="background-color:white;">
                        <div class="d-flex justify-content-around col-xl-7 col-lg-9 col-12">
                            <img class="" src="ressources/SVG/Forme24.svg" alt="">
                            <p class="ml-2 ml-lg-0 my-auto f-lato-black fs-grandir" style="color:rgb(232,175,32);">STATISTIQUES</p>
                        </div>
                    </div>

                    <div class="col-xl-7 col-md-5 col-lg-7 col row rounded-top p-3" id="patientBouton" style="background-color:rgb(232,175,32);">
                        <div class="d-flex justify-content-around col-xl-4 col-lg-6 col-12">
                            <img class="" src="ressources/SVG/Forme9-1blanc.svg" alt="">
                            <p class="my-auto text-white f-lato-black fs-grandir" >MES PATIENTS</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Statistiques et patients contenus-->
        <div class="" style="background-color: rgb(252,252,253);" id="app">
            <div class="container" id="contenuPortable" >
                <!--Le contenu est chargé en JS selon si l'utilisateur possède un téléphone ou un ordinateur-->
            </div>
        </div>



        <!--Footer de la page-->
        <footer class="d-flex justify-content-md-center bg-white w-100 p-4">
            <div>
                <img style="background-color:rgb(40,172,222);transform: rotate(270deg);" class="rounded px-2" src="ressources/svg/ice-logo-01-01.svg" alt="">
            </div>
            <div class="d-lg-flex justify-content-around ml-lg-5">
                
                <div class="d-flex">
                    <p class="px-md-2 color-blue mt-md-3 mt-2 footer-texte">ICE-DEV.FR</p>
                    <p class="px-2 mt-md-3 mt-2 footer-texte"> ©2016 - Lorem ipsum dolores magna</p>
                </div>

                <div class="d-flex ml-lg-5 mt-md-3 mr-3">
                    <a href="" class="px-md-3 px-1 color-blue footer-texte footer-liens">Crédits</a>
                    <a href="" class="px-md-3 px-1 color-blue footer-texte footer-liens">Ipsum dolores</a>
                    <a href="" class="px-md-3 px-1 color-blue footer-texte" style="text-decoration:underline;">Magna es lorem</a>
    
                </div>

            </div>

            

        </footer>
        
        
        <script src="ressources/scripts/script.js"></script>
    </body>
</html>