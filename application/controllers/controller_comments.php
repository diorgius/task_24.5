<?php
    class Controller_Comments extends Controller 
    { 
        function action_index() { 
            $this->view->generate('comments_view.php', 'template_view.php'); 
        } 
    }