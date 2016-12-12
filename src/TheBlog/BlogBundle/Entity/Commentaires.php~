<?php

namespace TheBlog\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaires
 *
 * @ORM\Table(name="commentaires")
 * @ORM\Entity(repositoryClass="TheBlog\BlogBundle\Repository\CommentairesRepository")
 */
class Commentaires
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=255)
     */
    private $auteur;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;

    /**
     * @var string
     * @ORM\Column(name="emailauteur", type="string", length=255)
     */
    private $emailauteur;

    /**
     * @var string
     * @ORM\Column(name="siteauteur", type="string", length=255)
     */
    private $siteauteur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="TheBlog\BlogBundle\Entity\Article", inversedBy="commentaires")
     * @ORM\JoinColumn(nullable=true)
     */

    private $article;

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
     * Set auteur
     *
     * @param string $auteur
     * @return Commentaires
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return string 
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Commentaires
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Commentaires
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set article
     *
     * @param \TheBlog\BlogBundle\Entity\Article $article
     * @return Commentaires
     */
    public function setArticle(\TheBlog\BlogBundle\Entity\Article $article)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return \TheBlog\BlogBundle\Entity\Article 
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * Set emailauteur
     *
     * @param string $emailauteur
     * @return Commentaires
     */
    public function setEmailauteur($emailauteur)
    {
        $this->emailauteur = $emailauteur;

        return $this;
    }

    /**
     * Get emailauteur
     *
     * @return string 
     */
    public function getEmailauteur()
    {
        return $this->emailauteur;
    }

    /**
     * Set siteauteur
     *
     * @param string $siteauteur
     * @return Commentaires
     */
    public function setSiteauteur($siteauteur)
    {
        $this->siteauteur = $siteauteur;

        return $this;
    }

    /**
     * Get siteauteur
     *
     * @return string 
     */
    public function getSiteauteur()
    {
        return $this->siteauteur;
    }
}
