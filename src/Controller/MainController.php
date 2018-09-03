<?php
/**
 * Created by PhpStorm.
 * User: igor-popravka
 * Date: 31.08.18
 * Time: 23:01
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class MainController
{
    /**
     * @Route("/")
    */
    public function routeMain(){
        return new Response("All Ok!!");
    }

}