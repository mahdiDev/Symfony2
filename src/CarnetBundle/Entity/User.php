<?php

namespace CarnetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * User
 *
 * @ORM\Table(name="fos_user")
 * @ORM\Entity
 * 
 * 
 * (repositoryClass="CarnetBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255,nullable=true)
     */
    private $telephone;
    
    
    /**
     * @var ArrayCollection|Email[]
     *
     * @ORM\OneToMany(targetEntity="CarnetBundle\Entity\Contact", mappedBy="user", cascade={"persist","remove"})
     */
    private $contacts;

    public function __construct()
    {
        parent::__construct();
        parent::addRole("ROLE_ADMIN");
        
        
        $this->contacts = new ArrayCollection();
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
     * Set telephone
     *
     * @param string $telephone
     * @return User
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Add contacts
     *
     * @param \CarnetBundle\Entity\Contact $contacts
     * @return User
     */
    public function addContact(\CarnetBundle\Entity\Contact $contacts)
    {
        $this->contacts[] = $contacts;

        return $this;
    }

    /**
     * Remove contacts
     *
     * @param \CarnetBundle\Entity\Contact $contacts
     */
    public function removeContact(\CarnetBundle\Entity\Contact $contacts)
    {
        $this->contacts->removeElement($contacts);
    }

    /**
     * Get contacts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getContacts()
    {
        return $this->contacts;
    }
}
