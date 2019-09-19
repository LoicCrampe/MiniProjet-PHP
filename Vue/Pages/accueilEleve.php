<section>
    <div>
        <p><?php echo $_SESSION["user"]->firstname . " " . $_SESSION["user"]->lastname ?>, vous êtes à present connecté en tant qu'élève.</p>
        <div class="container row col-12 separation">
            <a href="../Models/Classes/deconnection.php">Se deconnecter</a>
            <p>|</p>
            <a href="Pages/changePassword.php">Changer de mot de passe</a>
        </div>
    </div>
    <div>
        <p>Voici vos notes :</p>
    </div>

    <div>
        <?php
        require "../Models/Classes/displayNotesStudent_action.php";
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <?php
                    foreach ($notes as $note) {
                        echo "<th scope='col'>" . $note->subject . "</th>";
                    }
                    ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>Notes</th>
                    <?php
                    foreach ($notes as $note) {
                        echo "<td scope='row'>" . $note->result . "</td>";
                    }
                    ?>
                </tr>
            </tbody>
        </table>
    </div>
</section>