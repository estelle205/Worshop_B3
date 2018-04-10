<?php

namespace AppBundle\Entity;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use FOS\UserBundle\Model\User as FosUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class AppBundle extends Bundle
{


    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\Genrerated(strategy="AUTO")
     */
    protected $id;
    public function __construct()
    {
        parent:: __construct();
    }
}
