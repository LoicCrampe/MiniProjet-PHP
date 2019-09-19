<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<section>
    <div class="col-12">
        <p><?php echo $_SESSION["user"]->firstname . " " . $_SESSION["user"]->lastname ?>, vous êtes à present connecté en tant qu'admin'.</p>
        <div class="container row col-12 separation">
            <a href="../Models/Classes/deconnection.php">Se deconnecter</a>
            <p>|</p>
            <a href="Pages/changePassword.php">Changer de mot de passe</a>
            <p>|</p>
            <a href="Pages/addUser.php">Ajout d'utilisateur</a>
            <p>|</p>
            <a href="Pages/updateUser.php">Modification d'utilisateur</a>
            <p>|</p>
            <a href="Pages/addNotes.php">Ajout de notes</a>
        </div>
    </div>

    <h1>Filtres</h1>
    <?php
    require "../Models/Classes/filtre_action.php";
    ?>
    <form action="../Models/Classes/filtreActivated_action.php" method="POST">
        <div class="container row separation">
            <select name='section'>
                <?php
                foreach ($sections as $section) {
                    echo "<option value='" . $section->id . "'>" . $section->section . "</option>";
                }
                ?>
            </select>
            <p class="separateur">|</p>
            <select name='etudiant'>
                <?php
                foreach ($etudiants as $etudiant) {
                    echo "<option value='" . $etudiant->id . "'>" . $etudiant->firstname . " " . $etudiant->lastname . "</option>";
                }
                ?>
            </select>
            <div>
                <input type="radio" id="section" name="choix" value="section">
                <label for="section">Section</label>
            </div>
            <div>
                <input type="radio" id="etudiant" name="choix" value="etudiant">
                <label for="etudiant">Etudiant</label>
            </div>
            <input type="submit" name="valider" value="Valider">
        </div>
    </form>

    <?php
    if (isset($_SESSION["filtreSection"])) {
        foreach ($_SESSION["filtreSection"] as $section) {
            ?>
            <p><strong><?php echo $section->firstname . " " . $section->lastname ?></strong></p>
            <table class="table">
                <thead>
                    <tr>
                        <th><?php echo $section->subject ?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $section->result ?></td>
                    </tr>
                </tbody>
            </table>
        <?php
            }
        }

        if (isset($_SESSION["filtreEtudiant"])) {
            foreach ($_SESSION["filtreEtudiant"] as $note) { }
            ?>
        <p><strong><?php echo $note->firstname . " " . $note->lastname ?></strong></p>
        <table class="table">
            <thead>
                <tr>
                    <?php
                        foreach ($_SESSION["filtreEtudiant"] as $note) {
                            echo "<th scope='col'>" . $note->subject . "</th>";
                        }
                        ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                        foreach ($_SESSION["filtreEtudiant"] as $note) {
                            echo "<td scope='row'>" . $note->result . "</td>";
                        }
                        ?>
                </tr>
            </tbody>
        </table>
    <?php
    }
    ?>
</section>