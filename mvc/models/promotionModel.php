<?php
class promotionModel extends db{
    public function GetPromotion($id){
        $sql = "SELECT * FROM tbl_promotion";
        $qr = mysqli_query($this->con,$sql);
        $row = mysqli_fetch_array($qr,1);
        foreach($row as $item){
            if($row['TypePromotionId'] == 2){
                $row['Value'] = "Giảm ".$row['ValuePromotion'].".000 VNĐ ";
            }
            else{
                $row['Value'] = "Giảm ".$row['ValuePromotion']."% ";
            }
            if($row['MinInvoice'] == null){
                $row['Condition'] = "cho hóa đơn từ 0đ. ";
            }
            else{
                $row['Condition'] = "cho hóa đơn từ ".$row['MinInvoice'].".000 VNĐ. ";
            }
            if($row['MaxValuePromotion'] == null){
                $row['Max'] = "Không giới hạn giá trị khuyến mãi. ";
            }
            else{
                $row['Max'] = "Giảm tối đa ".$row['MaxValuePromotion'].".000 VNĐ, ";
            }
            switch ($row['PromotionRecipientId']){
                case 1: $row['Recipient'] = "Áp dụng cho tất cả khách hàng. "; break;
                case 2: $row['Recipient'] = "Áp dụng cho khách hàng hạng Kim cương. "; break;
                case 3: $row['Recipient'] = "Áp dụng cho khách hàng hạng vàng. "; break;
                case 4: $row['Recipient'] = "Áp dụng cho khách hàng hạng Bạc. "; break;
                case 5: $row['Recipient'] = "Áp dụng cho khách hàng hạng Đồng. "; break;
                case 6: $row['Recipient'] = "Áp dụng cho khách hàng là thành viên của cửa hàng trong chương trình khuyến mãi. "; break;
            }
        }
        
        return $row;
    }
}
?>