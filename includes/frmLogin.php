<form action="index.php?page=login" method="post">

        <label for="email">E-mail :</label>
        <input type="text" id="email" name="email" value="<?=$email?>" />
    </div>
    <div>
        <label for="mdp1">Mot de passe :</label>
        <input type="password" id="mdp1" name="mdp1" />
    </div>

        <input type="reset" value="Effacer" />
        <input type="submit" value="Envoyer" />
    </div>
    <input type="hidden" name="frmLogin" />
</form>