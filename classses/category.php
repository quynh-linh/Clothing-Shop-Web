<?php
    $filepath = realpath(dirname(__FILE__));
    include_once($filepath.'/../lib/database.php');
    include_once($filepath.'/../helpers/format.php');
?>
<?php
    class category 
    {
        private $db;
        private $fm;

        public function __construct()
        {
            $this->db = new Database();
            $this->fm = new Format();
        }
        public function insert_category($catName)
        {
            // kiểm tra xem có chứa từ nào có hợp lệ hay không
            $catName = $this->fm->validation($catName);
            // kết nối với cơ sở dữ liệu
            $catName = mysqli_real_escape_string($this->db->link, $catName);

            if (empty($catName)) {
                $alert = "Danh mục không được bỏ trống";
                return $alert;
            } else {
                $query = "INSERT INTO category(catName) VALUES('$catName')";
                $result = $this->db->insert($query);
                if ($result) {
                    $alert = "<span class='success'> Thêm thành công  </span>";
                    return $alert;
                } else {
                    $alert = "<span class='category_not_success'> Thêm không thành công  </span>";
                    return $alert;
                }
            }
        }

        public function show_category()
        {
            $query = "SELECT * FROM category order by catId desc";
            $result = $this->db->select($query);
            return $result;
        }
        public function getcatbyId($id)
        {
            $query = "SELECT * FROM category where catId = '$id'";
            $result = $this->db->select($query);
            return $result;
        }
        public function update_category($catName,$id)
        {
            // kiểm tra xem có chứa từ nào có hợp lệ hay không
            $catName = $this->fm->validation($catName);
            // kết nối với cơ sở dữ liệu
            $catName = mysqli_real_escape_string($this->db->link, $catName);
            $id = mysqli_real_escape_string($this->db->link, $id);
            if (empty($catName)) {
                $alert = "Danh mục không được bỏ trống";
                return $alert;
            } else {
                $query = "UPDATE category SET catName = '$catName' WHERE catId = '$id'";
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
        public function del_category($id) {
            $query = "DELETE FROM category where catId = '$id'";
            $result = $this->db->delete($query);
            if ($result) {
                $alert = "<span class='success'> Xóa thành công  </span>";
                return $alert;
            } else {
                $alert = "<span class='error'> Xóa không thành công  </span>";
                return $alert;
            }
        }
        public function showCategory()
        {
            $query = "SELECT * FROM category";
            $result = $this->db->select($query);
            return $result;
        }
        /* Show list product by brand */
    }
?>