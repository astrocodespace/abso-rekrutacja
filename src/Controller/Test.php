<?php

namespace App\Controller;

use App\Repository\CompanyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Test extends AbstractController
{
    /**
     * @Route("/company", name="company")
     */
    public function index(CompanyRepository $companyRepository)
    {
        return $this->render('company/index.html.twig', [
            'controller_name' => 'CompanyController',
        ]);
    }

    public function create(CompanyRepository $companyRepository)
    {

    }

    public function edit()
    {

    }
}
