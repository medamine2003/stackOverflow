<?php

namespace App\Controller\Api;

use App\Entity\Question;
use App\Form\QuestionType;
use App\Repository\QuestionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/question')]
class QuestionController extends AbstractController
{
    #[Route('/', name: 'app_question_index', methods: ['GET'])]
    public function index(QuestionRepository $questionRepository): Response
    {
        return $this->render('question/index.html.twig', [
            'questions' => $questionRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_question_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $question = new Question();
        $form = $this->createForm(QuestionType::class, $question);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($question);
            $entityManager->flush();

            return $this->redirectToRoute('app_question_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('question/new.html.twig', [
            'question' => $question,
            'form' => $form,
        ]);
    }

    /*
     * Une option 'requirements' est ajoutée pour lever l'ambiguïté des deux routes suivantes
     * qui ont le même schéma d'URL : "/{<var>}
     * Nous indiquons que la route `app_question_show` s'applique si la variable ne contient que des chiffres.
     * (ceci est une approximation, pour l'exemple ; dans une vraie application, on laissera rarement deux schémas semblables) 
     */
    #[Route('/{id}', name: 'app_question_show', methods: ['GET'], requirements: ['id' => '^\d+$'])]
    public function show(Question $question): Response
    {
        return $this->render('question/show.html.twig', [
            'question' => $question,
        ]);
    }

    /**
     * Envoyer la liste des question qui contiennent un certain mot dans leur titre
     */
    #[Route('/{word}', name: 'app_question_show_title', methods: ['GET'])]
    public function showTitle(Request $request, string $word, QuestionRepository $qr): Response
    {
        //$questions = $qr->findByTitleFragment($word);
        $questions = $qr->findAll();

        $contentType = $request->headers->get('Accept');

        // --> /!\ Attention à la sérialisation
        // --> Groupes de sérialisation

        if ($contentType === 'application/json') {
            return $this->json(['questions' => count($questions)], $status = 200, $headers = ['Content-Type' => 'application/json']);
        } else {
            return $this->render('question/index.html.twig', [
                'questions' => $questions,
            ]);
        }
    }

    #[Route('/{id}/edit', name: 'app_question_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Question $question, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(QuestionType::class, $question);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_question_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('question/edit.html.twig', [
            'question' => $question,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_question_delete', methods: ['POST'])]
    public function delete(Request $request, Question $question, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$question->getId(), $request->request->get('_token'))) {
            $entityManager->remove($question);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_question_index', [], Response::HTTP_SEE_OTHER);
    }
}