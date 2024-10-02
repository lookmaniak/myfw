<?php

class HomeController {
    public function index(Request $request) {
        // Create a response array
        $responseArray = [
            'status' => 'success',
            'message' => $request->windir,
        ];
        
        return response()->body($responseArray); // Use the passed Response instance
    }

    public function create(Request $request) {
        // Create a response array
        $responseArray = [
            'status' => 'success',
            'message' => $request->input('id'),
        ];
        
        return response()->body($responseArray); // Use the passed Response instance
    }

    public function list() {
        // Create a response array
        $responseArray = [
            'status' => 'success',
            'message' => 'Hello LIST....!!!'
        ];

        return response()->body($responseArray); // Use the passed Response instance
    }
}