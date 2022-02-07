<?php

namespace App\Controller;
use App\Service\MoviesData;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\JsonResponse;



class HomeController extends AbstractController
{
	/**
	*@Route("/", name="home")
	*/

	public function index(MoviesData $moviesData)
	{
		$data = $moviesData->getData();
		return $this->render('home/index.html.twig', [
			'data'=>$data,

		]);
	}

	/**
    * @Route("/movies")
    */
    public function moviesAction(MoviesData $moviesData)
    {
        $data = $moviesData->getData();
        return new JsonResponse($data);
    }
}