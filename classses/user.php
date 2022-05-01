<?php
    $filepath = realpath(dirname(__FILE__));
    include_once($filepath.'/../lib/session.php');
    include_once($filepath . '/../lib/database.php');
    include_once($filepath . '/../helpers/format.php');
?>
<?php
class user
{
    private $db;
    private $fm;

    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }
    // thêm user vào DB
    public function insert_user($data)
    {
        // kết nối với cơ sở dữ liệu
        $username = mysqli_real_escape_string($this->db->link, $data["username"]);
        $password = mysqli_real_escape_string($this->db->link, md5($data["password"]));
        $relyPassword = mysqli_real_escape_string($this->db->link, md5($data["relyPassword"]));
        $name = mysqli_real_escape_string($this->db->link, $data["name"]);
        $email = mysqli_real_escape_string($this->db->link, $data["email"]);
        $phone = mysqli_real_escape_string($this->db->link, $data["phone"]);
        $sex = mysqli_real_escape_string($this->db->link, $data["sex"]);
        $date = mysqli_real_escape_string($this->db->link, $data["date"]);
        $address = mysqli_real_escape_string($this->db->link, $data["address"]);
        $cauHoiBiMat = mysqli_real_escape_string($this->db->link, $data["cauHoiBiMat"]);
        if (
            $username == "" ||  $password == "" ||  $relyPassword == "" ||  $name == "" ||  $email == ""
            ||  $phone == "" ||  $sex == "" ||  $date == "" ||  $address == "" ||  $cauHoiBiMat == ""
        ) {
            $alert = "<span class='error'>Nhập đầy đủ thông tin</span>";
            return $alert;
        } else {
            if ($password != $relyPassword) {
                $alert = "<span class='success'> Mật khẩu nhập lại không trùng khớp </span>";
                return $alert;
            } else {
                $check_username = "SELECT * FROM tbl_uer WHERE username='$username' LIMIT 1";
                $result_check = $this->db->select($check_username);
                if ($result_check) {
                    $alert = "<span class='success'> Tên bạn đăng ký đã tồn tại </span>";
                    return $alert;
                } else {
                    $query = "INSERT INTO tbl_uer(name,username,userPassword,email,gioiTinh,sdt,ngaySinh,diaChi,cauHoiBM) VALUES('$name','$username','$password'
                        ,'$email','$sex','$phone','$date','$address','$cauHoiBiMat')";
                    $result = $this->db->insert($query);
                    if ($result) {
                        $alert = "<span class='success'> Đăng ký thành công  </span>";
                        return $alert;
                    } else {
                        $alert = "<span class='error'> Đăng ký thất bại  </span>";
                        return $alert;
                    }
                }
            }
        }
    }
    // đăng nhập
    public function login_user($data)
    {
        $username = mysqli_real_escape_string($this->db->link, $data["username"]);
        $password = mysqli_real_escape_string($this->db->link, md5($data["password"]));
        if ($username == "" ||  $password == "") {
            $alert = "<span class='error'>Nhập đầy đủ thông tin</span>";
            return $alert;
        } else {
            $check_username = "SELECT * FROM tbl_uer WHERE username='$username' AND userPassword='$password'";
            $result = $this->db->select($check_username);
            if ($result) {
                $value = $result->fetch_assoc();
                // người dùng đã đăng nhập thành công rồi
                Session::set('user_login', true);
                Session::set('user_id', $value['userId']);
                Session::set('user_name', $value['name']);
                header('Location:index.php');
            } else {
                $alert = "<span class='error'> Tài khoản không tồn tại </span>";
                return $alert;
            }
        }
    }
    public function show_User($userId)
    {
        $query = "SELECT *  FROM tbl_uer WHERE userId = '$userId'";
        $result = $this->db->select($query);
        return $result;
    }
    public function showCauHoiBiMat($username, $cauHoiBiMat)
    {
        $cauHoiBiMat = mysqli_real_escape_string($this->db->link, $cauHoiBiMat);
        $username = mysqli_real_escape_string($this->db->link, $username);
        if ($cauHoiBiMat == "" || $username == "") {
            $alert = "<span class='error'>Bạn chưa nhập câu hỏi</span>";
            return $alert;
        } else {
            $update_user = "SELECT * FROM tbl_uer WHERE username='$username' AND cauHoiBM='$cauHoiBiMat'";
            $result_check = $this->db->select($update_user);
            if ($result_check) {
                header('Location:nhapLaiMK.php');
            }
        }
    }
    public function updatePass($data)
    {
        // kết nối với cơ sở dữ liệu
        $password = mysqli_real_escape_string($this->db->link, md5($data["passWord"]));
        $relyPassword = mysqli_real_escape_string($this->db->link, md5($data["RelypassWord"]));
        if ($password == "" ||  $relyPassword == "") {
            $alert = "<span class='error'>Nhập đầy đủ thông tin</span>";
            return $alert;
        } else {
            if ($password != $relyPassword) {
                $alert = "<span class='success'> Mật khẩu nhập lại không trùng khớp </span>";
                return $alert;
            } else {
                $update_user = "UPDATE tbl_uer SET userPassword='$password'";
                $result_check = $this->db->update($update_user);
                if ($result_check) {
                    $alert = "<span class='success'> Update Successfully </span>";
                    return $alert;
                } else {
                    $alert = "<span class='error'> Update Fail  </span>";
                    return $alert;
                }
            }
        }
    }
    public function update_user($user_Id, $data)
    {
        // kết nối với cơ sở dữ liệu
        $name = mysqli_real_escape_string($this->db->link, $data["name"]);
        $email = mysqli_real_escape_string($this->db->link, $data["email"]);
        $phone = mysqli_real_escape_string($this->db->link, $data["phone"]);
        $sex = mysqli_real_escape_string($this->db->link, $data["sex"]);
        $date = mysqli_real_escape_string($this->db->link, $data["date"]);
        $address = mysqli_real_escape_string($this->db->link, $data["address"]);
        if ($name == "" ||  $email == "" ||  $phone == "" ||  $sex == "" ||  $date == "" ||  $address == "") {
            $alert = "<span class='error'>Nhập đầy đủ thông tin</span>";
            return $alert;
        } else {
            $update_user = "UPDATE tbl_uer SET name='$name', email='$email', sdt='$phone', gioiTinh='$sex', ngaySinh='$date', diaChi='$address' WHERE userId='$user_Id'";
            $result_check = $this->db->update($update_user);
            if ($result_check) {
                $alert = "<span class='success'> Update Successfully </span>";
                return $alert;
            } else {
                $alert = "<span class='error'> Update Fail  </span>";
                return $alert;
            }
        }
    }
}
?>