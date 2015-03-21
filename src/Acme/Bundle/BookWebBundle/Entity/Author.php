<?php

namespace Acme\Bundle\BookWebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Author
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Author
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
     * @ORM\Column(name="firstName", type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=255)
     */
    private $lastName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthday", type="date")
     */
    private $birthday;

    /**
     * @var string
     *
     * @ORM\Column(name="knownNicknames", type="string", length=255)
     */
    private $knownNicknames;

    /**
     * @var string
     *
     * @ORM\Column(name="books", type="string", length=255)
     */
    private $books;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isDead", type="boolean")
     */
    private $isDead;


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
     * Set firstName
     *
     * @param string $firstName
     * @return Author
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Author
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     * @return Author
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime 
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set knownNicknames
     *
     * @param string $knownNicknames
     * @return Author
     */
    public function setKnownNicknames($knownNicknames)
    {
        $this->knownNicknames = $knownNicknames;

        return $this;
    }

    /**
     * Get knownNicknames
     *
     * @return string 
     */
    public function getKnownNicknames()
    {
        return $this->knownNicknames;
    }

    /**
     * Set books
     *
     * @param string $books
     * @return Author
     */
    public function setBooks($books)
    {
        $this->books = $books;

        return $this;
    }

    /**
     * Get books
     *
     * @return string 
     */
    public function getBooks()
    {
        return $this->books;
    }

    /**
     * Set isDead
     *
     * @param boolean $isDead
     * @return Author
     */
    public function setIsDead($isDead)
    {
        $this->isDead = $isDead;

        return $this;
    }

    /**
     * Get isDead
     *
     * @return boolean 
     */
    public function getIsDead()
    {
        return $this->isDead;
    }
}
