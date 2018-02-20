<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="HealthCentreIreland\src\AppBundle\Entity")
 */
class Event
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GenerateValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="eventName", type="string", length=255)
     */
    private $eventName;

    /**
     * @ORM\Column(name="startEvent", type="datetime")
     */
    private $startEvent;

    /**
     * @ORM\Column(name="endEvent", type="datetime")
     */
    private $endEvent;
}