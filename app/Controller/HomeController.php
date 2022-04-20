<?php

class HomeController
{
    // public function __construct()
    // {
    //     session_start();
    // }
    public function index()
    {

        View::load('home');
    }
}
