<?php 
//recuperation de l'url
        $url = $_SERVER["REQUEST_URI"];
        $path = parse_url($url, PHP_URL_PATH);
        $parts = explode('/', $path);
        $page = '/'.end($parts);

    require_once "./controler/controler.php";
    $controler = new controler();
    
 //selon la page appel des differant controler nessecaire
    switch($page){
        case "/home":
            $controler->home();
            break;

        case "/admin_board_brand":
            $controler->admin_board_brand();
            require_once "./controler/controler_request.php";
            $controlage = new request_controler();
            $all_types = $controlage->get_info_brand();
            $controlage->request_display($all_types);
            break;

        case "/color":
            require_once "./controler/controler_color.php";
            $controled = new color_controler();
            $controled->read_beer();
            $controler->color();
            break;

        case "/admin_board":
            $controler->admin_board();
            require_once "./controler/controler_request.php";
            $controlage = new request_controler();
            $all_types = $controlage->get_info_article();
            $controlage->request_display($all_types);
            break;

        default:
            $controler->home();
            break;
    }

?>