<?php
 
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of LinkController
 *
 * 
 */
class LinkController extends Controller {
    //put your code here
    public $layout="NULL";
 
    function actionMail(){
        $this->render("mail");
    }
    function actionDump(){
        $this->render("dump");
    }  
	 function actionProses(){
        $this->render("proses");
    }
    function actionForgot(){
        $this->render("forgot");
    }
	
	function actionConfig(){
        $this->render("config");
    }
	
}
 
?>
