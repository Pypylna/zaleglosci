<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Series
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Series
{
    //Nie uzywam const, bo nie dziala z tablica
    private static $skrotGatunku = array(
        "kryminal",
        "horror",
        "dramat",
        "komedia",
        "romans",
        "dla dzieci"
    );
    
    
    
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
     * @ORM\Column(name="tytul", type="string", length=255)
     */
    private $tytul;

    /**
     * @var string
     *
     * @ORM\Column(name="opis", type="string", length=1000)
     */
    private $opis;

    /**
     * @var integer
     *
     * @ORM\Column(name="gatunek", type="integer")
     */
    private $gatunek;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=255)
     */
    private $link;

    /**
     * @var float
     *
     * @ORM\Column(name="ocena", type="float")
     */
    private $ocena;


    
    public function getSkrotGatunku($i)
    {
        return self::$skrotGatunku[$i];
    }


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
     * Set tytul
     *
     * @param string $tytul
     * @return Series
     */
    public function setTytul($tytul)
    {
        $this->tytul = $tytul;

        return $this;
    }

    /**
     * Get tytul
     *
     * @return string 
     */
    public function getTytul()
    {
        return $this->tytul;
    }

    /**
     * Set opis
     *
     * @param string $opis
     * @return Series
     */
    public function setOpis($opis)
    {
        $this->opis = $opis;

        return $this;
    }

    /**
     * Get opis
     *
     * @return string 
     */
    public function getOpis()
    {
        return $this->opis;
    }

    /**
     * Set gatunek
     *
     * @param integer $gatunek
     * @return Series
     */
    public function setGatunek($gatunek)
    {
        $this->gatunek = $gatunek;

        return $this;
    }

    /**
     * Get gatunek
     *
     * @return integer 
     */
    public function getGatunek()
    {
        return $this->gatunek;
    }

    /**
     * Set link
     *
     * @param string $link
     * @return Series
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set ocena
     *
     * @param float $ocena
     * @return Series
     */
    public function setOcena($ocena)
    {
        $this->ocena = $ocena;

        return $this;
    }

    /**
     * Get ocena
     *
     * @return float 
     */
    public function getOcena()
    {
        return $this->ocena;
    }
}
