<?php

namespace PacchettiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * nuovo_pacchetto
 *
 * @ORM\Table(name="nuovo_pacchetto")
 * @ORM\Entity(repositoryClass="PacchettiBundle\Repository\nuovo_pacchettoRepository")
 */
class nuovo_pacchetto
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
     * @ORM\Column(name="nome_pacchetto", type="string", length=255)
     */
    private $nomePacchetto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_inizio", type="datetime")
     */
    private $dataInizio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_fine", type="datetime")
     */
    private $dataFine;


/**
     * @var string
     *
     * @ORM\OneToMany(targetEntity="servizi", mappedBy="persone")
     */
    private $servizi;

    public function __construct()
    {
        $this->servizi = new ArrayCollection();
    }

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
     * Set nomePacchetto
     *
     * @param string $nomePacchetto
     *
     * @return nuovo_pacchetto
     */
    public function setNomePacchetto($nomePacchetto)
    {
        $this->nomePacchetto = $nomePacchetto;

        return $this;
    }

    /**
     * Get nomePacchetto
     *
     * @return string
     */
    public function getNomePacchetto()
    {
        return $this->nomePacchetto;
    }

    /**
     * Set dataInizio
     *
     * @param \DateTime $dataInizio
     *
     * @return nuovo_pacchetto
     */
    public function setDataInizio($dataInizio)
    {
        $this->dataInizio = $dataInizio;

        return $this;
    }

    /**
     * Get dataInizio
     *
     * @return \DateTime
     */
    public function getDataInizio()
    {
        return $this->dataInizio;
    }

    /**
     * Set dataFine
     *
     * @param \DateTime $dataFine
     *
     * @return nuovo_pacchetto
     */
    public function setDataFine($dataFine)
    {
        $this->dataFine = $dataFine;

        return $this;
    }

    /**
     * Get dataFine
     *
     * @return \DateTime
     */
    public function getDataFine()
    {
        return $this->dataFine;
    }

    /**
     * Set servizi
     *
     * @param ArrayCollection $servizi
     *
     * @return nuovo_pacchetto
     */
    public function setServizi($servizi)
    {
        $this->servizi = $servizi;

        return $this;
    }

    /**
     * Get servizi
     *
     * @return string
     */
    public function getServizi()
    {
        return $this->servizi;
    }
}

