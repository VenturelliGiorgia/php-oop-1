<?php

class Movie
{
    private $originalTitle;
    private $itTitle;
    private $genre;
    private $yearRelease;

    function __construct($_originalTitle, $_itTitle, $_genre, $_yearRelease)
    {
        $this->setOriginalTitle($_originalTitle);
        $this->setItTitle($_itTitle);
        $this->setGenre($_genre);
        $this->setYearRelease($_yearRelease);
    }

    public function setOriginalTitle($originalTitle)
    {
        $this->originalTitle = $originalTitle;
        return $this;
    }
    public function getOriginalTitle()
    {
        return $this->originalTitle;
    }

    public function setItTitle($itTitle)
    {
        $this->itTitle = $itTitle;
        return $this;
    }
    public function getItTitle()
    {
        return $this->itTitle;
    }

    public function setGenre($genre)
    {
        $this->genre = $genre;
        return $this;
    }
    public function getGenre()
    {
        return $this->genre;
    }

    public function setYearRelease($yearRelease)
    {
        $this->yearRelease = $yearRelease;
        return $this;
    }
    public function getYearRelease()
    {
        return $this->yearRelease;
    }
    public function getName()
    {
        return $this->originalTitle . " - " . $this->itTitle;
    }
};
