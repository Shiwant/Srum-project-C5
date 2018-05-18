<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Goederenontvangst
 *
 * @ORM\Table(name="goederenontvangst")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GoederenontvangstRepository")
 */
class Goederenontvangst
{
  /**
 * @ORM\Column(type="integer")
 * @ORM\Id
 * @ORM\GeneratedValue(strategy="AUTO")
 */
    private $artikelNr;

    /**
     * @var string
     *
     * @ORM\Column(name="NaamLeverancier", type="string", length=50)
     */
    private $naamLeverancier;

    /**
     * @var string
     *
     * @ORM\Column(name="Omschrijving", type="text", nullable=true)
     */
    private $omschrijving;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Datum", type="date")
     */
    private $datum;

    /**
     * @var string
     *
     * @ORM\Column(name="Kwaliteit", type="string", length=50, nullable=true)
     */
    private $kwaliteit;

    /**
     * Set artikelNr
     *
     * @param integer $artikelNr
     *
     * @return Goederenontvangst
     */
    public function setArtikelNr($artikelNr)
    {
        $this->artikelNr = $artikelNr;

        return $this;
    }

    /**
     * Get artikelNr
     *
     * @return int
     */
    public function getArtikelNr()
    {
        return $this->artikelNr;
    }

    /**
     * Set naamLeverancier
     *
     * @param string $naamLeverancier
     *
     * @return Goederenontvangst
     */
    public function setNaamLeverancier($naamLeverancier)
    {
        $this->naamLeverancier = $naamLeverancier;

        return $this;
    }

    /**
     * Get naamLeverancier
     *
     * @return string
     */
    public function getNaamLeverancier()
    {
        return $this->naamLeverancier;
    }

    /**
     * Set omschrijving
     *
     * @param string $omschrijving
     *
     * @return Goederenontvangst
     */
    public function setOmschrijving($omschrijving)
    {
        $this->omschrijving = $omschrijving;

        return $this;
    }

    /**
     * Get omschrijving
     *
     * @return string
     */
    public function getOmschrijving()
    {
        return $this->omschrijving;
    }

    /**
     * Set datum
     *
     * @param \DateTime $datum
     *
     * @return Goederenontvangst
     */
    public function setDatum($datum)
    {
        $this->datum = $datum;

        return $this;
    }

    /**
     * Get datum
     *
     * @return \DateTime
     */
    public function getDatum()
    {
        return $this->datum;
    }

    /**
     * Set kwaliteit
     *
     * @param string $kwaliteit
     *
     * @return Goederenontvangst
     */
    public function setKwaliteit($kwaliteit)
    {
        $this->kwaliteit = $kwaliteit;

        return $this;
    }

    /**
     * Get kwaliteit
     *
     * @return string
     */
    public function getKwaliteit()
    {
        return $this->kwaliteit;
    }
}
