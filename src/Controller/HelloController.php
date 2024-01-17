<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HelloController
{
    #[Route('/')]
    public function index(): Response
    {
        return new Response( content: 'Olá, Mundo!');
    }

    #[Route('/dinoussauro')]
    public function dinoussauro(): Response
    {
        return new Response( content: 'Olá, Dinoussauro!');
    }

    #[Route('/mamifero')]
    public function mamifero(): Response
    {
        return new Response( content: 'Olá, Mamífero!');
    }

    #[Route('/invertebrados')]
    public function invertebrados(): Response
    {
        return new Response( content: 'Olá, Invertebrados!');
    }
}