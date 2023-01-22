<?php
// src/Controller/PostController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\PostType;
use App\Entity\Post;

class PostController extends AbstractController
{
    /**
     * @Route("/contact")
     */
    public function contact(Request $request)
    {
        $Text = new Post();
        $form = $this->createForm(PostType::class, $Text);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            dump($Text);
        }
        return $this->render('post.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}