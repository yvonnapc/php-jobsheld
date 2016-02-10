<?php
  class Job
  {
    private $title;
    private $description;
    private $length;

    function __construct($title, $description, $length)
    {
      $this->title = $title;
      $this->description = $description;
      $this->length = $length;
    }

    function setTitle($new_title)
    {
      $this->title = $new_title;
    }
    function setDescription($new_description)
    {
      $this->description = $new_description;
    }
    function setLength($new_length)
    {
      $this->length = $new_length;
    }

    function getTitle()
    {
      return $this->title;
    }
    function getDescription()
    {
      return $this->description;
    }
    function getLength()
    {
      return $this->length;
    }
    function save()
    {
      array_push($_SESSION['list_of_jobs'], $this);
    }
    static function getAll()
    {
      return $_SESSION['list_of_jobs'];
    }
  }
 ?>
