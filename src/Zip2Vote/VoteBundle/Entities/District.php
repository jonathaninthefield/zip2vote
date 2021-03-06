<?php
namespace Zip2Vote\VoteBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * District
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Zip2Vote\VoteBundle\Entity\DistrictRepository")
 */
class District 
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
     * @ORM\OneToOne(targetEntity="ValueObject\Legislator")
     */
    private $stateRepresentative;
    
    /**
     * @var string
     * @ORM\Column(nullable=false)
     */
    private $name;
    
    /**
     * @var string
     * @ORM\Column(nullable=false)
     */
    private $mapCoordinates;

    /**
     * Get stateRepresentative
     * @return string
     */
    public function getStateRepresentative()
    {
        return $this->stateRepresentative;
    }

    /**
     * Set stateRepresentative
     * @param string $stateRepresentative
     * @return District
     */
    public function setStateRepresentative($stateRepresentative)
    {
        $this->stateRepresentative = (string)$stateRepresentative;
        return $this;
    }

    /**
     * Get name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name
     * @param string $name
     * @return District
     */
    public function setName($name)
    {
        $this->name = (string)$name;
        return $this;
    }

    
    /**
     * Get mapCoordinates
     * @return string
     */
    public function getMapCoordinates()
    {
        return $this->mapCoordinates;
    }

    /**
     * Set mapCoordinates
     * @param string $mapCoordinates
     * @return District
     */
    public function setMapCoordinates($mapCoordinates)
    {
        $this->mapCoordinates = (string)$mapCoordinates;
        return $this;
    }
}
