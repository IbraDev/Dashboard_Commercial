<?php

namespace Suivi\SuiviBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vente1
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Suivi\SuiviBundle\Entity\Vente1Repository")
 */
class Vente1
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer",nullable=true)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datevente", type="date")
     */
    private $datevente;

    /**
     * @var integer
     *
     * @ORM\Column(name="coupon", type="integer",nullable=true)
     */
    private $coupon;

    /**
     * @var integer
     *
     * @ORM\Column(name="cssmobile", type="integer",nullable=true)
     */
    private $cssmobile;

    /**
     * @var integer
     *
     * @ORM\Column(name="tarajimobile", type="integer",nullable=true)
     */
    private $tarajimobile;

    /**
     * @var integer
     *
     * @ORM\Column(name="etoile", type="integer",nullable=true)
     */
    private $etoile;

    /**
     * @var integer
     *
     * @ORM\Column(name="clelinktop", type="integer",nullable=true)
     */
    private $clelinktop;

    /**
     * @var integer
     *
     * @ORM\Column(name="routeur", type="integer",nullable=true)
     */
    private $routeur;

    /**
     * @var integer
     *
     * @ORM\Column(name="coupond", type="integer")
     */
    private $coupond;
    /**
     * @var integer
     *
     * @ORM\Column(name="ccartesm", type="integer",)
     */
    private $cartesm;



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
     * Set datevente
     *
     * @param \DateTime $datevente
     * @return Vente1
     */
    public function setDatevente($datevente)
    {
        $this->datevente = $datevente;

        return $this;
    }

    /**
     * Get datevente
     *
     * @return \DateTime 
     */
    public function getDatevente()
    {
        return $this->datevente;
    }

    /**
     * Set coupon
     *
     * @param integer $coupon
     * @return Vente1
     */
    public function setCoupon($coupon)
    {
        $this->coupon = $coupon;

        return $this;
    }

    /**
     * Get coupon
     *
     * @return integer 
     */
    public function getCoupon()
    {
        return $this->coupon;
    }
    /**
     * Set cartesm
     *
     * @param integer $cartesm
     * @return Vente1
     */
    public function setCartesm($cartesm)
    {
        $this->cartesm = $cartesm;

        return $this;
    }

    /**
     * Get cartesm
     *
     * @return integer
     */
    public function getCartesm()
    {
        return $this->cartesm;
    }

    /**
     * Set cssmobile
     *
     * @param integer $cssmobile
     * @return Vente1
     */
    public function setCssmobile($cssmobile)
    {
        $this->cssmobile = $cssmobile;

        return $this;
    }

    /**
     * Get cssmobile
     *
     * @return integer 
     */
    public function getCssmobile()
    {
        return $this->cssmobile;
    }

    /**
     * Set tarajimobile
     *
     * @param integer $tarajimobile
     * @return Vente1
     */
    public function setTarajimobile($tarajimobile)
    {
        $this->tarajimobile = $tarajimobile;

        return $this;
    }

    /**
     * Get tarajimobile
     *
     * @return integer 
     */
    public function getTarajimobile()
    {
        return $this->tarajimobile;
    }

    /**
     * Set etoile
     *
     * @param integer $etoile
     * @return Vente1
     */
    public function setEtoile($etoile)
    {
        $this->etoile = $etoile;

        return $this;
    }

    /**
     * Get etoile
     *
     * @return integer 
     */
    public function getEtoile()
    {
        return $this->etoile;
    }

    /**
     * Set clelinktop
     *
     * @param integer $clelinktop
     * @return Vente1
     */
    public function setClelinktop($clelinktop)
    {
        $this->clelinktop = $clelinktop;

        return $this;
    }

    /**
     * Get clelinktop
     *
     * @return integer 
     */
    public function getClelinktop()
    {
        return $this->clelinktop;
    }

    /**
     * Set routeur
     *
     * @param integer $routeur
     * @return Vente1
     */
    public function setRouteur($routeur)
    {
        $this->routeur = $routeur;

        return $this;
    }

    /**
     * Get routeur
     *
     * @return integer 
     */
    public function getRouteur()
    {
        return $this->routeur;
    }

    /**
     * Set coupond
     *
     * @param integer $coupond
     * @return Vente1
     */
    public function setCoupond($coupond)
    {
        $this->coupond = $coupond;

        return $this;
    }

    /**
     * Get coupond
     *
     * @return integer 
     */
    public function getCoupond()
    {
        return $this->coupond;
    }


    public function __construct()
    {
        $this->datevente = new \Datetime();

    }

}
