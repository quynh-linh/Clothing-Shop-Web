<?php
    $filepath = realpath(dirname(__FILE__));
    include_once($filepath.'/../lib/database.php');
    include_once($filepath.'/../helpers/format.php');
?>
<?php
    class order
    {
        private $db;
        private $fm;

        public function __construct()
        {
            $this->db = new Database();
            $this->fm = new Format();
        }
        /*chèn data vào bảng tbl_order*/
        public function insertOder($userId,$date){
			$sId = session_id();
			$query = "SELECT * FROM tbl_cart WHERE sessionId = '$sId' AND userId='$userId'";
			$getProduct = $this->db->select($query);
			if($getProduct){
                while($result= $getProduct->fetch_assoc()){
                    $productId = $result['productId'];
                    $size=$result['size'];
                    $price = $result['price'];
                    $image = $result['image'];
                    $quantity = $result['quantity'];
                    $thanhtien= $result['quantity'] * $result['price'];
                    $order_time = $date;
                    $query_order= "INSERT INTO tbl_order(productId,size,price,image,quantity,thanhtien,userId, status,order_time,recieve_time) VALUES('$productId',
                    '$size','$price','$image','$quantity','$thanhtien','$userId','0','$order_time','0')";
                    $insert_order=$this->db->insert($query_order);
                    
                }
            }
		}
        // hiển thị  sản phẩm ra trang lich su
        public function getOrderHistory($userId,$status,$date){
            $query = "SELECT od.* , pd.productName 
            FROM tbl_order AS od
            INNER JOIN tbl_product AS pd ON od.productId =pd.productId
            WHERE userId='$userId' AND status IN $status AND od.order_time='$date'";
            $result = $this->db->select($query);
            return $result;
         }
         // update status
         public function update_Status_Order($orderId,$status,$userId){
            $query= "UPDATE tbl_order SET status = '$status' WHERE orderId IN $orderId AND userId='$userId'";
            $result = $this->db->update($query);
         }
         public function recieve_Order($orderId,$status,$userId,$date_current){
            $query= "UPDATE tbl_order SET status = '$status', recieve_time = '$date_current' WHERE orderId IN $orderId AND userId='$userId'";
            $result = $this->db->update($query);
         }
         // tải data tbl_order lên trang admin
         public function admin_getOrder($status){
            $query = "SELECT DISTINCT username,name, od.userId
            FROM tbl_order AS od
            INNER JOIN tbl_uer AS us ON od.userId =us.userId
            WHERE od.status IN $status";
            $result = $this->db->select($query);
            return $result;
         }

         // hiển thị  sản phẩm ra trang admin
        public function admin_getOrder_waiting($userId,$status,$date){
            $query = "SELECT od.* , pd.productName ,username,us.userId , name,us.diaChi,us.name,pd.brandId,pd.typeProductId
            FROM tbl_order AS od
            INNER JOIN tbl_product AS pd ON od.productId =pd.productId
            INNER JOIN tbl_uer AS us ON od.userId =us.userId
            WHERE od.userId='$userId' AND status IN $status AND od.order_time='$date'";
            $result = $this->db->select($query);
            return $result;
         }

         public function order_date($userId,$status){
            $query = "SELECT od.order_time ,od.recieve_time
            FROM tbl_order AS od
            INNER JOIN tbl_product AS pd ON od.productId =pd.productId
            INNER JOIN tbl_uer AS us ON od.userId =us.userId
            WHERE od.userId='$userId' AND status IN $status
            GROUP BY od.order_time ";
            $result = $this->db->select($query);
            return $result;
         }

         // update số lượng khi admin xác nhận đơn hàng
         public function admin_confirm_order($orderId, $userId,$type){

            if($type==1){
                $sql = "SELECT productId , quantity
                FROM tbl_order 
                WHERE userId='$userId' AND status='1' AND orderId = '$orderId'";
                $result_SQL = $this->db->select($sql);

                if($result_SQL)
                    while($product= $result_SQL->fetch_assoc()){
                        $productId=$product['productId'];
                        $quantity = $product['quantity'];
                        $query= "UPDATE tbl_product SET quantity = quantity -'$quantity'   WHERE productId = '$productId'";
                        $result = $this->db->update($query);
                    }
                }else{
                    $sql = "SELECT productId , quantity
                    FROM tbl_order 
                    WHERE userId='$userId' AND status='4' AND orderId = '$orderId'";
                    $result_SQL = $this->db->select($sql);

                    if($result_SQL)
                        while($product= $result_SQL->fetch_assoc()){
                            $productId=$product['productId'];
                            $quantity = $product['quantity'];
                            echo $productId;
                            $query= "UPDATE tbl_product SET quantity = quantity +'$quantity'   WHERE productId = '$productId'";
                            $result = $this->db->update($query);
                        }
                }
            
         }
    }
?>