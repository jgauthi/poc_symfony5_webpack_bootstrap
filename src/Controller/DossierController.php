<?php
namespace App\Controller;

use App\Entity\Dossier;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\{Request, Response};
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DossierController extends AbstractController
{
    /**
     * @Route("/", name="dossierList")
     * @param Request $request
     * @param PaginatorInterface $paginator
     * @return Response
     */
    public function dossierList(Request $request, PaginatorInterface $paginator): Response
    {
        $dossierRepository = $this->getDoctrine()->getRepository(Dossier::class);
        $query = $dossierRepository->findVisibleQuery();

        $dossierList = $paginator->paginate($query, $request->query->getInt('page', 1), 6);

        return $this->render('dossierList.html.twig', [
            'dossierList' =>  $dossierList,
        ]);
    }

    /**
     * @Route("/dossier/{id}", name="dossierItem")
     * @param Dossier $dossier
     * @return Response
     */
	public function dossierItem(Dossier $dossier): Response
    {
        return $this->render('dossierItem.html.twig', [
            'dossier' =>  $dossier,
        ]);
    }
}
