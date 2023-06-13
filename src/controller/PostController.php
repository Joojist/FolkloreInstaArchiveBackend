<?php
// src/Controller/PostController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Post;

class PostController extends AbstractController
{
    public function savePost(Request $request): Response
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
        $post->setDeletedAt(null);

        // Save the post to the database
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($post);
        $entityManager->flush();

        return new Response('Post saved successfully');
    }
}
