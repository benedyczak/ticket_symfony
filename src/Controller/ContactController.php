<?php
// src/Controller/ContactController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ContactType;
use App\Entity\Message;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact")
     */
    public function contact(Request $request)
    {
        $message = new Message();
        $form = $this->createForm(ContactType::class, $message);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            dump($message);
        }
        return $this->render('contact.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}