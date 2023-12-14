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
    <a class="Connexion"href="connexion.php">Connexion</a>
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

</ul>
</div>

<div  class="espace">
</div>

<?php
// debut de la session:

$admin = false;
if($_SESSION['ID_utilisateur'] == 'Paulhan'){
	$admin = true;
}
if($_SESSION['ID_utilisateur'] == 'Menga'){
	$admin = true;
}
?>

<!-- ---------------------------------Message de Bienvenue --------------------------------------------- -->

<h1 class="my-5">Bienvenue sur la base de données, <?php echo $_SESSION["ID_utilisateur"];?>.</h1>

<!-- ---------------------------------- Appel des fonctions------------------------------------------- -->

<!-- Formulaire avec le menu déroulant -->
<form method="post" action="bddcomplete.php">
    <label for="action">Sélectionnez une action :</label>
    <select name="action" id="action">
        <option value="tableclient">Afficher les clients</option>
        <option value="tableReservation">Afficher les réservations</option>
        <option value="etatSalle">Afficher les places disponibles</option>
        <option value="filmDiffuse">Afficher les films diffusés</option>

    </select>
    <input type="submit" value="Exécuter">
</form>

<?php
include_once 'function.php';
// ---------------------------------- Appel des fonctions -------------------------------------------
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["action"])) {
        $action = $_POST["action"];
        switch ($action) {
            case "tableclient":
                tableclient($connexion);
                break;
            case "tableReservation":
                tableReservation($connexion);
                break;
            case "etatSalle":
                etatSalle($connexion);
                break;
            case "filmDiffuse":
                filmDiffuse($connexion);
                break;
        }
    }
}
?>


 <!-- ---------------------------------- Ajouter d'un Film: ----------------------------------------- -->


<!-- ---------------------------------- Tables des clients ------------------------------------------- -->


<!-- ---------------------------------- Réservation des clients: ----------------------------------------- -->


            
	
  <!-- ---------------------------------- Ajouter un Film: ----------------------------------------- -->

 
 <h2>Ajouter un film</h2>
    
    <!-- Formulaire -->
    <form action="bddcomplete.php" method="post">
        <label for="titre">Titre :</label>
        <input type="text" id="titre" name="titre" required><br>
        
        <label for="duree">Durée :</label>
        <input type="number" id="duree" name="duree" required><br>
        
        <label for="datesortie">Année de sortie :</label>
        <input type="number" id="datesortie" name="datesortie" required><br>
        
        <label for="genre">Genre :</label>
        <input type="text" id="genre" name="genre" required><br>

        <h2>Entrez les informations du réalisateur</h2>

        <!-- Partie réalisateur -->
        <label for="realisateur_nom">Nom du réalisateur :</label>
        <input type="text" id="realisateur_nom" name="realisateur_nom" required><br>

        <label for="realisateur_prenom">Prénom du réalisateur :</label>
        <input type="text" id="realisateur_prenom" name="realisateur_prenom" required><br>

        <label for="realisateur_naissance">Date de naissance du réalisateur :</label>
        <input type="number" id="realisateur_naissance" name="realisateur_naissance" required><br>

        <h2>Entrez les informations sur l'acteur principal</h2>

        <!-- Partie acteur -->
        <label for="acteur_nom">Nom de l'acteur :</label>
        <input type="text" id="acteur_nom" name="acteur_nom" required><br>

        <label for="acteur_prenom">Prénom de l'acteur :</label>
        <input type="text" id="acteur_prenom" name="acteur_prenom" required><br>

        <label for="acteur_naissance">Date de naissance de l'acteur :</label>
        <input type="number" id="acteur_naissance" name="acteur_naissance" required><br>

        <label for="acteur_role">Rôle :</label>
        <input type="text" id="acteur_role" name="acteur_role" required><br>

        <input type="submit" value="Ajouter le Film">
    </form>
 <?php
 // Informations sur le film
$titre = $_POST['titre'];
$duree = $_POST['duree'];
$datesortie = $_POST['datesortie'];
$genre = $_POST['genre'];

// Informations sur le réalisateur
$realisateur_nom = $_POST['realisateur_nom'];
$realisateur_prenom = $_POST['realisateur_prenom'];
$realisateur_naissance = $_POST['realisateur_naissance'];

// Informations sur l'acteur
$acteur_nom = $_POST['acteur_nom'];
$acteur_prenom = $_POST['acteur_prenom'];
$acteur_naissance = $_POST['acteur_naissance'];
$acteur_role = $_POST['acteur_role'];

// Vérifier si le réalisateur existe déjà dans la table PERSONNE
$resultat_realisateur = $connexion->query("SELECT IDpersonne FROM PERSONNE WHERE nompersonne = '$realisateur_nom' AND prenompersonne = '$realisateur_prenom'");

// Ajout du réalisateur
if ($resultat_realisateur->num_rows > 0) {
    // Le réalisateur existe déjà, récupérer son ID
    $row = $resultat_realisateur->fetch_assoc();
    $id_realisateur = $row['IDpersonne'];
} else {
    // Le réalisateur n'existe pas, l'ajouter à la table PERSONNE
    $requete_realisateur = "INSERT INTO PERSONNE (nompersonne, prenompersonne, datenaissance) VALUES ('$realisateur_nom', '$realisateur_prenom', '$realisateur_naissance')";
    
    if ($connexion->query($requete_realisateur)) {
        // Récupérer l'ID du réalisateur inséré
        $id_realisateur = $connexion->insert_id;
    //} else {
        echo "Erreur lors de l'insertion du réalisateur : " . $connexion->error;
            //exit();  // Arrêt
    }
}
// Informations sur l'acteur
$resultat_acteur = $connexion->query("SELECT IDpersonne FROM PERSONNE WHERE nompersonne = '$acteur_nom' AND prenompersonne = '$acteur_prenom'");

//######################## Ajout de l'acteur ########################

if ($resultat_acteur->num_rows > 0) {
    // L'acteur existe déjà, récupérer son ID
    $row = $resultat_acteur->fetch_assoc();
    $id_acteur = $row['IDpersonne'];
} else {
    // L'acteur n'existe pas, l'ajouter à la table PERSONNE
    $requete_acteur = "INSERT INTO PERSONNE (nompersonne, prenompersonne, datenaissance) VALUES ('$acteur_nom', '$acteur_prenom', '$acteur_naissance')";
    
    if ($connexion->query($requete_acteur)) {
        // Récupérer l'ID de l'acteur inséré
        $id_acteur = $connexion->insert_id;
    } //else {
        //echo "Erreur lors de l'insertion de l'acteur : " . $connexion->error;
       
    }
//}


 //######################## Ajout du film ########################

$requete_film = "INSERT INTO FILM (titre, duree, datesortie, genre) VALUES ('$titre', '$duree', '$datesortie', '$genre')";
if ($connexion->query($requete_film)) {
    $id_film = $connexion->insert_id;

    $requete_realisateur_film = "INSERT INTO REALISE (IDpersonne, IDfilm) VALUES ('$id_realisateur', '$id_film')";
    
    if ($connexion->query($requete_realisateur_film)) {
        echo "Le film a été ajouté avec succès.";
    } else {
        echo "Erreur lors de l'insertion du réalisateur du film : " . $connexion->error;
    }
} //else {
  //  echo "Erreur lors de l'insertion du film : " . $connexion->error;

//}

// Fermeture de la connexion à la base de données
//$connexion->close();
?>




  <!-- ---------------------------------- Ajouter une séance: ----------------------------------------- -->
<h3> Ajouter une séance </h3>

<!-- choix film-->

   <form action="bddcomplete.php" method="post">
    <label for="film">Choix du film :</label>
    <select name="film" id="film">

   <?php
    $sql='select IDfilm, titre from FILM; ';
    $result = mysqli_query($connexion, $sql);
    echo'<option value="" disabled selected>Choisissez le film</option>';
    while ($row=$result->fetch_assoc()){
        echo'<option value="'.$row['IDfilm'].'">'.$row['titre'].'</option>';}?>
        </select>
    <br>

<!-- choix date-->

    <label for="date">Date (YYYY MM DD) :</label>
    <input type="text" name="date" id="date" required>
    <br>

<!-- choix horaire-->


    <label for="heure">Heure :</label>
    <select name="heure" id="heure">
        <option value="10:00:00">10:00:00</option>
        <option value="13:00:00">13:00:00</option>
        <option value="16:00:00">16:00:00</option>
        <option value="20:00:00">20:00:00</option>
    </select>
    <br>

<!-- choix langue-->

<label for="langue">Langue :</label>
    <select name="langue" id="langue">
        <option value="VO">VO</option>
        <option value="VF">VF</option>
        <!-- Ajoutez d'autres langues si nécessaire -->
    </select>
    <br>

<!-- choix 3D, 4D, cl-->
<label for="type">Type de séance :</label>
    <select name="type" id="type">
        <option value="classique">Classique</option>
        <option value="3D">3D</option>
        <option value="4DX">4DX</option>
        <!-- Ajoutez d'autres types de séances si nécessaire -->
    </select>
    <br>

    <input type="submit" value="Ajouter la séance">
    </form>
    <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $filmID = $_POST["film"];
    $date = $_POST["date"];
    $heure = $_POST["heure"];
    $langue = $_POST["langue"];
    $type = $_POST["type"];
    switch ($type) {
        case '3D':
            $salle = '3D';
            $prix = 10;
            break;
        case '4D':
            $salle = '4D';
            $prix = 12;
            break;
        case 'classique':
            $salle = 'classique';
            $prix = 6;
            break;
        // Ajoutez d'autres cas au besoin
        default:
            $salle = 'salle par défaut';
            $prix = 0;
            break;
    }
$datetime = $date . ' ' . $heure;

// Vérifier si la salle est disponible à la date et à l'heure spécifiées
$disposalle = "SELECT COUNT(*) AS count FROM SEANCE
                        WHERE IDsalle = $salleID
                        AND date_seance = '$datetime'";


$result = mysqli_query($connexion, $disposalle);
$row = mysqli_fetch_assoc($result);

if ($row['count'] > 0) {
    // La salle n'est pas disponible à cette date et heure
    echo "La salle n'est pas disponible à cette date et heure.";
} else {
    // La salle est disponible, procédez à l'insertion
    $sqlInsertSeance = "INSERT INTO SEANCE (date_seance, type_seance, langue, prix_billet, IDsalle, IDfilm)
                        VALUES ('$datetime', '$type', '$langue', $prix, $salleID, $filmID)";

mysqli_query($connexion, $sqlInsertSeance);

// ... (le reste de votre code)
echo "La séance a été ajoutée avec succès.";
}
}
?>





<!-- ################################   Footer ######################################## -->

	<div class="footer">
        <p>&#169;Melissa MENGA<br>& Nicolas Paulhan
        <a href="db_logout.php" class="btn btn-danger ml-3">Déconnexion</a>
        </p>
    </div>
</body>
</head>
</html>
