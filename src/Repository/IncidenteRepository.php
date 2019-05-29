<?php

namespace App\Repository;

use App\Entity\Incidente;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @method Incidente|null find($id, $lockMode = null, $lockVersion = null)
 * @method Incidente|null findOneBy(array $criteria, array $orderBy = null)
 * @method Incidente[]    findAll()
 * @method Incidente[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IncidenteRepository extends ServiceEntityRepository
{
    private $entityManager;

    public function __construct(RegistryInterface $registry, EntityManagerInterface $entityManager)
    {
        parent::__construct($registry, Incidente::class);
        $this->entityManager = $entityManager;
    }

    public function create(Request $request)
    {
        $incidente = new Incidente();
        $incidente->setTitulo($request->get('titulo'));
        $incidente->setStatus($request->get('status'));
        $incidente->setCriticidade($request->get('criticidade'));
        $incidente->setDescricao($request->get('descricao'));
        $incidente->setTipo($request->get('tipo'));
        $this->entityManager->persist($incidente);
        $this->entityManager->flush();
    }

    public function update(Request $request)
    {
        $incidente = $this->find($request->get('id'));

        if (is_null($incidente)) {
            throw  new \Exception('Incidente não encontrado');
        }

        $incidente->setTitulo($request->get('titulo'));
        $incidente->setStatus($request->get('status'));
        $incidente->setCriticidade($request->get('criticidade'));
        $incidente->setDescricao($request->get('descricao'));
        $incidente->setTipo($request->get('tipo'));
        $this->entityManager->persist($incidente);
        $this->entityManager->flush();
    }

    public function delete($incidente)
    {
        $this->entityManager->remove($incidente);
        $this->entityManager->flush();
    }


}
