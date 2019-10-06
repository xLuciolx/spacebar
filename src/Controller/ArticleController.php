<?php

/*
 * @author Loïc Gallay <lgallay@orange.fr>
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ArticleController
 */
class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="app_article_homepage")
     *
     * @return Response
     */
    public function homepage(): Response
    {
        return $this->render('article/homepage.html.twig');
    }

    /**
     * @Route("/news/{slug}", name="article_show")
     *
     * @param string $slug
     *
     * @return Response
     */
    public function show(string $slug)
    {
        $comments = [
            'I ate a normal rock once. It did NOT taste like bacon!',
            'Woohoo! I\'m going on an all-asteroid diet!',
            'I like bacon too! Buy some from my site! bakinsomebacon.com',
        ];

        return $this->render('article/show.html.twig', [
            'title' => ucwords(str_replace('-', ' ', $slug)),
            'comments' => $comments,
            'slug' => $slug,
        ]);
    }

    /**
     * @Route("/news/{slug}/heart", name="article_toggle_heart", methods={"POST"})
     *
     * @param string $slug
     *
     * @return JsonResponse
     *
     * @throws \Exception
     */
    public function toggleArticleHeart(string $slug)
    {
        //TODO - actually heart/unheart the article !
        return $this->json(['hearts' => random_int(5, 100)]);
    }
}
