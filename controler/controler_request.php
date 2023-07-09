<?php
class Request_controler{
    //recupere tout les types, marques, couleurs possible
    function get_info_article(){
        require_once("./model/model.php");
        $info_qry = new model();
        $all_types = $info_qry->get_all_info_article();
        return $all_types;
    }
    
    function get_info_brand(){
        require_once("./model/model.php");
        $info_qry = new model();
        $all_types = $info_qry->get_all_info_brand();
        return $all_types;
    }

    //affiche le form associé selon le choix du btn 
    function request_display($all_types){
    $op = "";

    if (isset($_POST["request_operation"])){
        $op = $_POST["request_operation"];
    }

    switch($op){
        case "add_beer" :
            // creation du form sur la page
            include ("./view/form_add.php");
            break;
        
        case "mod_beer" :
            // creation du form sur la page 
            include("./view/form_mod.php");
            break;

        case "del_beer" :
            // cradtion du form sur la page
            include ("./view/form_del.php");
            break;

        case "add_brand" :
            // creation du form sur la page
            include ("./view/form_add.php");
            break;
            
        case "mod_brand" :
            // creation du form sur la page 
            include("./view/form_mod.php");
            break;
    
        case "del_brand" :
            // cradtion du form sur la page
            include ("./view/form_del.php");
            break;
        }
        
        function del_beer(){
            require_once("./model/model.php");
            $opquery = new model();
            $opquery-> del_beer();
        }

        function mod_beer(){
            require_once("./model/model.php");
            $opquery = new model();
            $opquery-> mod_beer();
        }

        function add_beer(){
            require_once("./model/model.php");
            $opquery = new model();
            $opquery-> add_beer();
        }

        function del_brand(){
            require_once("./model/model.php");
            $opquery = new model();
            $opquery-> del_brand();
        }  

        function mod_brand(){
            require_once("./model/model.php");
            $opquery = new model();
            $opquery-> mod_brand();
        }

        function add_brand(){
            require_once("./model/model.php");
            $opquery = new model();
            $opquery->add_brand();
        }

        if (isset($_POST["request_operation_done"]) && $_POST["request_operation_done"] === "add_beer") {
            add_beer();
        }
        if (isset($_POST["request_operation_done"]) && $_POST["request_operation_done"] === "mod_beer") {
            mod_beer();
        }
        if (isset($_POST["request_operation_done"]) && $_POST["request_operation_done"] === "del_beer") {
            del_beer();
        }
        if (isset($_POST["request_operation_done"]) && $_POST["request_operation_done"] === "add_brand") {
            add_brand();
        }
        if (isset($_POST["request_operation_done"]) && $_POST["request_operation_done"] === "mod_brand") {
            mod_brand();
        }
        if (isset($_POST["request_operation_done"]) && $_POST["request_operation_done"] === "del_brand") {
            del_brand();
        }       
    }
}
   
?>