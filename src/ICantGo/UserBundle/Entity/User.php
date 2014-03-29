<?php
// src/Acme/UserBundle/Entity/User.php

namespace ICantGo\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="icantgo_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255, nullable=true)
     */
    protected $phone;
    
    /**
     * @var string
     *
     * @ORM\Column(name="date_subscribe", type="date", nullable=true)
     */
    protected $date_subscribe;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}
