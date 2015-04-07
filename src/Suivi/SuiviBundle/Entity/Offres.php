<?php

namespace Suivi\SuiviBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offres
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Suivi\SuiviBundle\Entity\OffresRepository")
 */
class Offres
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=125)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=125)
     */
    private $status;


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
     * Set nom
     *
     * @param string $nom
     * @return Offres
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Offres
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Offres
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }
     /**
     *
     *@ORM\ManyToOne(targetEntity="Categorie",inversedBy="offre", cascade={"remove"})
     *@ORM\JoinColumn(name="categ_id", referencedColumnName="id")
     */
    private $categ;

    /**
     * Set categ
     *
     * @param \Suivi\SuiviBundle\Entity\Categorie $categ
     * @return Offres
     */
    public function setCateg(\Suivi\SuiviBundle\Entity\Categorie $categ = null)
    {
        $this->categ = $categ;

        return $this;
    }

    /**
     * Get categ
     *
     * @return \Suivi\SuiviBundle\Entity\Categorie 
     */
    public function getCateg()
    {
        return $this->categ;
    }
}
