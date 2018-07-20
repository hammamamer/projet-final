<!DOCTYPE HTML>

    <html>
        <head>
            <title>CONEXION</title>
            <meta charset="utf-8">
            
        </head>
        <body>
<?php
session_start();
        $bdd= new PDO('mysql:host=localhost;dbname=amine;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        if(isset($_POST['conect']))
        {

          $pseudoconect=$_POST['pseudoconect'];
          $mdpconect=sha1($_POST['mdpconect']);
          if(!empty($pseudoconect) && !empty($mdpconect))
          {
            $requser=$bdd->prepare('SELECT * FROM membre WHERE pseudo=? AND mdp=? ');
            $requser->execute(array($pseudoconect,$mdpconect));
            $requserexist=$requser->rowCount();
            if ($requserexist==1)
            {
                $userinfo=$requser->fetch();
                $_SESSION['id']=$userinfo['ID'];
                $_SESSION['pseudo']=$userinfo['pseudo'];
                $_SESSION['email']=$userinfo['email'];
                $_SESSION['date_inscri']=$userinfo['date_inscri'];
                header("location:final.php");
            }
            else
            {
                $ereur='Pseudo ou mot de passe invalide';    
            }
          }
          else
          {
            $ereur='tout les champs sont vide';
          }
        
        }   
        
        
        ?>
          <div align=center>
        <h1>Connextion</h1>
        <form action="" method="POST">
          
               <table>
                <tr>
                    <td><label for="pseudoconect">Pseudo: </label></td>
                    <td><input type="text" placeholder="Votre pseudo" name="pseudoconect" id="pseudo" value="<?php if (isset($pseudo)){echo $pseudo;}?>"</td>
                    </>
                </tr>
                
               
                <tr>
                        <td><label for="mdp">Mot de passe:  </label></td>
                        <td><input type="password" placeholder="Votre mot de passe" name="mdpconect" id="mdpconect"</td>
                </tr>
               
                
                
                 </table>
               <br/>
              <table>
               <tr>
                       
                        <td>
                            <input type="submit" value="Connexion" name="conect">
                        </td>
                </tr>
               </table>
        </form>
      
                <?php
        if (isset($ereur))
        {
               echo '<font color="red">' .  $ereur .  '</font><br/><a href="inscription.php">Inscription</a>';
          
        }
        if(isset($nickel))
        {
              echo $nickel;
        }
        
        ?>
    </div>

    </body>
</html>