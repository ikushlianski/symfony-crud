<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 22.03.2018
 * Time: 13:38
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class ArticleController
{
    /**
     * @Route("/")
     * @Method({"GET"})
     */
    public function index()
    {
        return new Response('<html><body>Hello</body></html>');
    }
}