<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath . '/../lib/database.php');
include_once($filepath . '/../helpers/format.php');
include_once($filepath . '/../send_mail/SendMail.php');
?>
<?php
class Mail
{
    private $db;
    private $fm;

    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }
    public function sendMail($data)
    {
        $Email = mysqli_real_escape_string($this->db->link, $data["email"]);
        if ($Email == "") {
            $alert = '<span class="error_Email">Vui lòng nhập email của bạn</span>';
            return $alert;
        } else {
            $sql = "SELECT * FROM tbl_uer WHERE email = '$Email' ORDER BY email ASC  LIMIT 1";
            $result = $this->db->select($sql);
            if ($result === FALSE) {
                $alert = '<span class="error_Email">Địa chỉ email không tồn tại</span>';
                return $alert;
            }
            $account = mysqli_fetch_assoc($result);
            $randPassword = "123456";
            $title = 'Update password';
            $content = "<h3> Dear " . $account['name'] . '</h3>';
            $content .= "<p>We have received a request to re-issue your password recently.</p>";
            $content .= "<p>We have updated and sent you a new password</p>";
            $content .= "<p>Your new password is : </p> <b>$randPassword</b>";
            $sendMai = SendMail::send($title, $content, $account['name'], $account['email']);
            if ($sendMai) {
                $hash = md5($randPassword);
                $sqlUpdate = "UPDATE tbl_uer SET userPassword= '$hash' WHERE userId = ". $account['userId'];
                $this->db->update($sqlUpdate);
                $alert = '<span class="successful_Email">Chúng tôi đã gửi cho bạn một email, vui lòng kiểm tra nó</span>';
                return  $alert;
            } else {
                $alert = '<span class="error_Email">Đã xảy ra lỗi không thể lấy lại mật khẩu</span>';
                return  $alert;
                exit();
            }
        }
    }
}
?>