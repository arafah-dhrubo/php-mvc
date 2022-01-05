<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      if(isLoggedIn()){
          //header("http://localhost:8000/public/pages/index");
        redirect('posts/index');
      }

      $data = [
        'title' => 'Dummy MVC',
        'description' => 'Welcome To Our Site'
      ];
     
      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About Us',
        'description' => 'App to share posts with other users'
      ];

      $this->view('pages/about', $data);
    }
  }