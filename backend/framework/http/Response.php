<?php

class Response {
    private $headers = [];

    public function header($name, $value) {
        $this->headers[$name] = $value;
        return $this;
    }
    
    public function body(array $response) {
        // Set the headers before sending the body
        foreach($this->headers as $key => $value) {
            header("$key: $value");
        }

        echo json_encode($response);

        exit; // Ensure no further output is sent
    }
}
