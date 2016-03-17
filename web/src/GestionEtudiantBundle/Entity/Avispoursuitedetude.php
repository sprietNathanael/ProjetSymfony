<?php

namespace GestionEtudiantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Avispoursuitedetude
 *
 * @ORM\Table(name="avispoursuitedetude", indexes={@ORM\Index(name="num_etudiant", columns={"num_etudiant", "id_module"})})
 * @ORM\Entity
 */
class Avispoursuitedetude
{
    /**
     * @var string
     *
     * @ORM\Column(name="avis", type="text", length=65535, nullable=false)
     */
    private $avis;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_etudiant", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numEtudiant;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_module", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idModule;

    /**
     * @var integer
     *
     * @ORM\Column(name="annee", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $annee;



    /**
     * Set avis
     *
     * @param string $avis
     * @return Avispoursuitedetude
     */
    public function setAvis($avis)
    {
        $this->avis = $avis;

        return $this;
    }

    /**
     * Get avis
     *
     * @return string 
     */
    public function getAvis()
    {
        return $this->avis;
    }

    /**
     * Set numEtudiant
     *
     * @param integer $numEtudiant
     * @return Avispoursuitedetude
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
     * Set idModule
     *
     * @param integer $idModule
     * @return Avispoursuitedetude
     */
    public function setIdModule($idModule)
    {
        $this->idModule = $idModule;

        return $this;
    }

    /**
     * Get idModule
     *
     * @return integer 
     */
    public function getIdModule()
    {
        return $this->idModule;
    }

    /**
     * Set annee
     *
     * @param integer $annee
     * @return Avispoursuitedetude
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
