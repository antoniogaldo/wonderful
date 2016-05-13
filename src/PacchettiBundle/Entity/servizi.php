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
     * @ORM\Column(name="nomeServizio", type="string", length=255)
     */
    private $nomeServizio;
    
    

    /**
     * @var int
     *
     * @ORM\Column(name="costo_servizio", type="integer")
     */
    private $costoServizio;


    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="nuovo_pacchetto", inversedBy="servizi")
     */
    private $persone;


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
     * @param string $nomeServizio
     *
     * @return servizi
     */
    public function setnomeServizio($nomeServizio)
    {
        $this->nomeServizio = $nomeServizio;

        return $this;
    }

    /**
     * Get nomeServizio
     *
     * @return int
     */
    public function getnomeServizio()
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



    /**
     * Set servizi_aggiuntivo
     *
     * @param ArrayCollection $servizi_aggiuntivo
     *
     * @return servizi
     */
    public function setservizi_aggiuntivo($servizi_aggiuntivo)
    {
        $this->servizi_aggiuntivo = $servizi_aggiuntivo;

        return $this;
    }

    /**
     * Get servizi_aggiuntivo
     *
     * @return string
     */
    public function getservizi_aggiuntivo()
    {
        return $this->servizi_aggiuntivo;
    }

    /**
     * Set persone
     *
     * @param servizi $persone
     *
     * @return aggiungi_persone
     */
    public function setPersone($persone)
    {
        $this->persone = $persone;

        return $this;
    }

    /**
     * Get persone
     *
     * @return servizi
     */
    public function getPersone()
    {
        return $this->persone;
    }
}

