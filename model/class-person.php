<?php

class Person
{
    private $id = 0;
    private $name;
    private $position;
    private $info;
    private $linkInstagram;
    private $linkFacebook;
    private $linkEmail;
    private $image;

    public function __construct($name, $position, $info, $linkInstagram, $linkFacebook, $linkEmail, $image)
    {
        $this->name = $name;
        $this->position = $position;
        $this->info = $info;
        $this->linkInstagram = $linkInstagram;
        $this->linkFacebook = $linkFacebook;
        $this->linkEmail = $linkEmail;
        $this->image = $image;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function setPosition($position)
    {
        $this->position = $position;
    }
    
    public function getInfo()
    {
        return $this->info;
    }
    
    public function setInfo($info)
    {
        $this->info = $info;
    }
    
    public function getLinkInstagram()
    {
        return $this->linkInstagram;
    }
    
    public function setLinkInstagram($linkInstagram)
    {
        $this->linkInstagram = $linkInstagram;
    }
    
    public function getLinkFacebook()
    {
        return $this->linkFacebook;
    }
    
    public function setLinkFacebook($linkFacebook)
    {
        $this->linkFacebook = $linkFacebook;
    }
    
    public function getLinkEmail()
    {
        return $this->linkEmail;
    }
    
    public function setLinkEmail($linkEmail)
    {
        $this->linkEmail = $linkEmail;
    }
    
    public function getImage()
    {
        return $this->image;
    }
    
    public function setImage($image)
    {
        $this->image = $image;
    }
    

}