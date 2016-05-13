<?php

namespace PacchettiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * servizi
 *
 * @ORM\Table(name="servizi")
 * @ORM\Entity(repositoryClass="PacchettiBundle\Repository\serviziRepository")
 */
class servizi
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="nuovo_pacchetto", inversedBy="servizi")
     */
    private $nomeServizio;
    public function __construct()
    {
        $this->nomeServizio = new ArrayCollection();
    }

    /**
     * @var int
     *
     * @ORM\Column(name="costo_servizio", type="integer")
     */
    private $costoServizio;



    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomeServizio
     *
     * @param ArrayCollection $nomeServizio
     *
     * @return servizi
     */
    public function setNomeServizio($nomeServizio)
    {
        $this->nomeServizio = $nomeServizio;

        return $this;
    }

    /**
     * Get nomeServizio
     *
     * @return string
     */
    public function getNomeServizio()
    {
        return $this->nomeServizio;
    }


    /**
     * Set costoServizio
     *
     * @param integer $costoServizio
     *
     * @return servizi
     */
    public function setCostoServizio($costoServizio)
    {
        $this->costoServizio = $costoServizio;

        return $this;
    }

    /**
     * Get costoServizio
     *
     * @return int
     */
    public function getCostoServizio()
    {
        return $this->costoServizio;
    }
}

