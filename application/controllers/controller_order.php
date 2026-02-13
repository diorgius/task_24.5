<?php
    class Controller_Order extends Controller 
    { 
        function action_index() { 
            $this->view->generate('order_view.php', 'template_view.php'); 
        } 
    }