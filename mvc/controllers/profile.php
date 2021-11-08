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
   function lichhen($id){
      $teo = $this->model("detailShopModel");
      
      $this->view("profile",["page"=>"lichhen","GN"=>$this->user->GetNameUser($id),
                                                "GB"=>$this->user->getBooking($id),
                                             "GS"=>$teo->GetService(),
                                         ]);
   }
   
   

       

}
?>