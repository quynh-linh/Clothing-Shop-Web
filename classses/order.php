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
        public function insertOder($userId){
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
                    $query_order= "INSERT INTO tbl_order(productId,size,price,image,quantity,thanhtien,userId, status) VALUES('$productId',
                    '$size','$price','$image','$quantity','$thanhtien','$userId','0')";
                    $insert_order=$this->db->insert($query_order);
                    
                }
            }
		}
        // hiển thị  sản phẩm ra trang lich su
        public function getOrderHistory($userId,$status){
            $query = "SELECT od.* , pd.productName 
            FROM tbl_order AS od
            INNER JOIN tbl_product AS pd ON od.productId =pd.productId
            WHERE userId='$userId' AND status='$status'";
            $result = $this->db->select($query);
            return $result;
         }
         // update status
         public function update_Status_Order($orderId,$status,$userId){
            $query= "UPDATE tbl_order SET status = '$status' WHERE orderId = '$orderId' AND userId='$userId'";
            $result = $this->db->update($query);
         }
         // tải data tbl_order lên trang admin
         public function admin_getOrder($status){
            $query = "SELECT DISTINCT username,name, od.userId
            FROM tbl_order AS od
            INNER JOIN tbl_uer AS us ON od.userId =us.userId
            WHERE od.status='$status'";
            $result = $this->db->select($query);
            return $result;
         }

         // hiển thị  sản phẩm ra trang admin
        public function admin_getOrder_waiting($userId,$status){
            $query = "SELECT od.* , pd.productName ,username,us.userId , name
            FROM tbl_order AS od
            INNER JOIN tbl_product AS pd ON od.productId =pd.productId
            INNER JOIN tbl_uer AS us ON od.userId =us.userId
            WHERE od.userId='$userId' AND status='$status'";
            $result = $this->db->select($query);
            return $result;
         }
    }
?>