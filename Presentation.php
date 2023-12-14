<!------------------- Page d'accueil pour le public ------------------->
<?php
// debut de la session:
session_start();

// Vérification de la connexion:
if(!isset($_SESSION["loggedin"])){
    header("location: connexion.php"); //Si l'utilisateur n'est pas connecté, retour à la connexion
    exit;
}
require_once "file_connexion.php";
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8 "/>
<link rel="stylesheet" href="style.css">
<title> Cinécroquette</title>
</head>
<body>

<!-- Formatage de la page-->

<marquee id="id1"><span onmouseover="getElementById('id1');" onmouseout="getElementById('id1');"><img src="Photos/LLLL.jfif.jpg" width="100 px" height="50px"><img src="Photos/LLLL.jfif.jpg" width="100 px" height="50px"><img src="Photos/LLLL.jfif.jpg" width="100 px" height="50px"><img src="Photos/LLLL.jfif.jpg" width="100 px" height="50px"><img src="Photos/LLLL.jfif.jpg" width="100 px" height="50px"><img src="Photos/LLLL.jfif.jpg" width="100 px" height="50px"><img src="Photos/LLLL.jfif.jpg" width="100 px" height="50px"><img src="Photos/LLLL.jfif.jpg" width="100 px" height="50px"><img src="Photos/LLLL.jfif.jpg" width="100 px" height="50px"><img src="Photos/LLLL.jfif.jpg" width="100 px" height="50px"><img src="Photos/LLLL.jfif.jpg" width="100 px" height="50px"><img src="Photos/LLLL.jfif.jpg" width="100 px" height="50px"><img src="Photos/LLLL.jfif.jpg" width="100 px" height="50px"><img src="Photos/LLLL.jfif.jpg" width="100 px" height="50px"><img src="Photos/LLLL.jfif.jpg" width="100 px" height="50px"><img src="Photos/LLLL.jfif.jpg" width="100 px" height="50px"><img src="Photos/LLLL.jfif.jpg" width="100 px" height="50px"><img src="Photos/LLLL.jfif.jpg" width="100 px" height="50px"><img src="Photos/LLLL.jfif.jpg" width="100 px" height="50px"><img src="Photos/LLLL.jfif.jpg" width="100 px" height="50px"><img src="Photos/LLLL.jfif.jpg" width="100 px" height="50px"><img src="Photos/LLLL.jfif.jpg" width="100 px" height="50px"><img src="Photos/LLLL.jfif.jpg" width="100 px" height="50px"><img src="Photos/LLLL.jfif.jpg" width="100 px" height="50px"><img src="Photos/LLLL.jfif.jpg" width="100 px" height="50px"><img src="Photos/LLLL.jfif.jpg" width="100 px" height="50px"><img src="Photos/LLLL.jfif.jpg" width="100 px" height="50px"></span></marquee>

<div class="div1">

<img class="Logo"src="Photos/Logo.png" alt="logo du Cinéma">
</div>

<div class="divtitre">
  <h1 class="titre"> CinéCroquette</h1>  

</div>

<!-- Bouton de connexion oou inscription-->

<div class="div2">
    <div class="bouton-container">
    <a class="Inscription"href="inscription.html">Inscription</a>
    <a class="Deconnexion"href="deconnexion.php">Déconnexion</a>
    </div>
<ul class="liste1">

    <li class="liste2"><a href="Presentation.php">Accueil</a></li>
    <li class="liste2"><a href="recherche.php">Recherche</a></li>
    <li class="liste2"><a href="reservation.php">Réservation</a></li>
    <?php if($_SESSION["ID_utilisateur"]=="Menga" || $_SESSION["ID_utilisateur"]=="Paulhan"){ 

        echo '<li class="liste2"><a href="bddcomplete.php">Accès BDD</a></li>';

        } 
        
        ?>
    <!-- dans autres: film par duree, annee
    <php
    $q='select * from film';
    $result = $connect->query($q);
    if ($result){
        while ($row = $result->fetch_assoc()){
            echo 'le film'.$row['IDfilm'].' se nomme' .$row['titre'].'</br>
        }
    }
    ?>
-->
 

</ul>
</div>

<div  class="espace">
</div>


<div >

<div class="strate Strate-Cinema slider-tablet-container">
    <div class="content-strate">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="title-strate">
                    TOP GENRES                              </h2>

                    <div class="row list-genre slider-tablet" >
                        <div class="col-xs-12 col-sm-12 col-md-3 item">
                            <a href="Affichage.php?list-genre=Comedie" class="link-block" >                                                        <div class="block" style="background-image: url('Photos/Comedie.png')">
                                <div class="content-text">
                                    <div class="title-block">
                                        <!--<span class="country title hidden-xs hidden-sm"></span>-->
                                        <p class="title-item title">
                                        Comédie                                                                       </p>
                                    </div>
                                    <div class="hover-block">
                                        <p class="Title-list-item hidden-xs">
                                            <span class="Title-list">Découvez le film "Le Casse du siècle" en avant première Vost</span>
                                        </p>
                                        <p class="description-item">
                                            Plongez dans un monde où le rire est roi. Nos comédies fraîches et pétillantes vous attendent pour des moments de pur divertissement. Alors, préparez-vous à rire à en perdre le souffle !
                                                                                                       </p>
                                        <!--     <button class="button"><span>Découvrir</span></button>  -->
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 item">
                        <a href="Affichage.php?list-genre=Fiction" class="link-block" >                                                     <div class="block" style="background-image: url('Photos/Fiction.png')">
                            <div class="content-text">
                                <div class="title-block">
                                    <!--<span class="country title hidden-xs hidden-sm"></span>-->
                                    <p class="title-item title">
                                    Fiction                                                                     </p>
                                </div>
                                <div class="hover-block">
                                    <p class="Title-list-item hidden-xs">
                                        <span class="Title-list">Venez redecouvrir Inception en 4DX</span>
                                    </p>
                                    <p class="description-item">
                                    Venez découvrir les nouveautés qui vous transporteront dans des mondes inexplorés, où chaque bifurquation vous menera dans un labyrinthe d'aventures oniriques où la frontière entre rêve et réalité se brouille.        </p>
                                    
                                    <!--     <button class="button"><span>Découvrir</span></button>  -->
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 item">
                    <a href="" class="link-block" >                                                        <div class="block" style="background-image: url('Photos/Horreur.png')">
                        <div class="content-text">
                            <div class="title-block">
                                <!--<span class="country title hidden-xs hidden-sm"></span>-->
                                <p class="title-item title">
                                Horreur                                                                      </p>
                            </div>
                            <div class="hover-block">
                                    <span class="Title-list">Osez découvrir Le Silence des agneaux</span>
                                <p class="description-item">
                                Préparez-vous à vivre des moments d'angoisse inégalés peuplé de mystères insondables et de créatures terrifiantes au suspense haletant,                                                                     </p>
                            </p>

                            <!--     <button class="button"><span>Découvrir</span></button>  -->
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 item">
          <a href="" class="link-block" >                                                    
            <div class="block" style="background-image: url('Photos/Romance.png')">
            <div class="content-text">
              <div class="title-block">
                <!--<span class="country title hidden-xs hidden-sm"></span>-->
                <p class="title-item title">
                  Romance                                                                   </p>
              </div>
              <div class="hover-block">
                <p class="Title-list-item hidden-xs">
                    <span class="Title-list">Bla</span>
                  </p>
                <p class="description-item">
                 Bla                                                                     </p>


                <!--     <button class="button"><span>Découvrir</span></button>  -->
              </div>
</div>
</div>
</div>
</div>
</div>
</div>
</a>
</div>

<div class="espace10">
    <h2 class="citation> 3">Citation CinémaCroquette</h2>
    <p class=citation>Les plus beaux films sont ceux qu'on se crée</p>
    <p class=citation2>Nico :ppp</p>
</div>

<div > 
  <img class ="imagecitation" src="images.png" alt="photocitation">
</div>

<div class="espace10">
</div>

<div class="infos">
    <h2> INFOS LÉGALES </h2>
    <p> Securité et confidentialité </p>
    <p> Conditions générales de vente</p>
    <p> Mentions légales </p>
</div>

<div class="Info">
    <h2>A PROPOS</h2>
    <p>A propos du Cinépass</p>
    <p>3DX </p>
    <p>4DX</p>
</div>

<div id="Question">
<h2> VOUS AVEZ DES QUESTIONS ? </h2>
<p> Questions fréquentes </p>
<p>  </p>
<p> Cinécroquette@gmail.com </p>
<p> Rue Fleix Eboué, 44 000 Nantes </p>


<ul>
    <li> Nantes: 01 20 43 52 36 </li>
    <li> Lyon : 01 52 65 59 99 </li>
    <li> Paris: 01 66 12 41 75 </li>
</ul> 
</div>

<!-- ---------------------------------Footer--------------------------------------------- -->

<footer id="footer">
<p>Copyright &copy; 2023 | <span class = "span"> CinéCroquette </span> | Design by <span class = "span"> Melissa-Nicolas</span></p>

</footer>
</body>
</html>
