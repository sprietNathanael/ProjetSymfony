<?php

namespace GestionEtudiantBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Ue
 *
 * @ORM\Table(name="ue")
 * @ORM\Entity
 */
class Ue
{
    /**
     * @var string
     *
     * @ORM\Column(name="semestre", type="string", length=20, nullable=false)
     */
    private $semestre;

    /**
     * @var string
     *
     * @ORM\Column(name="code_apogee", type="string", length=255, nullable=false)
     */
    private $codeApogee;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_ue", type="string", length=255, nullable=false)
     */
    private $nomUe;

    /**
     * @var float
     *
     * @ORM\Column(name="coefficient", type="float", precision=10, scale=0, nullable=false)
     */
    private $coefficient;

    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=8)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="Module", mappedBy="idUe")
     */
    private $modules;

    /**
     * Ue constructor.
     */
    public function __construct()
    {
        $this->modules = new ArrayCollection();
        var_dump($this->modules);
    }


    /**
     * Set semestre
     *
     * @param string $semestre
     * @return Ue
     */
    public function setSemestre($semestre)
    {
        $this->semestre = $semestre;

        return $this;
    }

    /**
     * Get semestre
     *
     * @return string 
     */
    public function getSemestre()
    {
        return $this->semestre;
    }

    /**
     * Set codeApogee
     *
     * @param string $codeApogee
     * @return Ue
     */
    public function setCodeApogee($codeApogee)
    {
        $this->codeApogee = $codeApogee;

        return $this;
    }

    /**
     * Get codeApogee
     *
     * @return string 
     */
    public function getCodeApogee()
    {
        return $this->codeApogee;
    }

    /**
     * Set nomUe
     *
     * @param string $nomUe
     * @return Ue
     */
    public function setNomUe($nomUe)
    {
        $this->nomUe = $nomUe;

        return $this;
    }

    /**
     * Get nomUe
     *
     * @return string 
     */
    public function getNomUe()
    {
        return $this->nomUe;
    }

    /**
     * Set coefficient
     *
     * @param float $coefficient
     * @return Ue
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
    public function getModules()
    {
        return $this->modules;
    }

    /**
     * @param mixed $modules
     */
    public function setModules($modules)
    {
        $this->modules = $modules;
    }

    /**
     * Add modules
     *
     * @param \GestionEtudiantBundle\Entity\Module $modules
     * @return Ue
     */
    public function addModule(\GestionEtudiantBundle\Entity\Module $modules)
    {
        $this->modules[] = $modules;

        return $this;
    }

    /**
     * Remove modules
     *
     * @param \GestionEtudiantBundle\Entity\Module $modules
     */
    public function removeModule(\GestionEtudiantBundle\Entity\Module $modules)
    {
        $this->modules->removeElement($modules);
    }
}
