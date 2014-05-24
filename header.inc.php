<div id="entete">
     <div id="contact">       
        <div id="contact_top">     
             <p class="profil"><b>TESTA - Votre Avis nous int&eacute;resse ! </b> <br/> 
             <hr class="barre-h">
         </div>
        <?php if(!isset($_SESSION['login'])) {
        ?>  
         <div id="login-mdp">
         <form action="index.php?action=login" method="post">
        	 Login: <input type="email" name="login"> Password: <input type="password" name="password">
        	 <a href="">Mot de passe oubli&eacute; ? </a>
			 <input type="submit" name="Submit" value="Envoyer">
         </form>
         </div>
        <?php } else { ?>
         <p id="msgconnecte"> Vous etes connecte <a href="index.php?action=user"><?php echo $_SESSION['name']; ?>
         </a> </p>
         <a href="index.php?action=deconnexion">deconnexion</a>
        <?php }?>
        <div id="message_contact">
        <a href="index.php"><b>Choisissez votre domaine pour plus d'information!! </b></a>
        </div>
     </div>
</div>