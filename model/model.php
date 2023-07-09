<?php 
    class Model {

    //lecture des bières par couleurs 
    function read_beer_by_color ($color){
        $pdo = new PDO("mysql: host=localhost:3306; dbname=sdbm_v2","root", "");
        $qry = $pdo->query("
            SELECT * FROM article 
            JOIN couleur ON article.id_couleur = couleur.id_couleur 
            LEFT JOIN typebiere ON article.id_type = typebiere.id_type 
            JOIN marque ON article.id_marque = marque.id_marque 
            WHERE couleur.NOM_COULEUR ='".$color."';");
    return $qry;
    }

    public function get_all_info_article(){
        $pdo = new PDO("mysql: host=localhost:3306; dbname=sdbm_v2","root", "");
        //recup tout le champs et table possible pour type, marque, couleur
        $qry = $pdo->query("
        SELECT * FROM article
        JOIN marque ON marque.ID_MARQUE = article.ID_MARQUE
        JOIN typebiere ON typebiere.ID_TYPE = article.ID_TYPE
        JOIN couleur ON couleur.ID_COULEUR = article.ID_COULEUR
        JOIN fabricant on fabricant.ID_FABRICANT = marque.ID_FABRICANT
        JOIN pays ON pays.ID_PAYS = marque.ID_PAYS
        ");
        $all_types = $qry->fetchAll(PDO::FETCH_ASSOC);
        return $all_types;
    }

    public function get_all_info_brand(){
        $pdo = new PDO("mysql: host=localhost:3306; dbname=sdbm_v2","root", "");
        //recup tout le champs et table possible pour type, marque, couleur
        $qry = $pdo->query("
        SELECT * FROM marque
        JOIN fabricant on fabricant.ID_FABRICANT = marque.ID_FABRICANT
        JOIN pays ON pays.ID_PAYS = marque.ID_PAYS
        ");
        $all_types = $qry->fetchAll(PDO::FETCH_ASSOC);
        return $all_types;
    }
    // function add beer
    public function add_beer() {
        try{
        $pdo = new PDO("mysql:host=localhost:3306;dbname=sdbm_v2", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $max_id_query = $pdo->query("SELECT MAX(ID_ARTICLE) AS max_id FROM ARTICLE");
        $row = $max_id_query->fetch(PDO::FETCH_ASSOC);
        $max_id = $row['max_id'];
        
        $beer_new_id = $max_id + 1;
        $name_beer = $_POST["name_beer"];
        $beer_price = $_POST["beer_price"];
        $beer_titrage = $_POST["beer_titrage"];
        $beer_volume = $_POST["beer_volume"];
        $beer_label = $_POST["beer_label"];
        $beer_type = $_POST["beer_type"];
        $beer_color = $_POST["beer_color"];
    
        $qry = $pdo->prepare("
            INSERT INTO ARTICLE (ID_ARTICLE, NOM_ARTICLE, PRIX_ACHAT, VOLUME, TITRAGE, ID_MARQUE, ID_COULEUR, ID_TYPE) 
            VALUES (:beer_new_id, :name_beer, :beer_price, :beer_volume, :beer_titrage, :beer_label, :beer_color, :beer_type)
        ");
    
        $qry->bindParam(':beer_new_id', $beer_new_id);
        $qry->bindParam(':name_beer', $name_beer);
        $qry->bindParam(':beer_price', $beer_price);
        $qry->bindParam(':beer_volume', $beer_volume);
        $qry->bindParam(':beer_titrage', $beer_titrage);
        $qry->bindParam(':beer_label', $beer_label);
        $qry->bindParam(':beer_color', $beer_color);
        $qry->bindParam(':beer_type', $beer_type);
    
        $qry->execute();
        echo "Ajout réussie.";
        } catch(PDOException $e) {
            echo "Erreur lors de la mise à jour : " . $e->getMessage();
        }
    }
    // function mod beer
    public function mod_beer(){ 

        //valeur a modifier et id de la bière      
        $name_beer = $_POST["name_beer"];
        $beer_price = $_POST["beer_price"];
        $beer_titrage = $_POST["beer_titrage"];
        $beer_volume = $_POST["beer_volume"];
        $beer_label = $_POST["beer_label"];
        $beer_type = $_POST["beer_type"];
        $beer_color = $_POST["beer_color"];
        $beer_to_mod_id = $_POST["to_mod_beer"];

        //ecriture de la request 
        try {
            $pdo = new PDO("mysql:host=localhost:3306;dbname=sdbm_v2", "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $qry = $pdo->prepare("
                UPDATE article 
                SET NOM_ARTICLE = :name_beer,
                    PRIX_ACHAT = :beer_price,
                    VOLUME = :beer_volume,
                    TITRAGE = :beer_titrage,
                    ID_MARQUE = :beer_label,
                    ID_COULEUR = :beer_color,
                    ID_TYPE = :beer_type
                WHERE ID_ARTICLE = :beer_to_mod_id
            ");

            $qry->bindParam(':name_beer', $name_beer);
            $qry->bindParam(':beer_price', $beer_price);
            $qry->bindParam(':beer_volume', $beer_volume);
            $qry->bindParam(':beer_titrage', $beer_titrage);
            $qry->bindParam(':beer_label', $beer_label);
            $qry->bindParam(':beer_color', $beer_color);
            $qry->bindParam(':beer_type', $beer_type);
            $qry->bindParam(':beer_to_mod_id', $beer_to_mod_id);
        
            $qry->execute();
        
            echo "Mise à jour réussie.";
        } catch (PDOException $e) {
            echo "Erreur lors de la mise à jour : " . $e->getMessage();
        }
    }
    // function del beer
    public function del_beer(){
        try{
        $pdo = new PDO("mysql:host=localhost:3306;dbname=sdbm_v2", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $beer_to_del_id = $_POST["to_del_beer"];
        $qry = $pdo->prepare("
        DELETE FROM article WHERE ID_ARTICLE = ".$beer_to_del_id.";" );
        $qry->execute();
        echo "suppresion réussie.";
        }
        catch(PDOException $e){
        echo "Erreur lors de la suppression : " . $e->getMessage();
        }

    }

    //function create marque/fabricant
    public function add_brand() {
        try{
        $maker_name=$_POST["brand_maker_name"];
        $brand_name=$_POST["name_brand"];
        $country_id=$_POST["country_selector"];

        $pdo = new PDO("mysql:host=localhost:3306;dbname=sdbm_v2", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $max_id_maker_query = $pdo->query("SELECT MAX(ID_FABRICANT) AS max_id_maker FROM fabricant");
        $row_maker = $max_id_maker_query->fetch(PDO::FETCH_ASSOC);
        $max_id_maker = $row_maker['max_id_maker'];
        $maker_new_id = $max_id_maker + 1;

        $max_id_brand_query = $pdo->query("SELECT MAX(ID_MARQUE) AS max_id_brand FROM marque");
        $row_brand = $max_id_brand_query->fetch(PDO::FETCH_ASSOC);
        $max_id_brand = $row_brand['max_id_brand'];
        $brand_new_id = $max_id_brand + 1;
            
        $qry = $pdo->prepare("
        START TRANSACTION;
        INSERT INTO FABRICANT (ID_FABRICANT, NOM_FABRICANT) 
        VALUES (:maker_new_id, :maker_name);
        INSERT INTO MARQUE (ID_MARQUE, ID_FABRICANT, ID_PAYS, NOM_MARQUE)
        VALUES(:brand_new_id, :maker_id, :country_id, :brand_new_name);
        COMMIT
        ");
        //maker
        $qry->bindParam(':maker_new_id', $maker_new_id);
        $qry->bindParam(':maker_name', $maker_name);

        //brand
        $qry->bindParam(':brand_new_id', $brand_new_id);
        $qry->bindParam(':brand_new_name', $brand_name);
        $qry->bindParam(':country_id', $country_id);
        $qry->bindParam(':maker_id', $maker_new_id);

        $qry->execute();
        echo "Ajout réussie.";

        } catch(PDOException $e) {
        echo "Erreur lors de la mise à jour : " . $e->getMessage();
        }
    }

    //function mod marque/fabricant
    public function mod_brand() {
        
        //valeur a modifier et id de la marque      
        $name_brand = $_POST["name_brand"];
        $name_maker = $_POST["name_maker"];
        $brand_id_to_mod = $_POST["to_mod_brand"];

        //ecriture de la request 
        try {
            $pdo = new PDO("mysql:host=localhost:3306;dbname=sdbm_v2", "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
            $qry = $pdo->prepare("
            UPDATE marque 
            JOIN fabricant ON fabricant.ID_FABRICANT = marque.ID_FABRICANT
            SET marque.NOM_MARQUE = :name_brand, fabricant.NOM_FABRICANT = :name_maker
            WHERE marque.ID_MARQUE = :brand_id_to_mod ;
            ");
            $qry->bindParam(':name_brand', $name_brand);
            $qry->bindParam(':name_maker', $name_maker);
            $qry->bindParam(':brand_id_to_mod', $brand_id_to_mod);
            $qry->execute();
        
            echo "Mise à jour réussie.";
        } catch (PDOException $e) {
            echo "Erreur lors de la mise à jour : " . $e->getMessage();
        }
    }
    //function del marque/fabricant
    public function del_brand(){
        try{
        $pdo = new PDO("mysql:host=localhost:3306;dbname=sdbm_v2", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $brand_to_del_id = $_POST["to_del_brand"];
        //test avec set foreign_key_check = 0
        $qry = $pdo->prepare("
        START TRANSACTION;
        SET @id_fabricant_to_delete = (SELECT ID_FABRICANT FROM marque WHERE ID_MARQUE = :brand_to_del_id);
        DELETE article FROM article
        JOIN marque ON article.ID_MARQUE = marque.ID_MARQUE
        WHERE marque.ID_MARQUE = :brand_to_del_id;
        DELETE FROM marque WHERE ID_MARQUE = :brand_to_del_id;
        DELETE FROM fabricant WHERE ID_FABRICANT = @id_fabricant_to_delete;
        COMMIT;
        ");
        $qry->bindParam(':brand_to_del_id', $brand_to_del_id);
        $qry->execute();
        echo "suppresion réussie.";
        }
        catch(PDOException $e){
        echo "Erreur lors de la suppression : " . $e->getMessage();
        }

    }
}
?>
