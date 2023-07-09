<!--//check request_operation et affiche le bon form//-->
<!--//ici le del form pour del_beer et del_brand dans l'ordre//-->

<?php
if ($_POST["request_operation"] == "del_beer"){ ?>

<!-- form pour del_beer-->

<form action="admin_board" method="post">
    <table class="table">
        <tr>
            <th class="col">Nom bière</th>
            <th class="col">Nom marque</th>
            <th class="col">Supprimer</th>
        </tr>
        <?php
        foreach ($all_types as $all_type) {
            echo "<tr scope='row'>";
            echo "<td>" . $all_type['NOM_ARTICLE'] . " : " . $all_type['VOLUME'] . "cl </td>";
            echo "<td>" . $all_type['NOM_MARQUE'] . "</td>";
            echo "<td><input type='radio' class='form-check-input' name='to_del_beer' value='" . $all_type["ID_ARTICLE"] . "'></td>";
            echo "</tr>";
        }
        ?>
    </table>
    <div class="d-block mt-5">
    <button type="submit" name="request_operation_done" class="btn btn-primary d-inline-block fixed-bottom mt-5" value="del_beer">Supprimer</button>
    </div>
</form>

<!-- fin du form del_beer-->

<?php }
if ($_POST["request_operation"] == "del_brand"){
?>

<!-- form pour del_brand -->

<form action="admin_board_brand" method="post" class="flex flex-shrink justify-evenly">
    <table class="table">
        <tr>
            <th class="col">Nom marque</th>
            <th class="col">Nom fabricant</th>
            <th class="col">Supprimer</th>
        </tr>
        <?php
        foreach ($all_types as $all_type) {
            echo "<tr scope='row'>";
            echo "<td>" . $all_type['NOM_MARQUE']."</td>";
            echo "<td>" . $all_type['NOM_FABRICANT'] . "</td>";
            echo "<td><input type='radio' class='form-check-input' name='to_del_brand' value='" . $all_type["ID_MARQUE"] . "'></td>";
            echo "</tr>";
        }
        ?>
    </table>
    <div class="d-block mt-5">
    <button type="submit" name="request_operation_done" class="btn btn-primary d-inline-block fixed-bottom mt-5 " value="del_brand">Supprimer</button>
    </div>
</form>

<!--fin du form del_brand-->

<?php } ?>