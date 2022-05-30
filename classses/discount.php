<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath . '/../lib/database.php');
include_once($filepath . '/../helpers/format.php');
?>
<?php
class discount
{
    private $db;
    private $fm;

    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }
    /*chèn data vào bảng tbl_order*/
    public function insertDiscount($data)
    {
        $coupon_name = mysqli_real_escape_string($this->db->link, $data["coupon_name"]);
        $coupon_time = mysqli_real_escape_string($this->db->link, $data["coupon_time"]);
        $coupon_conditions = mysqli_real_escape_string($this->db->link, $data["coupon_conditions"]);
        $coupon_number = mysqli_real_escape_string($this->db->link, $data["coupon_number"]);
        $coupon_code = mysqli_real_escape_string($this->db->link, $data["coupon_code"]);
        if ($coupon_name == "" || $coupon_time == "" || $coupon_number == "" || $coupon_code == "" ) {
            $alert = "Vui lòng nhập đầy đủ thông tin";
            return $alert;
        } else {
           $sql = "INSERT INTO `tbl_discount`(`coupon_name`, `coupon_time`, `coupon_conditions`, `coupon_number`, `coupon_code`) 
           VALUES ('$coupon_name','$coupon_time',' $coupon_conditions','$coupon_number',' $coupon_code ')";
           $result = $this->db->insert($sql);
           if ($result) {
               Session::set('coupon_id ',true);
               $alert = "Thêm thành công";
               return $alert;
           } else {
            $alert = "Thêm không thành công";
            return $alert;
           }
        }
    }
    public function showDiscount()
    {
        $sql = "SELECT *
        FROM tbl_discount ";
        $result = $this->db->select($sql);
        return $result;
    }
     // hiển thị  sản phẩm trong giỏ hàng
     public function getDiscountByID($coupon_code){
        $query = "SELECT * FROM tbl_discount
        WHERE coupon_code = ' $coupon_code '";
        $result = $this->db->select($query);
        if ($result == true) {
            return $result;
        } else {
            $alert = "Mã code không còn hoặc không tồn tại";
            return $alert;
        }
    }  
    public function del_Discount($id)
    {
        $query = "DELETE FROM tbl_discount where coupon_id = '$id'";
        $result = $this->db->delete($query);
        if ($result) {
            $alert = "<span class='success'> Xóa thành công  </span>";
            return $alert;
        } else {
            $alert = "<span class='error'> Xóa không thành công  </span>";
            return $alert;
        }
    }
}
?>