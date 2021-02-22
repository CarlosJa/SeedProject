<?php

class Games extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    function index() {

        echo "<h2>Games</h2>";

		$this->view->render('games/index');
		
    }
    
}