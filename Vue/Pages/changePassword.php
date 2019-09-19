<?php
session_start();
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    <!-- Typicons -->
    <link rel="stylesheet" href="./images/typicons/src/font/typicons.min.css">

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- jQueryUI -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>
    <div>
        <form action="../../Models/Classes/changePassword_action.php" method="POST">
            <div>
                <div>
                    <input type="text" name="identifiant" placeholder="Entrez votre identifiant">
                </div>
            </div>
            <div>
                <div>
                    <input type="password" name="passwordActuel" placeholder="Entrez votre Mot de passe actuel">
                </div>
            </div>
            <div>
                <div>
                    <input type="password" name="passwordNew" placeholder="Entrez votre nouveau Mot de passe">
                </div>
            </div>
            <div>
                <div>
                    <input type="password" name="passwordNewConfirm" placeholder="Confirmer votre nouveau Mot de passe">
                </div>
            </div>
            <div>
                <input type="submit" name="valider" value="Valider" class="btn_blue">
            </div>
            <div>
                <input type="submit" name="annuler" value="Annuler" class="btn_orange">
            </div>
        </form>
        <?php
        if (isset($_SESSION["messageChangePass"])) {
            echo "<div>";
            echo $_SESSION["messageChangePass"];
            echo "</div>";
        }
        ?>
    </div>
    <!-- ******************************* Bootstrap ******************************* -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <!-- ******************************* Bootstrap ******************************* -->

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="./js/classes/InputsObject.js"></script>
    <!-- <script src="./js/he.js"></script> -->
    <script src="./js/myVue.js"></script>
</body>

</html>