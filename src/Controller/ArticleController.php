<?php

/*
 * @author Loïc Gallay <lgallay@orange.fr>
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ArticleController
 */
class ArticleController
{
    /**
     * @Route("/")
     *
     * @return Response
     */
    public function homepage(): Response
    {
        return new Response('My first page');
    }

    /**
     * @Route("/news/{slug}")
     *
     * @param string $slug
     *
     * @return Response
     */
    public function show(string $slug)
    {
        return new Response(sprintf(
            "Future page to show article : %s",
            $slug
        ));
    }
}