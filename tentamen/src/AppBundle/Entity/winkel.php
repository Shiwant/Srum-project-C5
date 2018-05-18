<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * winkel
 *
 * @ORM\Table(name="winkel")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\WinkelRepository")
 */
class winkel
{
    /**
     * @var int
     *
      * @ORM\Column(type="integer")
      * @ORM\Id
      * @ORM\GeneratedValue(strategy="AUTO")
      * @ORM\OneToMany(targetEntity="Product", mappedBy="winkels")
      */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="winkelnaam", type="string", length=255, nullable=true)
     */
    private $winkelnaam;

    /**
     * @var string
     *
     * @ORM\Column(name="oppervlakte", type="string", length=100, nullable=true)
     */
    private $oppervlakte;

    /**
     * @var string
     *
     * @ORM\Column(name="plaats", type="string", length=100, nullable=true)
     */
    private $plaats;



    /**
     * Set id
     *
     * @param string $id
     *
     * @return winkel
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * Set winkelnaam
     *
     * @param integer $winkelnaam
     *
     * @return winkel
     */
    public function setwinkelnaam($winkelnaam)
    {
        $this->winkelnaam = $winkelnaam;

        return $this;
    }

    /**
     * Get winkelnaam
     *
     * @return int
     */
    public function getwinkelnaam()
    {
        return $this->winkelnaam;
    }

    /**
     * Set oppervlakte
     *
     * @param string $oppervlakte
     *
     * @return winkel
     */
    public function setoppervlakte($oppervlakte)
    {
        $this->oppervlakte = $oppervlakte;

        return $this;
    }

    /**
     * Get oppervlakte
     *
     * @return string
     */
    public function getoppervlakte()
    {
        return $this->oppervlakte;
    }

    /**
     * Set plaats
     *
     * @param string $plaats
     *
     * @return winkel
     */
    public function setplaats($plaats)
    {
        $this->plaats = $plaats;

        return $this;
    }

    /**
     * Get plaats
     *
     * @return string
     */
    public function getplaats()
    {
        return $this->plaats;
    }


}
