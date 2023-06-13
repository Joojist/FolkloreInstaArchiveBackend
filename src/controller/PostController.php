<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Post;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class PostController extends AbstractController
{
    /**
     * @Route("/save-post", name="save_post", methods={"POST"})
     */
    public function savePost(Request $request, EntityManagerInterface $entityManager): Response
    {
        // Retrieve the data from the request
        $postData = $request->request->all();

        // Create a new Post entity
        $post = new Post();
        $post->setIgUrl($postData['igUrl']);
        $post->setIgUserId($postData['igUserId']);
        $post->setLikes($postData['likes']);
        $post->setCreatorId($postData['creatorId']);
        $post->setUpdaterId($postData['updaterId']);
        $post->setIgCreatedAt(new \DateTime($postData['igCreatedAt']));
        $post->setCreatedAt(new \DateTime());
        $post->setUpdatedAt(new \DateTime());
        $post->setDeletedAt(new \DateTime($postData['deletedAt']));

        // Save the post to the database
        $entityManager->persist($post);
        $entityManager->flush();

        return new Response('Post saved successfully');
    }
}
