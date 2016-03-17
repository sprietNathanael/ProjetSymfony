<?php

namespace GestionEtudiantBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Module
 *
 * @ORM\Table(name="module", indexes={@ORM\Index(name="id_ue", columns={"id_ue", "login_prof"}), @ORM\Index(name="IDX_C242628EE34F39C", columns={"id_ue"})})
 * @ORM\Entity
 */
class Module
{
    /**
     * @ORM\ManyToOne(targetEntity="Ue", inversedBy="modules")
     * @ORM\JoinColumn(name="id_ue", referencedColumnName="id")
     */
    private $idUe;

    /**
     * @var string
     *
     * @ORM\Column(name="login_prof", type="string", length=255, nullable=false)
     */
    private $loginProf;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_module", type="string", length=255, nullable=false)
     */
    private $nomModule;

    /**
     * @var float
     *
     * @ORM\Column(name="coefficient", type="float", precision=10, scale=0, nullable=false)
     */
    private $coefficient;

    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=10)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="Note", mappedBy="idModule")
     */
    private $notes;

    /**
     * Module constructor.
     * @param string $loginProf
     */
    public function __construct()
    {
        $this->notes = new ArrayCollection();
    }


    /**
     * Set idUe
     *
     * @param string $idUe
     * @return Module
     */
    public function setIdUe($idUe)
    {
        $this->idUe = $idUe;

        return $this;
    }

    /**
     * Get idUe
     *
     * @return string 
     */
    public function getIdUe()
    {
        return $this->idUe;
    }

    /**
     * Set loginProf
     *
     * @param string $loginProf
     * @return Module
     */
    public function setLoginProf($loginProf)
    {
        $this->loginProf = $loginProf;

        return $this;
    }

    /**
     * Get loginProf
     *
     * @return string 
     */
    public function getLoginProf()
    {
        return $this->loginProf;
    }

    /**
     * Set nomModule
     *
     * @param string $nomModule
     * @return Module
     */
    public function setNomModule($nomModule)
    {
        $this->nomModule = $nomModule;

        return $this;
    }

    /**
     * Get nomModule
     *
     * @return string 
     */
    public function getNomModule()
    {
        return $this->nomModule;
    }

    /**
     * Set coefficient
     *
     * @param float $coefficient
     * @return Module
     */
    public function setCoefficient($coefficient)
    {
        $this->coefficient = $coefficient;

        return $this;
    }

    /**
     * Get coefficient
     *
     * @return float 
     */
    public function getCoefficient()
    {
        return $this->coefficient;
    }

    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param mixed $notes
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
    }



    /**
     * Add notes
     *
     * @param \GestionEtudiantBundle\Entity\Note $notes
     * @return Module
     */
    public function addNote(\GestionEtudiantBundle\Entity\Note $notes)
    {
        $this->notes[] = $notes;

        return $this;
    }

    /**
     * Remove notes
     *
     * @param \GestionEtudiantBundle\Entity\Note $notes
     */
    public function removeNote(\GestionEtudiantBundle\Entity\Note $notes)
    {
        $this->notes->removeElement($notes);
    }
}
