<?php ob_start() ?>

<div class="container mt-5" style="height: 60vh;">
        <h2 class="text-center">Login</h2>

        <form action="" method="post">
                <div class="row">
                        <div class="form-group col-6">
                                <label for="">Login</label> <input type="text" name="login" class="form-control" />
                        </div>
                        <div class="form-group col-6">
                                <label for="">Mot de passe</label> <input type="password" name="mdp" class="form-control" />
                        </div>

                </div>
                <div class="text-center">
                        <input type="submit" class="btn btn-success mt-3" />
                </div>
        </form>
</div>

<?php
$content = ob_get_clean();
include 'vues/template.php';
?>