<?php
    $filepath = realpath(dirname(__FILE__));
    include($filepath.'/../lib/session.php');
    Session::checkLogin();
    include($filepath.'/../lib/database.php');
    include($filepath.'/../helpers/format.php');
?>
<?php
    class adminlogin 
    {
        private $db;
        private $fm;

        public function __construct()
        {
            $this->db = new Database();
            $this->fm = new Format();
        }
        public function login_admin($adminUser,$adminPass)
        {
            // kiểm tra xem có chứa từ nào có hợp lệ hay không
            $adminUser = $this->fm->validation($adminUser); 
            $adminPass = $this->fm->validation($adminPass); 

            // kết nối với cơ sở dữ liệu
            $adminUser = mysqli_real_escape_string($this->db->link, $adminUser);
            $adminPass = mysqli_real_escape_string($this->db->link, $adminPass);

            if (empty($adminUser) || empty($adminPass)) {
                $alert = "Không được để trống";
                return $alert;
            } else {
                $query = " SELECT * FROM tbl_admin WHERE adminUser = '$adminUser' AND adminPass = '$adminPass' LIMIT 1 ";
                $result = $this->db->select($query);

                if ($result) {
                    $value = $result->fetch_assoc();
                    Session::set('adminLogin',true);
                    Session::set('adminId',$value['adminId']);
                    Session::set('adminUser',$value['adminUser']);
                    Session::set('adminName',$value['adminName']);
                    header('Location:index.php');
                }
                else {
                    $alert = "Mật khẩu hoặc Tài khoản sai";
                    return $alert;
                }
            }
        }
    }
?>