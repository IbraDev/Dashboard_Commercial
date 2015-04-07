<?php

namespace Suivi\SuiviBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Suivi\SuiviBundle\Entity\CategorieRepository")
 */
class Categorie
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="date")
     */
    private $dateCreation;


    
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
     * @return Categorie
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
     * @return Categorie
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
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Categorie
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime 
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }
    /**
     *
     *@ORM\OneToMany(targetEntity="Offres",mappedBy="categ",cascade={"remove", "persist"})
     *@ORM\JoinColumn(nullable=false)
     */
    private $offre;
   
   
    
 


    /**
     * Add Offre
     *
     * @param \Suivi\SuiviBundle\Entity\Offres $offre
     * @return Categorie
     */
    public function addOffre(\Suivi\SuiviBundle\Entity\Offres $offre)
    {
        $this->Offre[] = $offre;

        return $this;
    }

    /**
     * Remove Offre
     *
     * @param \Suivi\SuiviBundle\Entity\Offres $offre
     */
    public function removeOffre(\Suivi\SuiviBundle\Entity\Offres $offre)
    {
        $this->Offre->removeElement($offre);
    }

    /**
     * Get Offre
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOffre()
    {
        return $this->Offre;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->offre = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
