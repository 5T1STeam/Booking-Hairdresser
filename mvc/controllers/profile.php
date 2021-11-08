<?php
class profile extends controller{
   function __construct()
   {
      $this->user = $this->model("detailShopModel");
      

   }
    function thongtintaikhoan($id){

        $this->view("profile",["page"=>"thongtintaikhoan", "GN"=>$this->user->GetNameUser($id)]);

     }
     function cuahangyeuthich($id){
        $fvrshop=$this->user->New($id);
        $this->view("profile",["page"=>"cuahangyeuthich","GN"=>$this->user->GetNameUser($id),                                                           
                                                         "Gf"=>  $fvrshop]);


     }
     function thongbaocuatoi($id){
        $this->view("profile",["page"=>"thongbaocuatoi","GN"=>$this->user->GetNameUser($id)]);

     }
     function danhgiacuatoi($id){
      $this->view("profile",["page"=>"danhgiacuatoi","GN"=>$this->user->GetNameUser($id),
                                                      "GG"=>$this->user->danhgia($id)]);

   }
     function chinhsachbaomat($id){
      $this->view("profile",["page"=>"chinhsachbaomat","GN"=>$this->user->GetNameUser($id)]);

   }
   function dieukhoandichvu($id){
      $this->view("profile",["page"=>"dieukhoandichvu","GN"=>$this->user->GetNameUser($id)]);

   }

  
   function magiamgia($id){
      $this->view("profile",["page"=>"magiamgia","GN"=>$this->user->GetNameUser($id)]);

   }
   function lichhen($id){
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
   
   

       

}
?>