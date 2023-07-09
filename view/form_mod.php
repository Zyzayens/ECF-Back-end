<!--//check request_operation et affiche le bon form//-->
<!--//ici le mod form pour mod_beer et mod_brand dans l'ordre//-->

<?php
if ($_POST["request_operation"] == "mod_beer"){ ?>

<!-- form pour mod_beer-->

<form action="admin_board" method="post" class="flex justify-evenly mt-5">
    <!--Div avec la liste des bières + radio pour sélectionner celle à modifier -->
    <table class="table">
        <tr>
            <th class="col">Nom bière</th>
            <th class="col">Nom marque</th>
            <th class="col">Modifier </th>
        </tr>

        <?php foreach ($all_types as $beer) { ?>
            <tr scope='row'>
                <td><?php echo $beer['NOM_ARTICLE']; ?></td>
                <td><?php echo $beer['NOM_MARQUE']; ?></td>
                <td><input type='radio' class='form-check-input' name='to_mod_beer' value='<?php echo $beer["ID_ARTICLE"]; ?>'></td>
            </tr>
        <?php } ?>
    </table>
    <div class="vr"></div>

    <!-- Form avec les valeurs à mettre à jour, position droite + milieu fixe -->
    <div class="d-block mt-5">
    <h2 class=" h5 text-center mb-3">Modification :</span>
        <div class="input-group mb-3">
            <span class="input-group-text">Nom :</span>
            <input type="text" class="form-control" name="name_beer" required>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Prix :</span>
            <input type="number" class="form-control" name="beer_price" min="0" step="0.01" required>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Titrage :</span>
            <input type="number" class="form-control" min="0" name="beer_titrage" step="0.01" required>
        </div>
        
        <div class="input-group mb-3">
            <span class="input-group-text">Volume :</span>
            <input type="number" class="form-control" name="beer_volume" min="0" step="0.01" required>
            <span class="input-group-text">(en cl)</span>
        </div>
        
        <div class="input-group mb-3">
        <label class="input-group-text" for="beer_label">Marque :</label>
            <!-- Récupère toutes les marques et en fait un select -->
            <select name="beer_label" class="form-select" required>
                <?php foreach ($all_types as $beer) { ?>
                    <option value="<?php echo $beer["ID_MARQUE"]; ?>"><?php echo $beer["NOM_MARQUE"]; ?></option>
                <?php } ?>
            </select>
        </div>
        
        <div class="input-group mb-3">
        <label class="input-group-text" for="beer_type">Type :</label>
        <!-- Types select -->
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
        <label for="beer_color" class="input-group-text">Couleur : </label>
        <!-- Couleurs select -->
        <select name="beer_color" class="form-select" required>
            <option value="1">blonde</option>
            <option value="2">brune</option>
            <option value="3">blanche</option>
            <option value="4">ambrée</option>
        </select>
        </div>
    </div>

    <button type="submit" name="request_operation_done" class="btn btn-primary d-inline-block fixed-bottom mt-5" value="mod_beer">Envoyer</button>
</form>

<!-- fin du form mod_beer-->

<?php }
if ($_POST["request_operation"] == "mod_brand"){
 ?>

<!-- form pour mod_brand -->

<form action="admin_board_brand" method="post" class="flex justify-evenly mt-5">
    <!--Div avec la liste des bières + radio pour sélectionner celle à modifier -->
    <table class="table">
        <tr>
            <th class="col">Nom marque</th>
            <th class="col">Nom fabricant</th>
            <th class="col">Modifier </th>
        </tr>

        <?php foreach ($all_types as $brand) { ?>
            <tr scope='row'>
                <td><?php echo $brand['NOM_MARQUE']; ?></td>
                <td><?php echo $brand['NOM_FABRICANT']; ?></td>
                <td><input type='radio' class='form-check-input' name='to_mod_brand' value='<?php echo $brand["ID_MARQUE"]; ?>'></td>
            </tr>
        <?php } ?>
    </table>
    <div class="vr"></div>

    <div class="d-block mt-5">
        <h2 class=" h5 text-center mb-3">Modification :</span>

        <div class="input-group mb-3">
            <span class="input-group-text">Nom marque :</span>
            <input type="text" class="form-control" aria-label="Nom_marque" name="name_brand" required>
        </div>

        <div class="input-group mb-3">   
            <span class="input-group-text">Nom fabricant :</span>
            <input type="text" name="name_maker" class="form-control" aria-label="Nom_fabricant" required>
        </div>
    </div>

    <button type="submit" name="request_operation_done" class="btn btn-primary d-inline-block fixed-bottom mt-5" value="mod_brand">Envoyer</button>
</form>

<!--fin du form mod_brand-->

<?php } ?>