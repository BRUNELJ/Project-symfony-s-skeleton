<?php
/**
 * Created by PhpStorm.
 * User: SmartGhost
 * Date: 11/02/2019
 * Time: 10:31
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController {
    /**
     * @Route("/")
     */
    public function homepage(){
        return new Response('My first Symfony page !');
    }
}