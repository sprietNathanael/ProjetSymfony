<?php

namespace GestionEtudiantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Decisionjury
 *
 * @ORM\Table(name="decisionjury", indexes={@ORM\Index(name="num_etudiant", columns={"num_etudiant"})})
 * @ORM\Entity
 */
class Decisionjury
{
    /**
     * @var string
     *
     * @ORM\Column(name="decision", type="text", length=65535, nullable=false)
     */
    private $decision;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_etudiant", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numEtudiant;

    /**
     * @var string
     *
     * @ORM\Column(name="semestre", type="string", length=20)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $semestre;

    /**
     * @var integer
     *
     * @ORM\Column(name="annee", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $annee;



    /**
     * Set decision
     *
     * @param string $decision
     * @return Decisionjury
     */
    public function setDecision($decision)
    {
        $this->decision = $decision;

        return $this;
    }

    /**
     * Get decision
     *
     * @return string 
     */
    public function getDecision()
    {
        return $this->decision;
    }

    /**
     * Set numEtudiant
     *
     * @param integer $numEtudiant
     * @return Decisionjury
     */
    public function setNumEtudiant($numEtudiant)
    {
        $this->numEtudiant = $numEtudiant;

        return $this;
    }

    /**
     * Get numEtudiant
     *
     * @return integer 
     */
    public function getNumEtudiant()
    {
        return $this->numEtudiant;
    }

    /**
     * Set semestre
     *
     * @param string $semestre
     * @return Decisionjury
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
     * Set annee
     *
     * @param integer $annee
     * @return Decisionjury
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
}
