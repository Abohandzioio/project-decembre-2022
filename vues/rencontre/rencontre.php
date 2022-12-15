<?php ob_start() ?>
<h2 class="text-center">Ajouter une Rencontre</h2>

<div class="container mt-5">

    <form action="" method="post">

        <div class="row">
            <div class="col-6">
                <label for="">Equipe 1</label>
                <input type="text" name="equipe_a" class="form-control" />

            </div>
            <div class="col-6">
                <label for="">Equipe 2</label>
                <input type="text" name="equipe_b" class="form-control" />

            </div>

            <div class="form-group col-6">
                <label for="">lieu</label>
                <input type="text" name="lieu" class="form-control" />
            </div>
            <div class="form-group col-6">
                <label for="">Date</label>
                <input type="date" name="date_match" class="form-control" />
            </div>
            <div class="form-group col-6">
                <label for="">heure</label>
                <input type="time" min="00:00:00" max="23:59:59" name="heure_match" step="1" class="form-control" />
            </div>

        </div>
        <input type="submit" class="btn btn-success mt-3" />
    </form>
</div>
<?php
$content = ob_get_clean();
include 'vues/template.php';
?>