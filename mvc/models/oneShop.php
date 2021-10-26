<?php
class oneShop {
    private $name;
    private $location;
    private $rate;
    private $comment;
    private $service;
    private $price;

    public function getName() { return $this->name; }
    public function getLocation() { return $this->location;}
    public function getRate() { return $this->rate;}
    public function getComment() { return $this->comment;}
    public function getService() { return $this->service;}
    public function getPrice() { return $this->price;}

    public function __construct($name,$location,$rate,$comment,$service,$price){
        $this->name = $name; $this->location = $location; $this->rate = $rate; $this->comment = $comment; $this->service = $service; $this->price = $price;
    }


}?>