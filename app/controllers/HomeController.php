<?php
require_once __DIR__ . '/../core/Controller.php';

class HomeController extends Controller
{
    public function index(): void
    {
        $this->render('home', [
            'title' => 'Konferenční Systém',
            'subtitle' => 'Vítejte v systému pro správu článku a recenzí'
        ]);
    }
}