<?php
     $filepath = realpath(dirname(__FILE__));
     include_once($filepath.'/../lib/database.php');
     include_once($filepath.'/../helpers/format.php');
?>
<?php
    class brand 
    {
        private $db;
        private $fm;

        public function __construct()
        {
            $this->db = new Database();
            $this->fm = new Format();
        }
        public function insert_brand($brandName)
        {
            // kiểm tra xem có chứa từ nào có hợp lệ hay không
            $brandName = $this->fm->validation($brandName);
            // kết nối với cơ sở dữ liệu
            $brandName = mysqli_real_escape_string($this->db->link, $brandName);

            if (empty($brandName)) {
                $alert = "Danh mục không được bỏ trống";
                return $alert;
            } else {
                $query = "INSERT INTO tbl_brand(brandName) VALUES('$brandName')";
                $result = $this->db->insert($query);
                if ($result) {
                    $alert = "<span class='success'> Thêm thành công  </span>";
                    return $alert;
                } else {
                    $alert = "<span class='error'> Thêm không thành công  </span>";
                    return $alert;
                }
            }
        }

        public function show_brand()
        {
            $query = "SELECT * FROM tbl_brand order by brandId desc";
            $result = $this->db->select($query);
            return $result;
        }

        public function getbrandbyId($id)
        {
            $query = "SELECT * FROM tbl_brand where brandId = '$id'";
            $result = $this->db->select($query);
            return $result;
        }
        public function update_brand($brandName,$id)
        {
            // kiểm tra xem có chứa từ nào có hợp lệ hay không
            $brandName = $this->fm->validation($brandName);
            // kết nối với cơ sở dữ liệu
            $brandName = mysqli_real_escape_string($this->db->link, $brandName);
            $id = mysqli_real_escape_string($this->db->link, $id);
            if (empty($brandName)) {
                $alert = "Danh mục không được bỏ trống";
                return $alert;
            } else {
                $query = "UPDATE tbl_brand SET brandName = '$brandName' WHERE brandId = '$id'";
                $result = $this->db->update($query);
                if ($result) {
                    $alert = "<span class='success'> Cập nhập thành công  </span>";
                    return $alert;
                } else {
                    $alert = "<span class='error'> Cập nhập không thành công  </span>";
                    return $alert;
                }
            }
        }
        public function del_brand($id) {
            $query = "DELETE FROM tbl_brand where brandId = '$id'";
            $result = $this->db->delete($query);
            if ($result) {
                $alert = "<span class='success'> Xóa thành công  </span>";
                return $alert;
            } else {
                $alert = "<span class='error'> Xóa không thành công  </span>";
                return $alert;
            }
        }
        public function showBrand()
        {
            $query = "SELECT * FROM tbl_brand";
            $result = $this->db->select($query);
            return $result;
        }
    }
?>