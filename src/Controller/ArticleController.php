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
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */

    public function homepage()
    {
        return $this->render('article/homepage.html.twig');

    }

    /**
     *
     * @Route("/news/{slug}", name="article_show")
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
            'slug'=>$slug,
            'comments'=>$comments,
        ]);
    }

    /**
     * @Route ("/news/{slug}/heart", name="article_toggle_heart", methods={"POST"})
     */
    public function toggleArticleHeart($slug)
    {
        //TODO - actually heart/unheart the article!

     return new JsonResponse(['hearts'=>rand(5, 100)]);
    }

}




























