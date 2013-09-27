<?php

namespace DC\ShowcaseBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * RestaurantRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RestaurantRepository extends EntityRepository
{
   public function searchRestaurant($query,$limit,$offset)
    {
        if($query!=-1)
        {
            $query = '%'.$query.'%';
            $q = $this
                ->createQueryBuilder('u')
                ->where('u.name LIKE :username OR u.title LIKE :email OR u.descriprion LIKE :phone')
                ->setParameter('name', $query)
                ->setParameter('title', $query)
                ->setParameter('descriprion', $query)
                ->orderBy('u.id','ASC')
                ->setMaxResults($limit)
                ->setFirstResult($offset)
                ->getQuery();
        }else{

            $q=$this
                ->createQueryBuilder('u')
                ->orderBy('u.id','ASC')
                ->setMaxResults($limit)
                ->setFirstResult($offset)
                ->getQuery();
        }
        try {
            $users = $q->getResult();
        } catch (NoResultException $e) {
            $message = sprintf(
                'Unable to find an active user DCShowcaseBundle:User object identified by "%s".',
                $query
            );
            throw new UsernameNotFoundException($message, 0, $e);
        }
        return $users;
    }

    public function countSearchUsers($query)
    {
        if($query!=-1)
        {
            $query = '%'.$query.'%';
            $q = $this
                ->createQueryBuilder('u')
                ->select('count(u.id)')
                ->where('u.name LIKE :username OR u.title LIKE :email OR u.descriprion LIKE :phone')
                ->setParameter('name', $query)
                ->setParameter('title', $query)
                ->setParameter('descriprion', $query)
                ->orderBy('u.id','ASC')
                ->getQuery();
        }else{

            $q = $this
                ->createQueryBuilder('u')
                ->select('count(u.id)')
                ->getQuery();
        }
        try {
            $count_users = $q->getSingleScalarResult();
        } catch (NoResultException $e) {
            $message = sprintf(
                'Unable to find an active user DCShowcaseBundle:User object identified by "%s".',
                $query
            );
            throw new UsernameNotFoundException($message, 0, $e);
        }
        return $count_users;
    }
}
