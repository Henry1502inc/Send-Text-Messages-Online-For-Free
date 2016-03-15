<?php

session_start();

class Send_Sms {
    public $set_uipn,  // user input phone number
    public $set_uepn,  // user export phone number
    public $set_uipnc,  // user input phone number carrier
    public $set_uepnc,  // user export phone number carrier
    
    public function __construct ($set_uipn, $set_uepn, set_uipnc, set_uepnc) {
        $this->set_uipn = $set_uipn;    
        $this->set_uepn = $set_uepn;           
        $this->set_uipnc = $set_uipnc;    
        $this->set_uepnc = $set_uepnc;           
    }
    
    function get_UIPN () {
        
    }
    
}

$Send_Sms = new Send_Sms(
    $_POST['uipn'], 
    $_POST['uepn'], 
    $_POST['uipnc'], 
    $_POST['uepnc']    
);





?>
