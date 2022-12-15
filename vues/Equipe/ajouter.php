<?php ob_start()?>

<div class="container mt-5">

        <form action="" method="post">               
                        <div class="form-group col-6">
                                <label for="">Equipe</label>
                                <input type="text" name="nom_equipe" class="form-control" />
                        </div>
                <input type="submit" value="Ajouter"class="btn btn-success mt-3" />
        </form>
</div>
<?php
$content = ob_get_clean();
include 'vues/template.php';
?>