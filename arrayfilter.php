<?php

    class Post{


        public $title;

        public $completed;

        public $author;

        public function __construct($title,$author,$completed){

            $this->title = $title;

            $this->author = $author;

            $this->completed = $completed;

        }

    }


    $posts = [

        new Post("My first post" ,'liam', true),
        new Post("My second post" ,'liam', true),
        new Post("My third post" ,'overrun', true),
        new Post("My fourth post" ,'liam', false),

    ];

    // *********************************** Array Filter

    $publishedPosts = array_filter($posts,function($post){

        return $post->completed;

    });

    $unpublishedPosts = array_filter($posts,function($post){

        return !$post->completed;

    });


    // ********************************** Array Map

    // $updatedPosts = array_map(function($post){

    //     return $post->title = "My Updated post";

    // },$posts);

    $modified = array_map(function($post){

        return ['description' => $post->title ];

    },$posts);


    // ********************************** Array Column 

    $postsTitle = array_column($posts,'title');

    $authors = array_column($posts,'author','title'); //last parameter generate as key


    // ********************************** For Each

    foreach($posts as $index=>$post){

        $posts[$index] = (array) $post;

    };
    
    var_dump($authors);

?>