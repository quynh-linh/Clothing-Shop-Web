<?php
    $filepath = realpath(dirname(__FILE__));
    include_once($filepath.'/../lib/database.php');
    include_once($filepath.'/../helpers/format.php');
?>
<?php
    class cart 
    {
        private $db;
        private $fm;

        public function __construct()
        {
            $this->db = new Database();
            $this->fm = new Format();
        }
        // thêm sản phẩm vào giỏ hàng
        public function addProduct_cart($id,$quantity,$size)
        {
            // kiểm tra xem có chứa từ nào có hợp lệ hay không
            $quantity = $this->fm->validation($quantity);
            $quantity = mysqli_real_escape_string($this->db->link, $quantity);
            $id = mysqli_real_escape_string($this->db->link,$id);
            $sesId = session_id();
            $query = "SELECT * FROM  tbl_product WHERE productId = '$id'";
            $result =  $this->db->select($query)->fetch_assoc();

            // kiểm tra sản phẩm đã tồn tại trong giỏ hàng hay chưa
            $check_cart = "SELECT * FROM tbl_cart WHERE productId = $id AND sessionId ='$sesId'";
			$result_check_cart = $this->db->select($check_cart);
            if($result_check_cart){
				$msg = "<span class='error'>Sản phẩm đã được thêm vào</span>";
				return $msg;
			} else {
                $SPName = $result['productName'];
                $SPPrice = $result['price'];
                $image = $result['image'];
                $size=$size;
                $query_insert = "INSERT INTO tbl_cart(productId,sessionId,productName,size,price,quantity,image) VALUES('$id',
                '$sesId','$SPName','$size','$SPPrice','$quantity','$image')";
                $result_insert = $this->db->insert($query_insert);
                if ($result_insert) {
                    header('Location:giohang.php');
                } else {
                    $alert = "<span class='error'> Thêm không thành công  </span>"; 
                    return $alert;
                }
            }
        }
        // hiển thị  sản phẩm trong giỏ hàng
        public function getProductCart(){
            $sesId = session_id();
            $query = "SELECT * FROM tbl_cart AS cart
            INNER JOIN tbl_product AS pd ON cart.productId=pd.productId  
            WHERE sessionId = '$sesId'";
            $result = $this->db->select($query);
            return $result;
        } 
        /* Update quantity in cart*/
		public function updateQuantity($cartId, $quantity){
			$quantity = mysqli_real_escape_string($this->db->link, $quantity);
			$id = mysqli_real_escape_string($this->db->link, $cartId);

			$query = "UPDATE tbl_cart SET quantity = '$quantity' WHERE cartID = '$id'";
			$result = $this->db->update($query);
			if($result) {
				$msg = "Cập nhập số lượng sản phẩm thành công";
                return $msg;
			} else {
				$msg = "<span class='error'>Cập nhật không thành công</span>";
				return $msg;
			}
		}
        /*update quantity va size neu san pham da co trong gio hang */
		public function updateQuantityandSize($size, $quantity, $idProduct){
			$quantity = mysqli_real_escape_string($this->db->link, $quantity);
			$size = mysqli_real_escape_string($this->db->link, $size);
			$id = mysqli_real_escape_string($this->db->link, $idProduct);

			$query = "UPDATE tbl_cart SET quantity = '$quantity' , size = '$size' WHERE productId = '$id';";
			$result = $this->db->update($query);
		}

         // Xóa sản phẩm ra khỏi giỏ hàng
         public function del_ProductCart($cartId){
             $Id = mysqli_real_escape_string($this->db->link,$cartId);
             $query_del = "DELETE FROM tbl_cart WHERE cartId = '$Id'";
             $result_del = $this->db->delete($query_del);    
             if ($result_del) {
                //  echo "<script type='text/javascript'>window.location.href = 'giohang.php'</script>";
             } else {
                 $msg = "Xóa sản phẩm không thành công";
                 return $msg;
             }
        }
        /* Check cart */
		public function checkCart(){
			$sId = session_id();
			$query = "SELECT * FROM tbl_cart WHERE sessionId = '$sId'";
			$result = $this->db->select($query);
			return $result;
		}
        /*chèn data vào bảng tbl_order*/
        public function insertOder($idUser){
			$sId = session_id();
			$query = "SELECT * FROM tbl_cart WHERE sessionId = '$sId'";
			$getProduct = $this->db->select($query);
			if($getProduct){
                while($result= $getProduct->fetch_assoc()){
                    $productId = $result['productId'];
                    $size=$result['size'];
                    $price = $result['price'];
                    $image = $result['image'];
                    $quantity = $result['quantity'];
                    $thanhtien= $result['quantity'] * $result['price'];
                    $userId = $idUser;
                    $query_order= "INSERT INTO tbl_order(productId,size,price,image,quantity,thanhtien,userId) VALUES('$productId',
                    '$size','$price','$image','$quantity','$thanhtien','$userId')";
                    $insert_order=$this->db->insert($query_order);
                    
                }
            }
		}
        /*Xóa data của bảng tbl_cart*/
        public function del_Cart(){
            $sesId = session_id();
            $query_del = "DELETE FROM tbl_cart WHERE sessionId='$sesId'";
            $result_del = $this->db->delete($query_del);    
            if ($result_del) {
               //  echo "<script type='text/javascript'>window.location.href = 'giohang.php'</script>";
            } else {
                $msg = "Xóa sản phẩm không thành công";
                return $msg;
            }
       }

        // hiển thị  sản phẩm ra trang lich su
        public function getOrderHistory(){
            $query = "SELECT od.* , pd.productName 
            FROM tbl_order AS od
            INNER JOIN tbl_product AS pd ON od.productId =pd.productId";
            $result = $this->db->select($query);
            return $result;
         } 
        public function showCart()
        {
            $query = "SELECT ct.* , pd.productName , pd.price , pd.image
            FROM tbl_cart AS ct 
            INNER JOIN tbl_product AS pd ON ct.productId=pd.productId    
            order by pd.productId desc"; 
            $result = $this->db->select($query);
            return $result;
        }
    }
?>