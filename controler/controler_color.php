<?php 
    class Color_controler {

     function read_beer(){

        //recup la color du path url ou utilisation 
        $url = $_SERVER["REQUEST_URI"];
        $path = parse_url($url, PHP_URL_QUERY);
        $color = $path;
        
        //condition spéciale color undefined pour avoir toute les bières + ambree devient ambrée 
        if(isset($color) == false ) {
            $color = "brune' OR NOM_COULEUR = 'blonde' OR NOM_COULEUR = 'ambrée' OR NOM_COULEUR = 'blanche";
        }
        if ($color == "ambree"){
            $color = "ambrée";
        }

        //appel du model 
        require_once("./model/model.php");
        $colorqry = new model();
        $row = $colorqry->read_beer_by_color ($color);
        require "./view/color.php";   
        }   
}
?>