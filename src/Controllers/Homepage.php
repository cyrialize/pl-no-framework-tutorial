<?php declare(strict_types = 1);

namespace Example\Controllers;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Homepage
{
    private $request;
    private $response;

    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    public function show()
    {
        $content = "<h1> Hello, World! </h1>";
        $content .= "Hello " . $this->request->query->get('name', '');
        $this->response->setContent($content);
    }

}

