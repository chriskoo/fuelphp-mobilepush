<?php


namespace MobilePush;

class Controller_Api_Base extends \Controller_Rest
{
//    // Set it for the whole controller
    protected $xml_basenode = 'result';
    protected $format = 'xml';


    public function action_500(){

        return $this->response(array(
            'status' => 'false',
            'code' => "ERROR_500",
            'message' => "Unknown Error"
        ));
    }



}