<?php
/**
 * Created by PhpStorm.
 * User: mroz
 * Date: 2019-05-15
 * Time: 10:18
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
{
    /**
     * @Route("/")
     */

    public function homepage()
    {
        return new Response('First page in symfony!');

    }

    /**
     *
     * @Route("/news/{slug}")
     */

    public function show($slug)
    {
        return new Response(sprintf('page to show: %s!',
        $slug));
    }

}


























