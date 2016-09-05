<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Number
 *
 * @ORM\Table(name="number", indexes={@ORM\Index(name="fk_number_film1_idx", columns={"film_id"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NumberRepository")
 */
class Number
{
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var integer
     *
     * @ORM\Column(name="validation_title", type="integer", nullable=true)
     */
    private $validationTitle;

    /**
     * @var integer
     *
     * @ORM\Column(name="begin_tc", type="integer", nullable=true)
     */
    private $beginTc;

    /**
     * @var integer
     *
     * @ORM\Column(name="end_tc", type="integer", nullable=true)
     */
    private $endTc;

    /**
     * @var integer
     *
     * @ORM\Column(name="length", type="integer", nullable=true)
     */
    private $length;

    /**
     * @var string
     *
     * @ORM\Column(name="begin", type="string", length=255, nullable=true)
     */
    private $begin;

    /**
     * @var string
     *
     * @ORM\Column(name="ending", type="string", length=255, nullable=true)
     */
    private $ending;

    /**
     * @var integer
     *
     * @ORM\Column(name="validation_tc", type="integer", nullable=true)
     */
    private $validationTc;

    /**
     * @var integer
     *
     * @ORM\Column(name="structure_id", type="integer", nullable=true)
     */
    private $structureId;

    /**
     * @var integer
     *
     * @ORM\Column(name="validation_structure", type="integer", nullable=true)
     */
    private $validationStructure;

    /**
     * @var integer
     *
     * @ORM\Column(name="shots", type="integer", nullable=true)
     */
    private $shots;

    /**
     * @var integer
     *
     * @ORM\Column(name="validation_shots", type="integer", nullable=true)
     */
    private $validationShots;

    /**
     * @var string
     *
     * @ORM\Column(name="performance", type="string", length=255, nullable=true)
     */
    private $performance;

    /**
     * @var integer
     *
     * @ORM\Column(name="validation_performance", type="integer", nullable=true)
     */
    private $validationPerformance;

    /**
     * @var string
     *
     * @ORM\Column(name="spectators", type="string", length=255, nullable=true)
     */
    private $spectators;

    /**
     * @var string
     *
     * @ORM\Column(name="diegetic", type="string", length=45, nullable=true)
     */
    private $diegetic;

    /**
     * @var string
     *
     * @ORM\Column(name="musician", type="string", length=255, nullable=true)
     */
    private $musician;

    /**
     * @var integer
     *
     * @ORM\Column(name="integration_id", type="integer", nullable=true)
     */
    private $integrationId;

    /**
     * @var integer
     *
     * @ORM\Column(name="validation_backstage", type="integer", nullable=true)
     */
    private $validationBackstage;

    /**
     * @var string
     *
     * @ORM\Column(name="diegetic_place", type="string", length=255, nullable=true)
     */
    private $diegeticPlace;

    /**
     * @var string
     *
     * @ORM\Column(name="imaginary", type="string", length=500, nullable=true)
     */
    private $imaginary;

    /**
     * @var integer
     *
     * @ORM\Column(name="validation_theme", type="integer", nullable=true)
     */
    private $validationTheme;

    /**
     * @var integer
     *
     * @ORM\Column(name="validation_mood", type="integer", nullable=true)
     */
    private $validationMood;

    /**
     * @var integer
     *
     * @ORM\Column(name="validation_dance", type="integer", nullable=true)
     */
    private $validationDance;

    /**
     * @var string
     *
     * @ORM\Column(name="dubbing", type="string", length=500, nullable=true)
     */
    private $dubbing;

    /**
     * @var string
     *
     * @ORM\Column(name="tempo", type="string", length=255, nullable=true)
     */
    private $tempo;

    /**
     * @var string
     *
     * @ORM\Column(name="arranger_comment", type="string", length=500, nullable=true)
     */
    private $arrangerComment;

    /**
     * @var string
     *
     * @ORM\Column(name="lyrics", type="text", length=16777215, nullable=true)
     */
    private $lyrics;

    /**
     * @var integer
     *
     * @ORM\Column(name="validation_music", type="integer", nullable=true)
     */
    private $validationMusic;

    /**
     * @var integer
     *
     * @ORM\Column(name="validation_director", type="integer", nullable=true)
     */
    private $validationDirector;

    /**
     * @var integer
     *
     * @ORM\Column(name="cost", type="integer", nullable=true)
     */
    private $cost;

    /**
     * @var string
     *
     * @ORM\Column(name="cost_comment", type="text", length=65535, nullable=true)
     */
    private $costComment;

    /**
     * @var integer
     *
     * @ORM\Column(name="validation_cost", type="integer", nullable=true)
     */
    private $validationCost;

    /**
     * @var string
     *
     * @ORM\Column(name="source", type="string", length=45, nullable=true)
     */
    private $source;

    /**
     * @var integer
     *
     * @ORM\Column(name="validation_reference", type="integer", nullable=true)
     */
    private $validationReference;


    /**
     * @var integer
     *
     * @ORM\Column(name="number_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numberId;

    /**
     * @var \AppBundle\Entity\Film
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Film")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="film_id", referencedColumnName="film_id", nullable=false)
     * })
     */
    private $film;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Quotation", inversedBy="numberNumber")
     * @ORM\JoinTable(name="number_has_quotation",
     *   joinColumns={
     *     @ORM\JoinColumn(name="number_number_id", referencedColumnName="number_id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="quotation_id", referencedColumnName="quotation_id")
     *   }
     * )
     */
    private $quotation;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Song", inversedBy="number")
     * @ORM\JoinTable(name="number_has_song",
     *   joinColumns={
     *     @ORM\JoinColumn(name="number_id", referencedColumnName="number_id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="song_id", referencedColumnName="song_id")
     *   }
     * )
     */
    private $song;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Place", mappedBy="numberNumber")
     */
    private $place;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Stagenumber", inversedBy="number")
     * @ORM\JoinTable(name="stagenumber_has_number",
     *   joinColumns={
     *     @ORM\JoinColumn(name="number_id", referencedColumnName="number_id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="stageNumber_id", referencedColumnName="stageNumber_id")
     *   }
     * )
     */
    private $stagenumber;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Socialplace", inversedBy="number")
     * @ORM\JoinTable(name="socialplace_has_number",
     *   joinColumns={
     *     @ORM\JoinColumn(name="number_id", referencedColumnName="number_id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="socialplace_id", referencedColumnName="socialplace_id")
     *   }
     * )
     */
    private $socialplace;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Exoticism", inversedBy="numberNumber")
     * @ORM\JoinTable(name="number_has_exoticism",
     *   joinColumns={
     *     @ORM\JoinColumn(name="number_number_id", referencedColumnName="number_id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="exoticism_id", referencedColumnName="exoticism_id")
     *   }
     * )
     */
    private $exoticism;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Ensemble", mappedBy="number")
     */
    private $ensemble;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Completeness", mappedBy="number")
     */
    private $completeness;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Dancing", mappedBy="number")
     */
    private $dancing;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Integration", mappedBy="number")
     */
    private $integration;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Musical", mappedBy="number")
     */
    private $musical;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Effects", inversedBy="number")
     * @ORM\JoinTable(name="number_has_effects",
     *   joinColumns={
     *     @ORM\JoinColumn(name="number_id", referencedColumnName="number_id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="effects_id", referencedColumnName="effects_id")
     *   }
     * )
     */
    private $effects;


    /**
     * @var \AppBundle\Entity\Thesaurus
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Thesaurus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="begin_thesaurus", referencedColumnName="thesaurus_id")
     * })
     */
    private $beginThesaurus;

    /**
     * @var \AppBundle\Entity\Thesaurus
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Thesaurus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ending_thesaurus", referencedColumnName="thesaurus_id")
     * })
     */
    private $endingThesaurus;


    /** 
    * @ORM\Column(name="timestamp", type="datetime") 
    */
    private $timestamp;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->quotation = new \Doctrine\Common\Collections\ArrayCollection();
        $this->song = new \Doctrine\Common\Collections\ArrayCollection();
        $this->place = new \Doctrine\Common\Collections\ArrayCollection();
        $this->stagenumber = new \Doctrine\Common\Collections\ArrayCollection();
        $this->socialplace = new \Doctrine\Common\Collections\ArrayCollection();
        $this->exoticism = new \Doctrine\Common\Collections\ArrayCollection();
        $this->ensemble = new \Doctrine\Common\Collections\ArrayCollection();
        $this->completeness = new \Doctrine\Common\Collections\ArrayCollection();
        $this->dancing = new \Doctrine\Common\Collections\ArrayCollection();
        $this->integration = new \Doctrine\Common\Collections\ArrayCollection();
        $this->musical = new \Doctrine\Common\Collections\ArrayCollection();
        $this->effects = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set title
     *
     * @param string $title
     *
     * @return Number
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set validationTitle
     *
     * @param integer $validationTitle
     *
     * @return Number
     */
    public function setValidationTitle($validationTitle)
    {
        $this->validationTitle = $validationTitle;

        return $this;
    }

    /**
     * Get validationTitle
     *
     * @return integer
     */
    public function getValidationTitle()
    {
        return $this->validationTitle;
    }

    /**
     * Set beginTc
     *
     * @param integer $beginTc
     *
     * @return Number
     */
    public function setBeginTc($beginTc)
    {
        $this->beginTc = $beginTc;

        return $this;
    }

    /**
     * Get beginTc
     *
     * @return integer
     */
    public function getBeginTc()
    {
        return $this->beginTc;
    }

    /**
     * Set endTc
     *
     * @param integer $endTc
     *
     * @return Number
     */
    public function setEndTc($endTc)
    {
        $this->endTc = $endTc;

        return $this;
    }

    /**
     * Get endTc
     *
     * @return integer
     */
    public function getEndTc()
    {
        return $this->endTc;
    }

    /**
     * Set length
     *
     * @param integer $length
     *
     * @return Number
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Get length
     *
     * @return integer
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set begin
     *
     * @param string $begin
     *
     * @return Number
     */
    public function setBegin($begin)
    {
        $this->begin = $begin;

        return $this;
    }

    /**
     * Get begin
     *
     * @return string
     */
    public function getBegin()
    {
        return $this->begin;
    }

    /**
     * Set ending
     *
     * @param string $ending
     *
     * @return Number
     */
    public function setEnding($ending)
    {
        $this->ending = $ending;

        return $this;
    }

    /**
     * Get ending
     *
     * @return string
     */
    public function getEnding()
    {
        return $this->ending;
    }

    /**
     * Set validationTc
     *
     * @param integer $validationTc
     *
     * @return Number
     */
    public function setValidationTc($validationTc)
    {
        $this->validationTc = $validationTc;

        return $this;
    }

    /**
     * Get validationTc
     *
     * @return integer
     */
    public function getValidationTc()
    {
        return $this->validationTc;
    }

    /**
     * Set structureId
     *
     * @param integer $structureId
     *
     * @return Number
     */
    public function setStructureId($structureId)
    {
        $this->structureId = $structureId;

        return $this;
    }

    /**
     * Get structureId
     *
     * @return integer
     */
    public function getStructureId()
    {
        return $this->structureId;
    }

    /**
     * Set validationStructure
     *
     * @param integer $validationStructure
     *
     * @return Number
     */
    public function setValidationStructure($validationStructure)
    {
        $this->validationStructure = $validationStructure;

        return $this;
    }

    /**
     * Get validationStructure
     *
     * @return integer
     */
    public function getValidationStructure()
    {
        return $this->validationStructure;
    }

    /**
     * Set shots
     *
     * @param integer $shots
     *
     * @return Number
     */
    public function setShots($shots)
    {
        $this->shots = $shots;

        return $this;
    }

    /**
     * Get shots
     *
     * @return integer
     */
    public function getShots()
    {
        return $this->shots;
    }

    /**
     * Set validationShots
     *
     * @param integer $validationShots
     *
     * @return Number
     */
    public function setValidationShots($validationShots)
    {
        $this->validationShots = $validationShots;

        return $this;
    }

    /**
     * Get validationShots
     *
     * @return integer
     */
    public function getValidationShots()
    {
        return $this->validationShots;
    }

    /**
     * Set performance
     *
     * @param string $performance
     *
     * @return Number
     */
    public function setPerformance($performance)
    {
        $this->performance = $performance;

        return $this;
    }

    /**
     * Get performance
     *
     * @return string
     */
    public function getPerformance()
    {
        return $this->performance;
    }

    /**
     * Set validationPerformance
     *
     * @param integer $validationPerformance
     *
     * @return Number
     */
    public function setValidationPerformance($validationPerformance)
    {
        $this->validationPerformance = $validationPerformance;

        return $this;
    }

    /**
     * Get validationPerformance
     *
     * @return integer
     */
    public function getValidationPerformance()
    {
        return $this->validationPerformance;
    }

    /**
     * Set spectators
     *
     * @param string $spectators
     *
     * @return Number
     */
    public function setSpectators($spectators)
    {
        $this->spectators = $spectators;

        return $this;
    }

    /**
     * Get spectators
     *
     * @return string
     */
    public function getSpectators()
    {
        return $this->spectators;
    }

    /**
     * Set diegetic
     *
     * @param string $diegetic
     *
     * @return Number
     */
    public function setDiegetic($diegetic)
    {
        $this->diegetic = $diegetic;

        return $this;
    }

    /**
     * Get diegetic
     *
     * @return string
     */
    public function getDiegetic()
    {
        return $this->diegetic;
    }

    /**
     * Set musician
     *
     * @param string $musician
     *
     * @return Number
     */
    public function setMusician($musician)
    {
        $this->musician = $musician;

        return $this;
    }

    /**
     * Get musician
     *
     * @return string
     */
    public function getMusician()
    {
        return $this->musician;
    }

    /**
     * Set integrationId
     *
     * @param integer $integrationId
     *
     * @return Number
     */
    public function setIntegrationId($integrationId)
    {
        $this->integrationId = $integrationId;

        return $this;
    }

    /**
     * Get integrationId
     *
     * @return integer
     */
    public function getIntegrationId()
    {
        return $this->integrationId;
    }

    /**
     * Set validationBackstage
     *
     * @param integer $validationBackstage
     *
     * @return Number
     */
    public function setValidationBackstage($validationBackstage)
    {
        $this->validationBackstage = $validationBackstage;

        return $this;
    }

    /**
     * Get validationBackstage
     *
     * @return integer
     */
    public function getValidationBackstage()
    {
        return $this->validationBackstage;
    }

    /**
     * Set diegeticPlace
     *
     * @param string $diegeticPlace
     *
     * @return Number
     */
    public function setDiegeticPlace($diegeticPlace)
    {
        $this->diegeticPlace = $diegeticPlace;

        return $this;
    }

    /**
     * Get diegeticPlace
     *
     * @return string
     */
    public function getDiegeticPlace()
    {
        return $this->diegeticPlace;
    }

    /**
     * Set imaginary
     *
     * @param string $imaginary
     *
     * @return Number
     */
    public function setImaginary($imaginary)
    {
        $this->imaginary = $imaginary;

        return $this;
    }

    /**
     * Get imaginary
     *
     * @return string
     */
    public function getImaginary()
    {
        return $this->imaginary;
    }

    /**
     * Set validationTheme
     *
     * @param integer $validationTheme
     *
     * @return Number
     */
    public function setValidationTheme($validationTheme)
    {
        $this->validationTheme = $validationTheme;

        return $this;
    }

    /**
     * Get validationTheme
     *
     * @return integer
     */
    public function getValidationTheme()
    {
        return $this->validationTheme;
    }

    /**
     * Set validationMood
     *
     * @param integer $validationMood
     *
     * @return Number
     */
    public function setValidationMood($validationMood)
    {
        $this->validationMood = $validationMood;

        return $this;
    }

    /**
     * Get validationMood
     *
     * @return integer
     */
    public function getValidationMood()
    {
        return $this->validationMood;
    }

    /**
     * Set validationDance
     *
     * @param integer $validationDance
     *
     * @return Number
     */
    public function setValidationDance($validationDance)
    {
        $this->validationDance = $validationDance;

        return $this;
    }

    /**
     * Get validationDance
     *
     * @return integer
     */
    public function getValidationDance()
    {
        return $this->validationDance;
    }

    /**
     * Set dubbing
     *
     * @param string $dubbing
     *
     * @return Number
     */
    public function setDubbing($dubbing)
    {
        $this->dubbing = $dubbing;

        return $this;
    }

    /**
     * Get dubbing
     *
     * @return string
     */
    public function getDubbing()
    {
        return $this->dubbing;
    }

    /**
     * Set tempo
     *
     * @param string $tempo
     *
     * @return Number
     */
    public function setTempo($tempo)
    {
        $this->tempo = $tempo;

        return $this;
    }

    /**
     * Get tempo
     *
     * @return string
     */
    public function getTempo()
    {
        return $this->tempo;
    }

    /**
     * Set arrangerComment
     *
     * @param string $arrangerComment
     *
     * @return Number
     */
    public function setArrangerComment($arrangerComment)
    {
        $this->arrangerComment = $arrangerComment;

        return $this;
    }

    /**
     * Get arrangerComment
     *
     * @return string
     */
    public function getArrangerComment()
    {
        return $this->arrangerComment;
    }

    /**
     * Set lyrics
     *
     * @param string $lyrics
     *
     * @return Number
     */
    public function setLyrics($lyrics)
    {
        $this->lyrics = $lyrics;

        return $this;
    }

    /**
     * Get lyrics
     *
     * @return string
     */
    public function getLyrics()
    {
        return $this->lyrics;
    }

    /**
     * Set validationMusic
     *
     * @param integer $validationMusic
     *
     * @return Number
     */
    public function setValidationMusic($validationMusic)
    {
        $this->validationMusic = $validationMusic;

        return $this;
    }

    /**
     * Get validationMusic
     *
     * @return integer
     */
    public function getValidationMusic()
    {
        return $this->validationMusic;
    }

    /**
     * Set validationDirector
     *
     * @param integer $validationDirector
     *
     * @return Number
     */
    public function setValidationDirector($validationDirector)
    {
        $this->validationDirector = $validationDirector;

        return $this;
    }

    /**
     * Get validationDirector
     *
     * @return integer
     */
    public function getValidationDirector()
    {
        return $this->validationDirector;
    }

    /**
     * Set cost
     *
     * @param integer $cost
     *
     * @return Number
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return integer
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set costComment
     *
     * @param string $costComment
     *
     * @return Number
     */
    public function setCostComment($costComment)
    {
        $this->costComment = $costComment;

        return $this;
    }

    /**
     * Get costComment
     *
     * @return string
     */
    public function getCostComment()
    {
        return $this->costComment;
    }

    /**
     * Set validationCost
     *
     * @param integer $validationCost
     *
     * @return Number
     */
    public function setValidationCost($validationCost)
    {
        $this->validationCost = $validationCost;

        return $this;
    }

    /**
     * Get validationCost
     *
     * @return integer
     */
    public function getValidationCost()
    {
        return $this->validationCost;
    }

    /**
     * Set source
     *
     * @param string $source
     *
     * @return Number
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set validationReference
     *
     * @param integer $validationReference
     *
     * @return Number
     */
    public function setValidationReference($validationReference)
    {
        $this->validationReference = $validationReference;

        return $this;
    }

    /**
     * Get validationReference
     *
     * @return integer
     */
    public function getValidationReference()
    {
        return $this->validationReference;
    }

    /**
     * Get numberId
     *
     * @return integer
     */
    public function getNumberId()
    {
        return $this->numberId;
    }

    /**
     * Set film
     *
     * @param \AppBundle\Entity\Film $film
     *
     * @return Number
     */
    public function setFilm(\AppBundle\Entity\Film $film = null)
    {
        $this->film = $film;

        return $this;
    }

    /**
     * Get film
     *
     * @return \AppBundle\Entity\Film
     */
    public function getFilm()
    {
        return $this->film;
    }

    /**
     * Add quotation
     *
     * @param \AppBundle\Entity\Quotation $quotation
     *
     * @return Number
     */
    public function addQuotation(\AppBundle\Entity\Quotation $quotation)
    {
        $this->quotation[] = $quotation;

        return $this;
    }

    /**
     * Remove quotation
     *
     * @param \AppBundle\Entity\Quotation $quotation
     */
    public function removeQuotation(\AppBundle\Entity\Quotation $quotation)
    {
        $this->quotation->removeElement($quotation);
    }

    /**
     * Get quotation
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getQuotation()
    {
        return $this->quotation;
    }

    /**
     * Add song
     *
     * @param \AppBundle\Entity\Song $song
     *
     * @return Number
     */
    public function addSong(\AppBundle\Entity\Song $song)
    {
        $this->song[] = $song;

        return $this;
    }

    /**
     * Remove song
     *
     * @param \AppBundle\Entity\Song $song
     */
    public function removeSong(\AppBundle\Entity\Song $song)
    {
        $this->song->removeElement($song);
    }

    /**
     * Get song
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSong()
    {
        return $this->song;
    }

    /**
     * Add place
     *
     * @param \AppBundle\Entity\Place $place
     *
     * @return Number
     */
    public function addPlace(\AppBundle\Entity\Place $place)
    {
        $this->place[] = $place;

        return $this;
    }

    /**
     * Remove place
     *
     * @param \AppBundle\Entity\Place $place
     */
    public function removePlace(\AppBundle\Entity\Place $place)
    {
        $this->place->removeElement($place);
    }

    /**
     * Get place
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Add stagenumber
     *
     * @param \AppBundle\Entity\Stagenumber $stagenumber
     *
     * @return Number
     */
    public function addStagenumber(\AppBundle\Entity\Stagenumber $stagenumber)
    {
        $this->stagenumber[] = $stagenumber;

        return $this;
    }

    /**
     * Remove stagenumber
     *
     * @param \AppBundle\Entity\Stagenumber $stagenumber
     */
    public function removeStagenumber(\AppBundle\Entity\Stagenumber $stagenumber)
    {
        $this->stagenumber->removeElement($stagenumber);
    }

    /**
     * Get stagenumber
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStagenumber()
    {
        return $this->stagenumber;
    }

    /**
     * Add socialplace
     *
     * @param \AppBundle\Entity\Socialplace $socialplace
     *
     * @return Number
     */
    public function addSocialplace(\AppBundle\Entity\Socialplace $socialplace)
    {
        $this->socialplace[] = $socialplace;

        return $this;
    }

    /**
     * Remove socialplace
     *
     * @param \AppBundle\Entity\Socialplace $socialplace
     */
    public function removeSocialplace(\AppBundle\Entity\Socialplace $socialplace)
    {
        $this->socialplace->removeElement($socialplace);
    }

    /**
     * Get socialplace
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSocialplace()
    {
        return $this->socialplace;
    }

    /**
     * Add exoticism
     *
     * @param \AppBundle\Entity\Exoticism $exoticism
     *
     * @return Number
     */
    public function addExoticism(\AppBundle\Entity\Exoticism $exoticism)
    {
        $this->exoticism[] = $exoticism;

        return $this;
    }

    /**
     * Remove exoticism
     *
     * @param \AppBundle\Entity\Exoticism $exoticism
     */
    public function removeExoticism(\AppBundle\Entity\Exoticism $exoticism)
    {
        $this->exoticism->removeElement($exoticism);
    }

    /**
     * Get exoticism
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getExoticism()
    {
        return $this->exoticism;
    }

    /**
     * Add ensemble
     *
     * @param \AppBundle\Entity\Ensemble $ensemble
     *
     * @return Number
     */
    public function addEnsemble(\AppBundle\Entity\Ensemble $ensemble)
    {
        $this->ensemble[] = $ensemble;

        return $this;
    }

    /**
     * Remove ensemble
     *
     * @param \AppBundle\Entity\Ensemble $ensemble
     */
    public function removeEnsemble(\AppBundle\Entity\Ensemble $ensemble)
    {
        $this->ensemble->removeElement($ensemble);
    }

    /**
     * Get ensemble
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEnsemble()
    {
        return $this->ensemble;
    }

    /**
     * Add completeness
     *
     * @param \AppBundle\Entity\Completeness $completeness
     *
     * @return Number
     */
    public function addCompleteness(\AppBundle\Entity\Completeness $completeness)
    {
        $this->completeness[] = $completeness;

        return $this;
    }

    /**
     * Remove completeness
     *
     * @param \AppBundle\Entity\Completeness $completeness
     */
    public function removeCompleteness(\AppBundle\Entity\Completeness $completeness)
    {
        $this->completeness->removeElement($completeness);
    }

    /**
     * Get completeness
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCompleteness()
    {
        return $this->completeness;
    }

    /**
     * Add dancing
     *
     * @param \AppBundle\Entity\Dancing $dancing
     *
     * @return Number
     */
    public function addDancing(\AppBundle\Entity\Dancing $dancing)
    {
        $this->dancing[] = $dancing;

        return $this;
    }

    /**
     * Remove dancing
     *
     * @param \AppBundle\Entity\Dancing $dancing
     */
    public function removeDancing(\AppBundle\Entity\Dancing $dancing)
    {
        $this->dancing->removeElement($dancing);
    }

    /**
     * Get dancing
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDancing()
    {
        return $this->dancing;
    }

    /**
     * Add integration
     *
     * @param \AppBundle\Entity\Integration $integration
     *
     * @return Number
     */
    public function addIntegration(\AppBundle\Entity\Integration $integration)
    {
        $this->integration[] = $integration;

        return $this;
    }

    /**
     * Remove integration
     *
     * @param \AppBundle\Entity\Integration $integration
     */
    public function removeIntegration(\AppBundle\Entity\Integration $integration)
    {
        $this->integration->removeElement($integration);
    }

    /**
     * Get integration
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIntegration()
    {
        return $this->integration;
    }

    /**
     * Add musical
     *
     * @param \AppBundle\Entity\Musical $musical
     *
     * @return Number
     */
    public function addMusical(\AppBundle\Entity\Musical $musical)
    {
        $this->musical[] = $musical;

        return $this;
    }

    /**
     * Remove musical
     *
     * @param \AppBundle\Entity\Musical $musical
     */
    public function removeMusical(\AppBundle\Entity\Musical $musical)
    {
        $this->musical->removeElement($musical);
    }

    /**
     * Get musical
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMusical()
    {
        return $this->musical;
    }

    /**
     * Add effect
     *
     * @param \AppBundle\Entity\Effects $effect
     *
     * @return Number
     */
    public function addEffect(\AppBundle\Entity\Effects $effect)
    {
        $this->effects[] = $effect;

        return $this;
    }

    /**
     * Remove effect
     *
     * @param \AppBundle\Entity\Effects $effect
     */
    public function removeEffect(\AppBundle\Entity\Effects $effect)
    {
        $this->effects->removeElement($effect);
    }

    /**
     * Get effects
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEffects()
    {
        return $this->effects;
    }


    /**
     * Gets the value of timestamp.
     *
     * @return mixed
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Sets the value of timestamp.
     *
     * @param mixed $timestamp the timestamp
     *
     * @return self
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }


    /**
     * Gets the value of BeginThesaurus.
     *
     * @return \AppBundle\Entity\Thesaurus
     */
    public function getBeginThesaurus()
    {
        return $this->beginThesaurus;
    }

    /**
     * Sets the value of BeginThesaurus.
     *
     * @param \AppBundle\Entity\Thesaurus $beginThesaurus 
     *
     * @return self
     */
    public function setBeginThesaurus(\AppBundle\Entity\Thesaurus $beginThesaurus)
    {
        $this->beginThesaurus = $beginThesaurus;

        return $this;
    }

    /**
     * Gets the value of EndingThesaurus.
     *
     * @return \AppBundle\Entity\Thesaurus
     */
    public function getEndingThesaurus()
    {
        return $this->endingThesaurus;
    }

    /**
     * Sets the value of EndingThesaurus.
     *
     * @param \AppBundle\Entity\Thesaurus $endingThesaurus 
     *
     * @return self
     */
    public function setEndingThesaurus(\AppBundle\Entity\Thesaurus $endingThesaurus)
    {
        $this->endingThesaurus = $endingThesaurus;

        return $this;
    }

}