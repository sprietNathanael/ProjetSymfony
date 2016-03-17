<?php

namespace GestionEtudiantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Note
 *
 * @ORM\Table(name="note", indexes={@ORM\Index(name="id_module", columns={"id_module", "num_etu"}), @ORM\Index(name="IDX_CFBDFA142A1393C5", columns={"id_module"})})
 * @ORM\Entity
 */
class Note
{
    /**
     * @ORM\ManyToOne(targetEntity="GestionEtudiantBundle\Entity\Etudiant")
     * @ORM\JoinColumn(name="num_etu", referencedColumnName="id")
     */
    private $numEtu;

    /**
     * @var integer
     *
     * @ORM\Column(name="annee", type="integer", nullable=false)
     */
    private $annee;

    /**
     * @var float
     *
     * @ORM\Column(name="note", type="float", precision=10, scale=0, nullable=false)
     */
    private $note;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \GestionEtudiantBundle\Entity\Module
     *
     * @ORM\ManyToOne(targetEntity="GestionEtudiantBundle\Entity\Module", inversedBy="notes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_module", referencedColumnName="id")
     * })
     */
    private $idModule;



    /**
     * Set numEtu
     *
     * @param integer $numEtu
     * @return Note
     */
    public function setNumEtu($numEtu)
    {
        $this->numEtu = $numEtu;

        return $this;
    }

    /**
     * Get numEtu
     *
     * @return integer 
     */
    public function getNumEtu()
    {
        return $this->numEtu;
    }

    /**
     * Set annee
     *
     * @param integer $annee
     * @return Note
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return integer 
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set note
     *
     * @param float $note
     * @return Note
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return float 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idModule
     *
     * @param \GestionEtudiantBundle\Entity\Module $idModule
     * @return Note
     */
    public function setIdModule(\GestionEtudiantBundle\Entity\Module $idModule = null)
    {
        $this->idModule = $idModule;

        return $this;
    }

    /**
     * Get idModule
     *
     * @return \GestionEtudiantBundle\Entity\Module 
     */
    public function getIdModule()
    {
        return $this->idModule;
    }
}
