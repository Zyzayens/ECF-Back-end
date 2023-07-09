<?php
// creation of the controler 
class Controler{

    public function home(){
        require_once "./view/home.php";
    }
    public function admin_board_brand(){
        require_once "./view/admin_board_brand.php";
    }
    public function color(){
        require_once "./view/color.php";
    }
    public function admin_board(){
        require_once "./view/admin_board.php";
    }
}
?>