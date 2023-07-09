<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>SDBM Admin board brand</title>
</head>
<body>
    <!--appel de la navbar-->
    <?php
    include ("layout_nav.php") 
    ?>
    <!--form pour choisir l'operation-->
    <main>
        <form action="admin_board_brand" method="post" class="flex mt-3 justify-content-evenly">
            <button type="submit" class="btn btn-primary" name="request_operation" value="add_brand">Ajouter une marque et son fabricant</button>
        <br>
            <button type="submit" class="btn btn-primary" name="request_operation" value="mod_brand">Modifier une marque et son fabricant</button>
        <br>
            <button type="submit" class="btn btn-primary" name="request_operation" value="del_brand">Supprimer un fabricant et ses marques</button>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>