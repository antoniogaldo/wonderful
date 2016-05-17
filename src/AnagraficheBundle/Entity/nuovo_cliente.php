<?php

namespace AnagraficheBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * nuovo_cliente
 *
 * @ORM\Table(name="nuovo_cliente")
 * @ORM\Entity(repositoryClass="AnagraficheBundle\Repository\nuovo_clienteRepository")
 */
class nuovo_cliente
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
     * @ORM\Column(name="nome", type="string", length=255)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="cognome", type="string", length=255)
     */
    private $cognome;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime")
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="indirizzo", type="string", length=255)
     */
    private $indirizzo;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var int
     *
     * @ORM\Column(name="telefono", type="integer")
     */
    private $telefono;

    /**
     * @ORM\OneToMany(targetEntity="aggiungi_persone", mappedBy="cliente")
     */
    private $personeAggiuntive;

    public function __construct()
    {
        $this->personeAggiuntive = new ArrayCollection();
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
     * Set nome
     *
     * @param string $nome
     *
     * @return nuovo_cliente
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set cognome
     *
     * @param string $cognome
     *
     * @return nuovo_cliente
     */
    public function setCognome($cognome)
    {
        $this->cognome = $cognome;

        return $this;
    }

    /**
     * Get cognome
     *
     * @return string
     */
    public function getCognome()
    {
        return $this->cognome;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     *
     * @return nuovo_cliente
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return \DateTime
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set indirizzo
     *
     * @param string $indirizzo
     *
     * @return nuovo_cliente
     */
    public function setIndirizzo($indirizzo)
    {
        $this->indirizzo = $indirizzo;

        return $this;
    }

    /**
     * Get indirizzo
     *
     * @return string
     */
    public function getIndirizzo()
    {
        return $this->indirizzo;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return nuovo_cliente
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telefono
     *
     * @param integer $telefono
     *
     * @return nuovo_cliente
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return int
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set personeAggiuntive
     *
     * @param ArrayCollection $personeAggiuntive
     *
     * @return nuovo_cliente
     */
    public function setPersoneAggiuntive($personeAggiuntive)
    {
        $this->personeAggiuntive = $personeAggiuntive;

        return $this;
    }

    /**
     * Get personeAggiuntive
     *
     * @return int
     */
    public function getPersoneAggiuntive()
    {
        return $this->personeAggiuntive;
    }
}

