<?php 
use OpenTok\OpenTok;
use OpenTok\MediaMode;
class Login extends CI_Controller {
    public $opentok;
    function __construct() { 
        parent::__construct();    
     } 
  
    public function index() { 
        $opentok = new OpenTok('46163292', '436f0b34f67e82089f741ff6509c9608919f8d82');
        
        $session = $opentok->createSession(array(
            'mediaMode' => MediaMode::ROUTED
        ));
        $sessionId = $session->getSessionId();
       // $opentokData['sessionid']  = $sessionId;
       // $opentokData['tokenid']    = $opentok->generateToken($sessionId);
        $data['records'] = $sessionId;
        $data['tokenid'] = $opentok->generateToken($sessionId);
        $this->load->view('login',$data);
     } 
 
     public function home() { 
        echo "this is home application ."; 
     } 
} 
?>