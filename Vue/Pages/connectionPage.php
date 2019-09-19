<div class="col-12 text-center">
    <h1>Connexion</h1>
    <form action="../Models/Classes/connectionPage_action.php" method="POST" class="form">
        <div>
            <div>
                <label>Identifiant</label></div>
            <div>
                <input type="text" name="identifiant" placeholder="Entrez un identifiant valide" class="input">
            </div>
        </div>
        <div>
            <div>
                <label>Mot de Passe</label></div>
            <div>
                <input type="password" name="password" placeholder="Entrez un Mot de passe valide" class="input">
            </div>
        </div>
        <div>
            <div>
                <input type="submit" name="connexion" value="Se connecter" class="btn_blue" class="input">
            </div>
            <?php
            if (isset($_SESSION["message"])) {
                echo "<div>";
                echo $_SESSION["message"];
                echo "</div>";
            }
            ?>
        </div>
    </form>
</div>