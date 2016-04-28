<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends App_Controller
{
    protected $asides = array(
        'head'=>'layouts/asides/head',
        'foot'=>'layouts/asides/foot',
    );

    public function index()
    {
        
    }
}