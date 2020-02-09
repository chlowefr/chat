<?php require "head.php";
if(!isset($_SESSION)){
    header("Location: ../login.php");
}
?>



<div>
    <div class="container-chat">


<?php 
//Afficher tous les messages 
// 1 : connect to database
require("functions/database.php");
// 2 : prepare request (SELECT) 
    // UTILISER L'ID
$req = $db->prepare("SELECT pseudo, message FROM users_messages");
// 3 : execute
$req->execute();
?>


<div class="container-message">
<?php
// 4 : boucle
while($result = $req->fetch(PDO::FETCH_ASSOC)){
    ?>
    <div class="message">
        <strong><?php echo $result['pseudo'] . "</br>" . $result['message']; ?></strong>
    </div>
    <?php
}
?>
    </div>
    



    <div class="container-form-message">
        <form action="functions/setMessage.php" method="post">
            <textarea name="message" placeholder="Message"></textarea>
            <input type="submit" placeholder="Envoyer" value="Envoyer">
        </form>
        <?php
        //Afficher les messages d'erreurs

        if(isset($_GET["alert"])){
            echo $_GET["alert"];
        }
        ?>
    
    </div>
</div>


<button><a href="functions/disconnect.php" class="disconnect">Disconnect</a></button>
