<?php
/**
 * Created by PhpStorm.
 * User: mroz
 * Date: 2019-05-15
 * Time: 10:18
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
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
        $comments = ["Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consequat id orci vel mollis. Ut.",
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed augue ac nunc pellentesque euismod.",
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse auctor ut diam et vestibulum. Phasellus."
        ];

        dump($slug, $this);

        return $this->render('article/show.html.twig', [
           'title' => ucwords(str_replace('-', ' ', $slug)),
            'comments'=>$comments,
        ]);
    }

}




























