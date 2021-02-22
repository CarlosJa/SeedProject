<?php
use Snoopi as Snoopi;
use App\Components\Users;
use App\Components\Business;
use App\Core\Email; 




class _Error extends Controller {

    function __construct() {
        parent::__construct();
		$this->User = new Users(); 
		$this->SendEmail = new Email();
		$this->VisitorIP = $_SERVER['REMOTE_ADDR'];

		$this->view->topNav = $this->view->PartialView('topnav');
		$this->view->sideNav = $this->view->PartialView('sidenav');
		
    }
	
	function index(){
		$this->view->title = COMPANY;
        $this->view->render(__CLASS__ .'/'. __FUNCTION__);
	}
	
	
} // end class 