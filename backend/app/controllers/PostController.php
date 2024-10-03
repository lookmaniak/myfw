<?php

require_once locate('/app/models/Post.php');

class PostController {
    public function index(Request $request) {
        if(isset($request->id)) {
            $result = Post::find($request->id);
        } else {
            $result = Post::all();
        }
        
        return response()->body([
            'status' => 'success',
            'success' => true,
            'message' => $result
        ]); // Use the passed Response instance
    }

    public function create(Request $request) {
        $result = Post::create([ 'content' => $request->input('message')]);

        return response()->body([
            'status' => 'success',
            'message' => $result,
        ]); // Use the passed Response instance
    }

    public function show(Request $request) {
        $result = Post::find($request->id);

        return response()->body([
            'status' => 'success',
            'message' => $result,
        ]); // Use the passed Response instance
    }
}