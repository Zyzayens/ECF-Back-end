<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>SDBM Admin board beer</title>
</head>
<body>
<!--recuperation de la nav-->
    <?php
    include ("layout_nav.php") 
    ?>
<!--form pour définir l'operation-->
    <main>
        <form action="admin_board" method="post" class="flex mt-3 justify-content-evenly">
            <button type="submit" class="btn btn-primary" name="request_operation" value="add_beer">Ajouter une bière</button>
        <br>
            <button type="submit" class="btn btn-primary" name="request_operation" value="mod_beer">Modifier une bière</button>
        <br>
            <button type="submit" class="btn btn-primary" name="request_operation" value="del_beer">Supprimer une bière</button>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>