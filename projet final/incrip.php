<html>
    <head>
        <title>inscription</title>
        <meta  charset="utf-8">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    </head>
    <body>
        
        <?php
        $bdd= new PDO('mysql:host=localhost;dbname=amine;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        if(isset($_POST['submit']))
        {
            $pseudo=htmlspecialchars($_POST['pseudo']);
            $mail=htmlspecialchars($_POST['mail']);
            $mail2=htmlspecialchars($_POST['mail2']);
            $mdp=sha1($_POST['mdp']);
            $mdp2=sha1($_POST['mdp2']);
            $mdplength=strlen($mdp);
            if(!empty($_POST['pseudo']) && !empty($_POST['mail']) && !empty($_POST['mail2']) && !empty($_POST['mdp']) &&!empty($_POST['mdp2']))
            {
                
                       if ($mdplength>6)
                        {
                                if ($mail==$mail2)
                                {
                                    if(filter_var($mail,FILTER_VALIDATE_EMAIL))
                                    {
                                        $reqmail=$bdd->prepare("SELECT * FROM membre WHERE email=?");
                                        $reqmail->execute(array($mail));
                                        $mailexist=$reqmail->rowCount();
                                        if($mailexist==0)
                                        {
                                            $reqpseudo=$bdd->prepare("SELECT * FROM membre WHERE pseudo=?");
                                            $reqpseudo->execute(array($pseudo));
                                            $pseudoexist=$reqpseudo->rowCount();
                                            if($pseudoexist==0)
                                            {
                                                
                                         
                                                if($mdp==$mdp2)
                                                {
                                                    $membre=$bdd->prepare("INSERT INTO membre (pseudo,email,mdp,date_inscri) VALUES(?,?,?,NOW())");
                                                    $membre->execute(array($pseudo,$mail,$mdp));                    
                                                    $nickel= 'inscription reussite';
                                                    header("location:final.php");
                                                    
                                                }          
                                                else
                                                {
                                                      $ereur='Vos mot de passe ne correspondent pas';
                                                 }
                                            }
                                            else
                                            {
                                                    $ereur='pseudo deja utiliser';  
                                            }
                                        }
                                        else
                                        {   
                                              $ereur='adresse mail deja utiliser';
                                        }
                                    }  
                                    else
                                    {
                                        $ereur="votre mail n'est pas valide"; 
                                    }
                                    
                                }
                                else
                                {
                                    $ereur='vos mail ne correspondent pas';
                                }
                                
                            
                        }
                        else
                        {
                            $ereur ='Votre mot de passe doit avoir minimaum 6 caractere';
                        }
            }
                         else
            {
                $ereur='Tout les champ doivent etre remplis';
            }
        
        }   
        
        
        ?>
          <div class="main div"></div>  
  
    <div class="container">
        <h2>Sign Up</h2>
        <form method="post" id='contactform' action="">
          <div class="form-group">
            <label for="first">pseudo :</label>
            <input type="firstname" class="form-control" id="first" placeholder="Enter first name" name="pseudo">
          </div>
          <div class="form-group">
              <label for="lastname">email </label>
              <input type="lastname" class="form-control" id="lastname" placeholder="Enter last name" name="mail">
            </div>
            <div class="form-group">
              <label for="lastname"> confirmez email </label>
              <input type="email" class="form-control" id="lastname" placeholder="Enter last name" name="mail2">
            </div>
            
          <div class="form-group">
            <label for="password">mot de passe</label>
            <input type="password" class="form-control" id="mdp" placeholder="Enter email" name="mdp">
          </div>
          <div class="form-group">
            <label for="pwd">confirmez mot de passe</label>
            <input type="password" class="form-control" id="mdp2" placeholder="Enter password" name="mdp2">
          </div>
          
          <div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember me</label>
          </div>
          <input type="submit" name="submit" value="submit">
        </form>
      </div>
                <?php
        if (isset($ereur))
        {
               echo '<font color="red">' .  $ereur .  '</font>';
        
        }
        if(isset($nickel))
        {
              echo $nickel;
        }
        
        ?>
    </div>
     <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>