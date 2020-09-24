<?php declare(strict_types = 1);

namespace App\Controllers;
use Http\Request;
use Http\Response;
use Core\RenderInterface as Renderer;

class HomeController
{
    private $request;
    private $response;
    private $renderer;

    public function __construct(Request $request, Response $response, Renderer $renderer)
    {
        $this->request = $request;
        $this->response = $response;
        $this->renderer = $renderer;
    }

    public function index()
    {
        $data = [
            'name' => $this->request->getParameter('name', 'Francisco'),
        ];
        $html = $this->renderer->render('home', $data);
        $this->response->setContent($html);
    }
}