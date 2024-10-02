<?php

require locate('/http/ServerConfig.php');

#[AllowDynamicProperties]
class Request extends ServerConfig {

    private $inputs = [];

    public function __construct(array $server) {
        parent::__construct($server);

        $data = json_decode(file_get_contents('php://input'), true);
        if($data) {
            foreach ($data as $key => $value) {
                $this->inputs[$key] = $value;
                $this->{$key} = $value;
             }
        }
    }


    public function input($key) {
        return $this->inputs[$key];
    }



    
}
