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
        $this->view("profile",["page"=>"cuahangyeuthich","GN"=>$this->user->GetNameUser($id),
                                                         "GE"=> $this->user->GE($id),
                                                         "GU"=> $this->user->Getuser(),
                                                         "Gf"=> $this->user->GET($id)]);

     }
     function thongbaocuatoi($id){
        $this->view("profile",["page"=>"thongbaocuatoi","GN"=>$this->user->GetNameUser($id)]);

     }
     function chinhsachbaomat($id){
      $this->view("profile",["page"=>"chinhsachbaomat","GN"=>$this->user->GetNameUser($id)]);

   }
   function dieukhoandichvu($id){
      $this->view("profile",["page"=>"dieukhoandichvu","GN"=>$this->user->GetNameUser($id)]);

   }
   

       

}
?>