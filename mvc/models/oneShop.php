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

    // public function __construct($id,$name,$location,$rate,$comment,$service,$price,$image){
    //     $this->id = $id; $this->name = $name; $this->location = $location; $this->rate = $rate; $this->comment = $comment;$this->service = $service; $this->price = $price; $this->image = $image;
    // }

    public function showShop(){
        if($this->service!=null){
        echo "
            <div class='row mb-3'>
                <div class='col-md-4 col-12'>
                    <a class='linkShoptoDetail' href='/detailshop/".$this->id."'>
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
                    <a class='nameShopList' href='../detailshop/".$this->id."'>Hair Salon</a>
                    <div class='locationList'>".$this->location."</div>
                    <div class='hr'></div>
                    <div>
                        <div class='row mt-2'>
                            <div class='col-md-8 col-5'>
                                <div>".($this->service[0]['name'])."</div>
                            </div>
                            <div class='col-md-2 col-4 float-right'>".($this->service[0]['price'])."</div>
                            <div class='col-md-2 col-3 float-right'>
                                <button class=' btn-book' data-toggle='modal' data-target='#popup-book'>Book</button>
                            </div>
                        </div>
                        <div class='hr'></div>
                        <div class='row mt-2'>
                            <div class='col-md-8 col-5'>
                                <div>".($this->service[1]['name'])."</div>
                            </div>
                            <div class='col-md-2 col-4 float-right'>".($this->service[1]['price'])."</div>
                            <div class='col-md-2 col-3 float-right'><button class=' btn-book' data-toggle='modal' data-target='#popup-book'>Book</button></div>
                        </div>
                        <div class='hr'></div>
                        <div class='row mt-2'>
                            <div class='col-md-8 col-5'>
                                <div>".($this->service[2]['name'])."</div>
                            </div>
                            <div class='col-md-2 col-4 float-right'>".($this->service[2]['price'])."</div>
                            <div class='col-md-2 col-3 float-right'><button class=' btn-book'>Book</button></div>
                        </div>
                    </div>

                </div>

            </div>
            ";
        }
    }
}
