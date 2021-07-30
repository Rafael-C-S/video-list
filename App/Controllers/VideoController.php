<?php

namespace App\Controllers;

use Bootstrap\Action;

class VideoController extends Action
{
    public function index()
    {
        $nomes = [];
        $nomes[] = 'Rafael';
        $nomes[] = 'Cássia';
        $nomes[] = 'Márcio Benjamim';
        $this->view->nomes = $nomes;
        
        $this->render('index');
    }

    public function show()
    {
        include '../App/Views/videos/show.phtml';
    }
}