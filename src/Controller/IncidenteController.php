<?php
/**
 * Created by PhpStorm.
 * User: rogeriolucio
 * Date: 27/05/19
 * Time: 10:05
 */

namespace App\Controller;


use App\Repository\IncidenteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


class IncidenteController extends Controller
{

    private $incidenteRepository;

    public function __construct(IncidenteRepository $incidenteRepository)
    {
        $this->incidenteRepository = $incidenteRepository;
    }

    /**
     * @return JsonResponse
     * @Route("/incidente/list", methods={"GET","HEAD"}, name="incidente_list")
     */
    public function list()
    {
        $incidentes['data'] = $this->incidenteRepository->findAll();


        return $this->render('list.html.twig', $incidentes);
    }

    /**
     * @param int $id
     * @return \App\Entity\Incidente|null
     * @Route("/incidente/show/{$id}",name="incidente_show")
     */
    public function show($id)
    {

        try {

            $incidentes = $this->incidenteRepository->find($id);

            if (is_null($incidentes)) {
                throw  new \Exception('Nenhum incidente encontrado', 400);
            }

            $response['inf'] = [
                'titulo' => $incidentes->getTitulo(),
                'id' => $incidentes->getId(),
                'descricao' => $incidentes->getDescricao(),
                'criticidade' => $incidentes->getCriticidade(),
                'status' => $incidentes->getStatus(),
                'tipo' => $incidentes->getTipo(),
                'legenda' => [
                    'titulo_page' => 'Título do incidente',
                    'descricao' => 'Descrição',
                    'criticidade' => 'Criticidade',
                    'tipo' => 'Tipo',
                    'status' => 'Status'
                ]
            ];

            return $this->render('edit.html.twig', $response);


        } catch (\Exception $exception) {
            return JsonResponse::create($exception->getMessage(), $exception->getCode());
        }
    }

    /**
     * @param $request
     * @Route("/incidente", methods={"POST","HEAD"})
     */
    /**
     * @return JsonResponse
     * @Route("/incidente", methods={"POST","HEAD"})
     */
    public function update(Request $request)
    {
        try {

            if (!is_null($request->get('id'))) {
                $this->incidenteRepository->update($request);
                return JsonResponse::create('Atualizado', 200);
            }
            $this->incidenteRepository->create($request);

            return JsonResponse::create('Incidente Criado', 200);
        } catch (\Exception $exception) {
            return JsonResponse::create($exception->getMessage(), $exception->getCode());
        }
    }


    /**
     * @param int $id
     * @Route("/incidente/delete/", methods={"POST","HEAD"}, name="incidente_delete")
     */
    public function delete(Request $request)
    {

        try {

            if (is_null($request->getContent())) {
                throw new \Exception('Incidente não encontrado');
            }

            $incidente = $this->incidenteRepository->find($request->getContent());

            if (is_null($incidente)) {
                throw  new \Exception('Incidente não encontrado', 400);
            }

            $this->incidenteRepository->delete($incidente);

            return JsonResponse::create('Incidente Excluido', 200);

        } catch (\Exception $exception) {
            return JsonResponse::create($exception->getMessage(), $exception->getCode());

        }

    }
}