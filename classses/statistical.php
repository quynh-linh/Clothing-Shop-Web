<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath . '/../lib/database.php');
include_once($filepath . '/../helpers/format.php');
?>
<?php
class statistical
{
    private $db;
    private $fm;

    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }
    // thêm user vào DB
    public function gettongDoanhThu()
    {
        $query = "SELECT * FROM tbl_order WHERE status = 2";
        $result = $this->db->select($query);
        return $result;
    }
    // thêm user vào DB
    public function gettongKhachHang()
    {
        $query = "SELECT * FROM tbl_uer";
        $result = $this->db->select($query);
        return $result;
    }
    // thêm user vào DB
    public function gettongSP()
    {
        $query = "SELECT * FROM tbl_product";
        $result = $this->db->select($query);
        return $result;
    }
    public function gettongAdmin()
    {
        $query = "SELECT COUNT(*) AS countadmin FROM tbl_admin";
        $result = $this->db->select($query);
        return $result;
    }
    public function gettongSPTheoNgay($data)
    {
        $data1 = mysqli_real_escape_string($this->db->link,$data['date1']);
        $data2 = mysqli_real_escape_string($this->db->link,$data['date2']);
        $query = "SELECT od.* , SUM(thanhtien) AS value_sumTT , SUM(od.quantity) AS value_count , pd.productName
        FROM tbl_order AS od INNER JOIN tbl_product AS pd ON od.productId =pd.productId
        WHERE ( order_time BETWEEN '$data1' AND '$data2' ) AND od.status=2
        GROUP BY  od.productId
        ORDER BY od.productId";
        $result = $this->db->select($query);
        return $result;
    }
    public function gettongSPTheoNam($data)
    {
        $query = "SELECT SUM(thanhtien) AS value_sumTT , SUM(quantity) AS value_count FROM tbl_order
                    WHERE YEAR(order_time) = '$data' AND status=2 ";
        $result = $this->db->select($query);
        return $result;
    }
}
?>