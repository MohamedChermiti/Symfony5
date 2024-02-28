<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response("Hello mohamed");
    }

    /**
     * @Route("/questions/{slug}")
     */
    public function show($slug)
    {
        $answers = [
            "lorem  the beauty swan",
            "test the management field",
            "clear the path for road travelers"
        ];
        return $this->render('question/show.html.twig',[
            'question'=> ucwords(str_replace('-',' ',$slug)),
            'answers' => $answers,
        ]);
    }
}