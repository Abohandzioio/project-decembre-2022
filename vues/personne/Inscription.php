<?php ob_start()?>

<div class="container mt-5" style="height: 60vh;">

        <form action="" method="post">
                <div class="row">
                        <div class="form-group col-6">
                                <label for="">Nom</label>
                                <input type="text" name="nom" class="form-control" " />
                        </div>

                        <div class="form-group col-6">
                                <label for="">Prenom</label>
                                <input type="text" name="prenom" class="form-control" />
                        </div>

                        <div class="form-group col-6">
                                <label for="">Identifiant</label>
                                <input type="text" name="login" class="form-control" />
                        </div>                    
                        <div class="form-group col-6">
                                <label for="">Ville</label>
                                <input type="text" name="ville" class="form-control" />
                        </div>
                        <div class="form-group col-6">
                                <label for="">Mot de Passe</label>
                                <input type="password" name="mdp" class="form-control" />
                        </div>
                        <div class="col-6">
                                <label for="">Role</label>
                                <select name="role" id="" class="form-select">
                                        <option value="client"> client</option>
                                </select>
                        </div>
                        <div class="col-6">
                                <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="inlineCheckbox1" value="femme" name="sexe">
                                        <label class="form-check-label" for="inlineCheckbox1">Femme</label>
                                </div>
                                <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="inlineCheckbox2" value="homme" name="sexe">
                                        <label class="form-check-label" for="inlineCheckbox2">Homme</label>
                                </div>
                        </div>


                </div>
                <input type="submit" class="btn btn-success mt-3" />
        </form>
</div>
<?php
$content = ob_get_clean();
include 'vues/template.php';
?>