<?php
class profile extends controller{
   function __construct()
   {
      $this->user = $this->model("detailShopModel");  
   }
    function thongtintaikhoan(){
      $id = $_SESSION['Id'];
      $teo = $this->model("userModel");
      $teo->updateInfo($id);
      
        $this->view("profile",["page"=>"thongtintaikhoan", "GN"=>$this->user->GetNameUser($id)]);
         
     }
     function cuahangyeuthich(){
      $id = $_SESSION['Id'];
        $fvrshop=$this->user->New($id);
        $this->view("profile",["page"=>"cuahangyeuthich","GN"=>$this->user->GetNameUser($id),                                                           
                                                         "Gf"=>  $fvrshop]);


     }
     function thongbaocuatoi(){
      $id = $_SESSION['Id'];
        $this->view("profile",["page"=>"thongbaocuatoi","GN"=>$this->user->GetNameUser($id)]);

     }
     function danhgiacuatoi(){
      $id = $_SESSION['Id'];
      $this->view("profile",["page"=>"danhgiacuatoi","GN"=>$this->user->GetNameUser($id),
                                                      "GG"=>$this->user->danhgia($id)]);

   }
     function chinhsachbaomat(){
      $id = $_SESSION['Id'];
      $this->view("profile",["page"=>"chinhsachbaomat","GN"=>$this->user->GetNameUser($id)]);

   }
   function dieukhoandichvu(){
      $id = $_SESSION['Id'];
      $this->view("profile",["page"=>"dieukhoandichvu","GN"=>$this->user->GetNameUser($id)]);

   }

  
   function magiamgia(){
      $id = $_SESSION['Id'];
      $this->view("profile",["page"=>"magiamgia","GN"=>$this->user->GetNameUser($id),
                                                "DO"=>$this->user->magiamrankdong(),
                                                "BA"=>$this->user->magiamrankbac(),
                                                "VA"=>$this->user->magiamrankvang(),
                                                "KC"=>$this->user->magiamrankkc(),
                                                "ALL"=>$this->user->magiamall()]);

   }
   function hoivien(){
      $id = $_SESSION['Id'];
      $this->view("profile",["page"=>"hoivien","GN"=>$this->user->GetNameUser($id),
                                                "MM"=>$this->user->mem($id)]);

   }
   function lichhen(){
      $id = $_SESSION['Id'];
      $teo = $this->model("userModel");
      $teo->deleteLich($id);
      $teo = $this->model("detailShopModel");
      $lichhen =$teo->getBooking($id);
      $arr=array();
      foreach($lichhen as $item){
         $shop =$teo->GetNameUser($item['ShopId']);
         $item['ShopName']=$shop['Name'] ;
         
         $item['Adress']=$shop['FullAdress'] . " , " .$shop['Ward'] . " , " .$shop['District']." , " .$shop['Province']  ;
         $item['Adress']=$teo->convert_name( $item['Adress']);
         $item['Adress']=  str_replace(" ","%20",$item['Adress']); 
         array_push($arr,$item);
      }
      

      $this->view("profile",["page"=>"lichhen","GN"=>$this->user->GetNameUser($id),
                                                "GB"=>$arr,
                                                

                                                                                 
                                         ]);
   }
   
   function lichsu(){
      $id = $_SESSION['Id'];
      $teo = $this->model("detailShopModel");
      $lichhen =$teo->getBookingHistory($id);
      $arr=array();
      foreach($lichhen as $item){
         $shop =$teo->GetNameUser($item['ShopId']);
         $item['ShopName']=$shop['Name'] ;
         $item['ShopImg']=$shop['Avatar'] ;
         $item['Adress']=$shop['FullAdress'] . " , " .$shop['Ward'] . " , " .$shop['District']." , " .$shop['Province']  ;
         array_push($arr,$item);
      }
      $this->view("profile",["page"=>"lichsu","GN"=>$this->user->GetNameUser($id),"booked"=>$arr]);
   }

   

       

}
?>