<?php
namespace application\libraries\SEO;

class SEO 
{    
    /**
     * title
     *
     * @var string
     */
    private $title;    
    /**
     * robots
     *
     * @var string
     */
    private $robots;    
    /**
     * googlebot
     *
     * @var string
     */
    private $googlebot;    
    /**
     * description
     *
     * @var string
     */
    private $description;    
    /**
     * keywords
     *
     * @var string
     */
    private $keywords;    
    /**
     * author
     *
     * @var string
     */
    private $author;
    
    /**
     * getTitle
     *
     * @return void
     */
    public function getTitle() 
    {
        return $this->title;
    }
    
    /**
     * setTitle
     *
     * @param  string $title
     * @return void
     */
    public function setTitle($title) 
    {
        $this->title = $title;

        return $this;
    }
    
    /**
     * getRobots
     *
     * @return void
     */
    public function getRobots() 
    {
        return $this->robots;
    }
    
    /**
     * setRobots
     *
     * @param  string $robots
     * @return void
     */
    public function setRobots($robots) 
    {
        $this->robots = $robots;

        return $this;
    }
    
    /**
     * getGooglebot
     *
     * @return void
     */
    public function getGooglebot() 
    {
        return $this->googlebot;
    }
    
    /**
     * setGooglebot
     *
     * @param  string $googlebot
     * @return void
     */
    public function setGooglebot($googlebot) 
    {
        $this->googlebot = $googlebot;

        return $this;
    }
    
    /**
     * getDescription
     *
     * @return void
     */
    public function getDescription() 
    {
        return $this->description;
    }
    
    /**
     * setDescription
     *
     * @param  string $description
     * @return void
     */
    public function setDescription($description) 
    {
        $this->description = $description;

        return $this;
    }
    
    /**
     * getKeywords
     *
     * @return void
     */
    public function getKeywords() 
    {
        return $this->keywords;
    }
    
    /**
     * setKeywords
     *
     * @param  string $keywords
     * @return void
     */
    public function setKeywords($keywords) 
    {
        $this->keywords = $keywords;

        return $this;
    }
    
    /**
     * getAuthor
     *
     * @return void
     */
    public function getAuthor() 
    {
        return $this->author;
    }
    
    /**
     * setAuthor
     *
     * @param  string $author
     * @return void
     */
    public function setAuthor($author) 
    {
        $this->author = $author;

        return $this;
    }
}
?>
