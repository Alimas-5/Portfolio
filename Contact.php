<!doctype html>
<html lang="fr">

<html>

<head>
    <link rel="icon" href="../Documents/Portfolio Campus contest/Portfolio/images/Ludovic Bourget.ico" />
    <link type="text/css" rel="stylesheet" href="Contact.css">
    <meta charset="utf8">
    <title> Contact </title>
</head>

<body>

    <div>
        <!-- Icone  -->

        <a href="index.php" ><img src="images/Ludovic Bourget.png" alt="logo" id="logo"></a>
        </div>
        <!-- titre -->
        <diV id="back">
        <h1 id="titre1"> Comment me contacter </h1>
        </diV> 
<div>
    <!-- Premier paragraphe  -->
    <p id="para1">
        Nom: Bourget <br/>
        Prenom: Ludovic <br/>
        Adresse: Bruzon 114 <br/>
        Ville: Saint Senoux <br/>
        Mail: ludovic.bourget@live.fr <br/>
        Téléphone: 06 22 01 73 97 <br/>
        Discord: Alima#4033 <br/>

    </p>
</div>

<form action="/Contact.php" method="post">
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="user_name" placeholder="Votre Nom" required>
    </div>
    <div>
        <label for="mail">e-mail :</label>
        <input type="email" id="mail" name="user_mail" placeholder="Votre email" required>
    </div>
    <div>
        <label for="msg">Message :</label>
        <textarea id="msg" name="user_message" placeholder="Votre Message" required></textarea>
    </div>
    <div class="button">
        <button type="submit" name="formsend">Envoyer le message</button>
    </div>
</form>
<p id="formulaire">
    <?php 

    // connexion à la base de donnée 
include('Database.php');
// vérifie si les champs ont été complété
if ((empty($_POST['user_name'])) && (empty($_POST['user_message'])) ){
    echo "Veuillez remplir les champs correctement ! ( en remplissant ce formulaire vous accepter les mentions légales disponible dans la catégorie Mentions légale du site. )"; 
}
else
{
$name = $_POST['user_name'];
$mail = $_POST['user_mail'];
$message = $_POST['user_message'];
// Insertion du message dans la base de donnée
$req = $bdd->prepare('INSERT INTO formulaire (Nom, Mail, Message) VALUES( "'.$name.'", "'.$mail.'", "'.$message.'" )');
$req->execute(array( $_POST['user_name'], $_POST['user_mail'], $_POST['user_message']));
// Redirection du visiteur 
echo 'Formulaire envoyé !';
}

?>
</p>


<div id="zoneimage">
    <a><img src="images/contacte.png" alt="logo" id="image1" class="groupe"></a>
</div>
<div>
    <footer id="fond">
        <!-- Marge en CSS -->
        <div id="margin">
            <!-- Logo -->
            <img src="images/logo.png" alt="logo" id="logo2">
            <!-- Menu -->
            <ul id="menu">
                <li>
                    <a href="index.php" >
                        Home
                    </a>
                </li>
                <li>
                    <a href="A propos.php"  >
                        A propos
                    </a>
                </li>
                <li>
                    <a href="#" >
                        Contact
                    </a>
                </li>
                <li>
                    <a href="mention.html" >
                       Mentions légale
                    </a>
                </li>
            </ul>
        </div>
    </footer>
    </div>

</body>

</html>