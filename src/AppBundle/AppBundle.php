<?php

namespace AppBundle\Entity;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use FOS\UserBundle\Model\User as FosUser;
use Doctrine\ORM\Mapping as ORM;

class AppBundle extends Bundle
{


    /**
     * AppBundle constructor.
     */
    public function __construct()
    {
        parent:: __construct();
    }
}
