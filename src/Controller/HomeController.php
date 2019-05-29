<?php
/**
 * Created by PhpStorm.
 * User: rogeriolucio
 * Date: 27/05/19
 * Time: 11:14
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class HomeController extends Controller
{

    public function __construct()
    {
    }

    public function index()
    {

        $data['inf'] = [
            'titulo' => 'Cadastrar Incidente',
            'legenda' => [
                'titulo' => 'Título do incidente',
                'descricao' => 'Descrição',
                'criticidade' => 'Criticidade',
                'tipo' => 'Tipo',
                'status' => 'Status'
            ]
        ];
        return $this->render('default/index.html.twig',$data);

    }


}