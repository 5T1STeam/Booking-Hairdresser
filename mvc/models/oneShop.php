<?php

class oneShop {
    private $id;
    private $name;
    private $location;
    private $rate;
    private $comment;
    private $service;
    private $image;

    public function getId() { return $this->id; }
    public function getName() { return $this->name; }
    public function getLocation() { return $this->location;}
    public function getRate() { return $this->rate;}
    public function getComment() { return $this->comment;}
    public function getService() { return $this->service;}
    public function getImage() { return $this->image;}

    public function setId($id) { $this->id = $id;}
    public function setName($name) { $this->name = $name;}
    public function setLocation($location) { $this->location = $location;}
    public function setRate($rate) { $this->rate = $rate;}
    public function setComment($comment) { $this->comment = $comment;}
    public function setService($service) { $this->service = $service;}
    public function setImage($image) { $this->image = $image;}

    
    public function showShop(){
        $base = BASE_URL;
        if($this->service!=null){
            echo "  <div class='row mb-3'>
                        <div class='col-md-4 col-12'>
                        <a class='linkShoptoDetail' href='".$base."/detail/show/".$this->id."'>
                                <div class='item-list'>
                                    <img src='".$this->image."' alt='' class='img-fluid px-2'>
                                    <div class='ratingList'>
                                        <div class='ratingPointList'>".$this->rate."</div>
                                        <div class='reviewCountList'>".$this->comment."</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class='col-md-8 col-12 infoListz'>
                            <a class='nameShopList' href='".$base."/detail/show/".$this->id."'>".$this->name."</a>
                            <div class='locationList'>".$this->location."</div>
                            <div class='hr'></div>
                        <div>";             
        }
    }

    public function showService($serviceid,$servicename,$price){
                echo            "<div class='row mt-2'>
                                    <div class='col-md-8 col-5'>
                                        <div>".$servicename."</div>
                                    </div>
                                    <div class='col-md-2 col-4 float-right'>".number_format($price,0,'.','.') ." VNĐ</div>
                                    <div class='col-md-2 col-3 float-right'>
                                        <button type='submit' class=' btn-book' data-toggle='modal' data-target='#book-".$this->id."-".$serviceid."' >Book</button>
                                    </div>
                                </div>
                                <div class='hr'></div>";
    }
}
