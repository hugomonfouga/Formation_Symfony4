<?php
/**
 * Created by PhpStorm.
 * User: hugo
 * Date: 17/02/19
 * Time: 15:20
 */

namespace App\Controller;


use App\Repository\PropertyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class HomeController extends AbstractController
{


    /**
     * @Route("/", name="home")
     * @param PropertyRepository $repository
     * @return Response
     */

    public function index(PropertyRepository $repository):Response
    {
        $properties = $repository->findLatest();
        return $this->render('pages/home.html.twig',
            [
                'properties' => $properties
            ]);

    }
}