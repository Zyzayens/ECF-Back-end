<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>SDBM</title>
</head>
<body>
    <!--affichage de la nav-->
    <?php
    include ("layout_nav.php") 
    ?>
<!--affichage des resultats de la request pour les bières par couleurs-->
<table class="table">
        <thead>
            <tr>
                <th class="col">Nom bière</th>
                <th class="col">Nom marque</th>
                <th class="col">Type</th>
                <th class="col">Couleur</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Affichage des bières
            foreach ($row as $row) {
                echo "<tr scope='row'>";
                echo "<td>" . $row['NOM_ARTICLE'] . " : " . $row['VOLUME'] . "cl </td>";
                echo "<td>" . $row['NOM_MARQUE'] . "</td>";
                echo "<td>" . $row['NOM_TYPE'] . "</td>";
                echo "<td>" . $row['NOM_COULEUR'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>