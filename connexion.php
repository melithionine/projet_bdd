<!------------------- Page de connexion ------------------->

<?php
//On initialise la session
session_start();

//On intègre le fichier qui configure la connection à la base de donnée
include_once("file_connexion.php");

//Vérifie si l'utilisateur est déjà connecté, si oui on le renvoie a la page d'accueil

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]) {
    header("location: Presentation.php");
    exit;
}
//On définie les variables pour se connecter (identifiant et mdp)
$ID_utilisateur = $mot_de_passe = "";
$ID_utilisateur_erreur = $mot_de_passe_erreur = $login_erreur = "";

//Vérifications des entrées et traitement
if($_SERVER["REQUEST_METHOD"] == "POST") {
    //Vérifier si l'identifiant est vide ou non
    if(empty(trim($_POST["ID_utilisateur"]))){
        $ID_utilisateur_erreur = "Veuillez saisir un identifiant.";
    } else {
        $ID_utilisateur = trim($_POST["ID_utilisateur"]);
    }

    //Même chose pour le mot de passe
    if(empty(trim($_POST["mot_de_passe"]))){
        $mot_de_passe_erreur = "Veuillez saisir un mot de passe.";
    } else {
        $mot_de_passe = trim($_POST["MDP"]);
    }

//si les variables erreurs sont vides, c'est qu'il n'y a pas eu d'erreurs
//On ajoute à la table Utilisateur
    if(empty($ID_utilisateur_erreur) && empty($mot_de_passe_erreur)) {
        $sql = "SELECT * FROM Utilisateur WHERE ID_utilisateur = '$ID_utilisateur' AND MDP = '$mot_de_passe'";
        $result = mysqli_query($connexion,$sql);
        if(!$result){
            echo("Erreur sur la requête SQL" . mysqli_error($connexion));
        } else {
            $_SESSION["loggedin"] = true;
            $_SESSION["ID_utilisateur"] = $ID_utilisateur;

            mysqli_close($connexion);
            //Redirection vers la page "Base de données
            header("Location: Presentation.php");
        }
    mysqli_close($connexion);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Login Cinecroquette</title>
</head>
<body>
<div id="Fond">
    <div class="scrolling-wrapper scrolling-wrapper-left">
        <img src="Photos/KILLBILL.png" alt="">
        <img src="Photos/INCEPTION.png" alt="">
        <img src="Photos/DARKKNIGHT.png" alt="">
        <img src="Photos/GODFATHER.png" alt="">
        <img src="Photos/Schindler.png" alt="">
        <img src="Photos/PULPFICTION.png" alt="">
        <img src="Photos/SHAWSHANK.png" alt="">
        <img src="Photos/KILLBILL.png" alt="">
        <img src="Photos/INCEPTION.png" alt="">
        <img src="Photos/DARKKNIGHT.png" alt="">
        <img src="Photos/GODFATHER.png" alt="">
        <img src="Photos/Schindler.png" alt="">
        <img src="Photos/PULPFICTION.png" alt="">
        <img src="Photos/SHAWSHANK.png" alt="">
        <img src="Photos/KILLBILL.png" alt="">
        <img src="Photos/INCEPTION.png" alt="">
        <img src="Photos/DARKKNIGHT.png" alt="">
        <img src="Photos/GODFATHER.png" alt="">
        <img src="Photos/Schindler.png" alt="">
        <img src="Photos/PULPFICTION.png" alt="">
        <img src="Photos/SHAWSHANK.png" alt="">
    </div>
    <div class="div1">
        <img class="Logo"src="Photos/Logo.png" alt="logo du Cinéma">
    </div>
    

<!-- ---------------------------------- Connexion --------------------------------- -->
        <div class="wrapper">
            <h2>Connexion</h2>
            <p>Rentrez vos identifiants pour se connecter.</p>
            
            <?php
            if(!empty($login_erreur)){
                echo '<div class="alert alert-danger">' . $login_erreur . '</div>';
            }
            ?>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group">
                    <label>Identifiant</label>
                    <input type="text" name="ID_utilisateur" class="form-control <?php echo (!empty($ID_utilisateur_erreur)) ? 'is-invalid' : ''; ?>" value="<?php echo $ID_utilisateur; ?>">
                    <span class="invalid-feedback"><?php echo $ID_utilisateur_erreur; ?></span>
                </div>    
                <div class="form-group">
                    <label>Mot de passe</label>
                    <input type="password" name="mot_de_passe" class="form-control <?php echo (!empty($mot_de_passe_erreur)) ? 'is-invalid' : ''; ?>">
                    <span class="invalid-feedback"><?php echo $mot_de_passe_erreur; ?></span>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Connexion">
                </div>
                <p>Si vous n'avez pas de compte: <a href="inscription.php">inscrivez-vous ici</a>.</p>
            </form>
        </div>
</div>
        </body>
    <div class="scrolling-wrapper scrolling-wrapper-right">
        <img src="Photos/KILLBILL.png" alt="">
        <img src="Photos/INCEPTION.png" alt="">
        <img src="Photos/DARKKNIGHT.png" alt="">
        <img src="Photos/GODFATHER.png" alt="">
        <img src="Photos/Schindler.png" alt="">
        <img src="Photos/PULPFICTION.png" alt="">
        <img src="Photos/SHAWSHANK.png" alt="">
        <img src="Photos/KILLBILL.png" alt="">
        <img src="Photos/INCEPTION.png" alt="">
        <img src="Photos/DARKKNIGHT.png" alt="">
        <img src="Photos/GODFATHER.png" alt="">
        <img src="Photos/Schindler.png" alt="">
        <img src="Photos/PULPFICTION.png" alt="">
        <img src="Photos/SHAWSHANK.png" alt="">
        <img src="Photos/KILLBILL.png" alt="">
        <img src="Photos/INCEPTION.png" alt="">
        <img src="Photos/DARKKNIGHT.png" alt="">
        <img src="Photos/GODFATHER.png" alt="">
        <img src="Photos/Schindler.png" alt="">
        <img src="Photos/PULPFICTION.png" alt="">
        <img src="Photos/SHAWSHANK.png" alt="">
        <img src="Photos/INCEPTION.png" alt="">
        <img src="Photos/DARKKNIGHT.png" alt="">
    </div>
<!-- ---------------------------------Footer--------------------------------------------- -->


<footer id="footer">
<p>Copyright &copy; 2023 | <span class = "span"> CinéCroquette </span> | Design by <span class = "span"> Melissa-Nicolas</span></p>

</footer>
</html>

