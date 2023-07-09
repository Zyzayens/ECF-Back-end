<!--//check request_operation et affiche le bon form//-->
<!--//ici le add form pour add_beer et add_brand dans l'ordre//-->
<?php
if ($_POST["request_operation"] == "add_beer"){ ?>

<!-- form pour add_beer-->

<form action="admin_board" method="post">
<div class="d-block mt-5">

    <div class="input-group mb-3">
        <label for="beer_name" class="input-group-text">Nom :</label>
        <input type="text" name="name_beer" class="form-control" required>
    </div>

    <div class="input-group mb-3">
        <label for="beer_price" class="input-group-text">Prix :</label>
        <input type="number" class="form-control" name="beer_price" step="0.01" required>
    </div>

    <div class="input-group mb-3">
        <label for="beer_titrage" class="input-group-text">Titrage :</label>
        <input type="number" class="form-control" name="beer_titrage" step="0.01" required>
    </div>

    <div class="input-group mb-3">
        <label for="beer_volume" class="input-group-text">Volume :</label>
        <input type="number" name="beer_volume" class="form-control" step="0.01" required>
        <span class="input-group-text"> (en cl)</span>
    </div>

    <div class="input-group mb-3">
    <!--recupère toute les marques et en fait un select-->
    <!-- TODO mod pour avoir que une fois le dysplay de la marque -->
    <label for="beer_label" class="input-group-text">Marque :</label>
    <select class="form-select" name="beer_label" required>
        <?php
        foreach ($all_types as $marque) {
            echo ("<option value=" . $marque["ID_MARQUE"] . ">" . $marque["NOM_MARQUE"] . "</option>");
        }
        ?>
    </select>
    </div>
    
    <div class="input-group mb-3">
    <!--types select-->
    <label for="beer_type" class="input-group-text">Type :</label>
        <select name="beer_type" class="form-select" required>
            <option value="1">Bière de Saison</option><option value="8">Trappiste</option>
            <option value="2">Ale</option><option value="9">Indian Pale Ale</option>
            <option value="3">Pils et Lager</option><option value="10">Barley Wine</option>
            <option value="4">Bière Aromatisée</option><option value="11">Bock</option>
            <option value="5">Lambic</option><option value="12">Bio</option>
            <option value="6">Abbaye</option><option value="13">Bière de Garde</option>
            <option value="7">Stout</option>
        </select>
    </div>

    <div class="input-group mb-3">
    <!--couleurs select-->
    <label for="beer_color" class="input-group-text">Couleur : </label>
    <select name="beer_color" class="form-select" required>
        <option value="1">blonde</option>
        <option value="2">brune</option>
        <option value="3">blanche</option>
        <option value="4">ambrée</option>
    </select>
    </div>
    
    <button type="submit" name="request_operation_done" class="btn btn-primary mt-2" value="add_beer">Envoyer</button>
</div>
</form>
<!-- fin du form add_beer-->

<?php }
if ($_POST["request_operation"] == "add_brand"){
 ?>

<!-- form pour add_brand -->

<form action="admin_board_brand" method="post">
<div class="d-block mt-5">
    <div class="input-group mb-3">
        <label class="input-group-text" for="brand_name">Nom de la marque:</label>
        <input type="text" class="form-control" name="name_brand" required>
    </div>

    <div class="input-group mb-3">
        <label class="input-group-text" for="brand_maker">Fabricant :</label>
        <input type="text" class="form-control" name="brand_maker_name" required>
    </div>

    <!--recupère toute les pays et en fait un select-->
    <!-- TODO mod pour avoir que une fois le display de la marque -->
    <div class="input-group mb-3">
    <label class="input-group-text" for="country_selector">Pays :</label>
    <select class="form-select" name="country_selector" required>
        <?php
        foreach ($all_types as $country) {
            echo ("<option value=" . $country["ID_PAYS"] . ">" . $country["NOM_PAYS"] . "</option>");
        }
        ?>
    </select>
    </div>
</div>
    <button type="submit" name="request_operation_done" class="btn btn-primary mt-2" value="add_brand">Envoyer</button>
</form>

<!--fin du form add_brand-->

<?php } ?>