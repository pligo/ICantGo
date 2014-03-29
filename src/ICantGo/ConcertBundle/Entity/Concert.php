<?php

namespace ICantGo\ConcertBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Concert
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ICantGo\ConcertBundle\Entity\ConcertRepository")
 */
class Concert
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
     * @var integer
     *
     * @ORM\Column(name="idStage", type="integer", nullable=true)
     */
    private $idStage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_concert", type="datetime", nullable=true)
     */
    private $dateConcert;

    /**
     * @var string
     *
     * @ORM\Column(name="artist", type="string", length=255, nullable=true)
     */
    private $artist;

    /**
     * @var \Time
     *
     * @ORM\Column(name="h_begin", type="datetime", nullable=true)
     */
    private $hBegin;

    /**
     * @var \Time
     *
     * @ORM\Column(name="h_ending", type="datetime", nullable=true)
     */
    private $hEnding;


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
     * Set idStage
     *
     * @param integer $idStage
     * @return Concert
     */
    public function setIdStage($idStage)
    {
        $this->idStage = $idStage;

        return $this;
    }

    /**
     * Get idStage
     *
     * @return integer 
     */
    public function getIdStage()
    {
        return $this->idStage;
    }

    /**
     * Set dateConcert
     *
     * @param \DateTime $dateConcert
     * @return Concert
     */
    public function setDateConcert($dateConcert)
    {
        $this->dateConcert = $dateConcert;

        return $this;
    }

    /**
     * Get dateConcert
     *
     * @return \DateTime 
     */
    public function getDateConcert()
    {
        return $this->dateConcert;
    }

    /**
     * Set artist
     *
     * @param string $artist
     * @return Concert
     */
    public function setArtist($artist)
    {
        $this->artist = $artist;

        return $this;
    }

    /**
     * Get artist
     *
     * @return string 
     */
    public function getArtist()
    {
        return $this->artist;
    }

    /**
     * Set hBegin
     *
     * @param \Time $hBegin
     * @return Concert
     */
    public function setHBegin($hBegin)
    {
        $this->hBegin = $hBegin;

        return $this;
    }

    /**
     * Get hBegin
     *
     * @return \Time 
     */
    public function getHBegin()
    {
        return $this->hBegin;
    }

    /**
     * Set hEnding
     *
     * @param \Time $hEnding
     * @return Concert
     */
    public function setHEnding($hEnding)
    {
        $this->hEnding = $hEnding;

        return $this;
    }

    /**
     * Get hEnding
     *
     * @return \Time 
     */
    public function getHEnding()
    {
        return $this->hEnding;
    }
}
