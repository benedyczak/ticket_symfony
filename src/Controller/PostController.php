<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\PostType;
use App\Entity\Post;

class PostController extends AbstractController
{
    /**
     * @Route("/post")
     */
    public function Post (Request $request)
    {
        $post = new Post();
        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            dump($post);
        }
        return $this->render('index.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
