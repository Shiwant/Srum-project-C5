<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * personeelslid
 *
 * @ORM\Table(name="personeelslid")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PersoneelslidRepository")
 */
class personeelslid
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", length=11, type="integer")
     * @ORM\Id
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="naam", type="string", length=100, nullable=true)
     */
    private $naam;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="winkel", inversedBy="winkels")
     * @ORM\JoinColumn(name="winkel", referencedColumnName="id")
     */
    private $winkel;

    /**
     * @var string
     *
     * @ORM\Column(name="geslacht", type="string", length=5, nullable=true)
     */
    private $geslacht;

    /**
     * @var string
     *
     * @ORM\Column(name="dienstjaren", type="integer", length=10, nullable=true)
     */
    private $dienstjaren;

    public function __construct() {
        $this->personeelslid = new ArrayCollection();
    }

    /**
     * Set id
     *
     * @param string $id
     *
     * @return personeelslid
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
     * Set naam
     *
     * @param string $naam
     *
     * @return personeelslid
     */
    public function setNaam($naam)
    {
        $this->naam = $naam;

        return $this;
    }

    /**
     * Get naam
     *
     * @return string
     */
    public function getnaam()
    {
        return $this->naam;
      }

        /**
         * Set winkel
         *
         * @param string $winkel
         *
         * @return personeelslid
         */
        public function setwinkel($winkel)
        {
            $this->winkel = $winkel;

            return $this;
        }

        /**
         * Get winkel
         *
         * @return string
         */
        public function getwinkel()
        {
            return $this->winkel;




        /**
         * Set geslacht
         *
         * @param string $geslacht
         *
         * @return personeelslid
         */
        public function setgeslacht($geslacht)
            {
                $this->geslacht = $geslacht;

                return $this;
            }

            /**
             * Get geslacht
             *
             * @return string
             */
            public function getgeslacht()
            {
                return $this->geslacht;




                /**
                 * Set dienstjaren
                 *
                 * @param string $dienstjaren
                 *
                 * @return personeelslid
                 */
                public function setdienstjaren($dienstjaren)
                {
                    $this->dienstjaren = $dienstjaren;

                    return $this;
                }

                /**
                 * Get dienstjaren
                 *
                 * @return string
                 */
                public function getdienstjaren()
                {
                    return $this->dienstjaren;
    }
}
