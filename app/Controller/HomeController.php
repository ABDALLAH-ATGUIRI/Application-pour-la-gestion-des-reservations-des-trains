<?php
session_start();
    class HomeController{
        public function index(){
        
            View::load('home');
        }
        
        
    }
