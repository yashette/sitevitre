  <div style="width: 500px;height: 800px;float:left;margin-left: 80px;">
            
            
          <?php  
          $servername = 'localhost';
            $username = 'root';
            $password = 'root';
            
            //On essaie de se connecter
            try{
                $conn = new PDO("mysql:host=localhost;dbname=bdd3", $username, $password);
                //On définit le mode d'erreur de PDO sur Exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
            }
            
            /*On capture les exceptions si une exception est lancée et on affiche
             *les informations relatives à celle-ci*/
            catch(PDOException $e){
              
            }

                     
                       $requete = $conn -> prepare("INSERT INTO contact (message, nom, mail, prenom, tel) VALUES(?, ?, ?, ?, ?)");


                       $requete->execute(array($_POST['message'],$_POST['nom'],$_POST['mail'],$_POST['prenom'],$_POST['tel']));

      

             ?>
            
   

        </div>
<?php  echo " Merci de votre message"?><br>
<?php  echo " Vous allez etre redirigé"?>
<meta http-equiv="refresh" content="4; url= ../contact/accueil.php">      