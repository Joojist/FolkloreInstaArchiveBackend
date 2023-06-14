<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FetchHTMLController
{
    /**
     * @Route("/fetch-html", name="fetch_html", methods={"POST"})
     */
    public function fetchHTML(Request $request): Response
    {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        $url = $request->request->get('url');

        $options = [
            'http' => [
                'method' => 'GET',
                'header' => 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.93 Safari/537.36'
            ],
        ];

        $context = stream_context_create($options);
        $html = file_get_contents($url, false, $context);

        if ($html === false) {
            $response = new Response('Error fetching HTML', Response::HTTP_INTERNAL_SERVER_ERROR);
        } else {
            $response = new Response($html);
        }

        $response->headers->set('Content-Type', 'text/html');

        return $response;
    }
}
