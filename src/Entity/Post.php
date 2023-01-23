<?php
// src/Entity/Post.php
namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\PostRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]

class Post
{
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private int $Id;

    #[ORM\column(type: "datetime")]
    private \DateTime $Date;
    
    #[ORM\Column(length: 255)]
    private string $Subject;

    #[ORM\Column(type: "text")]
    private string $Text;

    public function getId()
    {
        return $this->Id;
    }
    
    public function getDate()
    {
        return $this->Date;
    }
    public function setDate($Date)
    {
        $this->Date = $Date;
    }

    public function getSubject()
    {
        return $this->Subject;
    }
    public function setSubject($Subject)
    {
        $this->Subject = $Subject;
    }

    public function getText()
    {
        return $this->Text;
    }
    public function setText($Text)
    {
        $this->Text = $Text;
    }
}