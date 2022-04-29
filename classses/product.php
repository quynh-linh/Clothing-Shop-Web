<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath . '/../lib/database.php');
include_once($filepath . '/../helpers/format.php');
?>
<?php
class product
{
    private $db;
    private $fm;

    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }
    public function insert_product($data, $files)
    {
        // kết nối với cơ sở dữ liệu
        $productName = mysqli_real_escape_string($this->db->link, $data["productName"]);
        $category = mysqli_real_escape_string($this->db->link, $data["category"]);
        $typeProduct = mysqli_real_escape_string($this->db->link, $data["typeProduct"]);
        $brand = mysqli_real_escape_string($this->db->link, $data["brand"]);
        $product_desc = mysqli_real_escape_string($this->db->link, $data["product_desc"]);
        $price = mysqli_real_escape_string($this->db->link, $data["price"]);
        $type = mysqli_real_escape_string($this->db->link, $data["type"]);

        //kiểm tra hình ảnh và lấy hình ảnh cho vào folder uploads
        $permited = array('jpg', 'jpeg', 'png', 'gif');
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_temp = $_FILES['image']["tmp_name"];

        $div = explode('.', $file_name);
        $file_ext = strtolower(end($div));
        $unique_image = substr(md5(time()), 0, 10) . '.' . $file_ext;
        $uploaded_image = "upload/" . $unique_image;

        if ($productName == "" ||  $brand == "" || $typeProduct == "" ||  $category == "" ||  $product_desc == "" ||  $price == "" ||  $type == "" ||  $file_name == "") {
            $alert = "Không được bỏ trống";
            return $alert;
        } else {
            move_uploaded_file($file_temp, $uploaded_image);
            $query = "INSERT INTO tbl_product(productName,brandId,catId,product_desc,price,type,image,typeProductId) VALUES('$productName',
                '$brand','$category','$product_desc','$price','$type','$unique_image','$typeProduct')";
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

    public function show_product()
    {
        $query = "SELECT pd.* , cat.catName , br.brandName , tpd.typeProductName
                FROM tbl_product AS pd 
                INNER JOIN category AS cat ON pd.catId=cat.catId   
                INNER JOIN tbl_brand AS br ON pd.brandId=br.brandId
                INNER JOIN tbl_type_product AS tpd ON pd.typeProductId= tpd.typeProductID 
                order by pd.productId desc";
        $result = $this->db->select($query);
        return $result;
    }

    public function getproductbyId($id)
    {
        $query = "SELECT * FROM tbl_product where productId = '$id'";
        $result = $this->db->select($query);
        return $result;
    }
    public function update_product($data, $files, $id)
    {
        // kết nối với cơ sở dữ liệu
        $productName = mysqli_real_escape_string($this->db->link, $data["productName"]);
        $category = mysqli_real_escape_string($this->db->link, $data["category"]);
        $typeProduct = mysqli_real_escape_string($this->db->link, $data["typeProduct"]);
        $brand = mysqli_real_escape_string($this->db->link, $data["brand"]);
        $product_desc = mysqli_real_escape_string($this->db->link, $data["product_desc"]);
        $price = mysqli_real_escape_string($this->db->link, $data["price"]);
        $type = mysqli_real_escape_string($this->db->link, $data["type"]);

        //kiểm tra hình ảnh và lấy hình ảnh cho vào folder uploads
        $permited = array('jpg', 'jpeg', 'png', 'gif');
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_temp = $_FILES['image']["tmp_name"];

        $div = explode('.', $file_name);
        $file_ext = strtolower(end($div));
        $unique_image = substr(md5(time()), 0, 10) . '.' . $file_ext;
        $uploaded_image = "upload/" . $unique_image;
        if (!empty($file_name)) {
            // Nếu người dùng chọn ảnh
            if ($file_size > 20480) {
                $alert = "<span class='error'> Chỉ có thể tải ảnh dưới 20MB </span>";
                return $alert;
            } elseif (in_array($file_ext, $permited) === false) {
                $alert = "<span class='error'> Chỉ có thể:" . implode(',', $permited) . "</span>";
                return $alert;
            }
            $query = "UPDATE tbl_product SET 
                        productName = '$productName',
                        brandId = '$brand',
                        catId = '$category',
                        type = '$type',
                        price = '$price',
                        image = '$unique_image',
                        product_desc = '$product_desc',
                        typeProductId = '$typeProduct'
                    WHERE productId = '$id'";
        } else {
            $query = "UPDATE tbl_product SET 
                        productName = '$productName',
                        brandId = '$brand',
                        catId = '$category',
                        type = '$type',
                        price = '$price',
                        product_desc = '$product_desc',
                        typeProductId = '$typeProduct'
                    WHERE productId = '$id'";
        }
        $result = $this->db->update($query);
        if ($result) {
            $alert = "<span class='success'> Cập nhập thành công  </span>";
            return $alert;
        } else {
            $alert = "<span class='error'> Cập nhập không thành công  </span>";
            return $alert;
        }
    }
    public function del_product($id)
    {
        $query = "DELETE FROM tbl_product where productId = '$id'";
        $result = $this->db->delete($query);
        if ($result) {
            $alert = "<span class='success'> Xóa thành công  </span>";
            return $alert;
        } else {
            $alert = "<span class='error'> Xóa không thành công  </span>";
            return $alert;
        }
    }
    // END BACKEND
    // hiện thị best seller quần áo nam
    public function getProduct_Men()
    {
        $query = "SELECT * FROM tbl_product where type = '0'";
        $result = $this->db->select($query);
        return $result;
    }
    // hiện thị best seller quần áo nữ
    public function getProduct_Women()
    {
        $query = "SELECT * FROM tbl_product where type = '1'";
        $result = $this->db->select($query);
        return $result;
    }
    // hiện thị best seller quần áo trẻ em
    public function getProduct_Kid()
    {
        $query = "SELECT * FROM tbl_product where type = '2'";
        $result = $this->db->select($query);
        return $result;
    }
    // hiển thị chi tiết sản phẩm
    public function getProduct_Details($id)
    {
        $query = "SELECT pd.* , cat.catName , br.brandName
            FROM tbl_product AS pd INNER JOIN category AS cat ON pd.catId=cat.catId   
            INNER JOIN tbl_brand AS br ON pd.brandId=br.brandId
            WHERE pd.productId = '$id'";
        $result = $this->db->select($query);
        return $result;
    }
    // tìm kiếm sản phẩm theo tên
    public function searchProduct($productName)
    {
        $sql = "SELECT * FROM tbl_product WHERE productName like '%$productName%'";
        $result = $this->db->select($sql);
        return $result;
    }
    // tìm kiếm sản phẩm theo khoảng giá
    public function searchProductPrice()
    {
        $sql = "SELECT * FROM tbl_product order by tbl_product.price desc LIMIT 20";
        $result = $this->db->select($sql);
        return $result;
    }
    // tìm kiếm sản phẩm theo khoảng giá
    public function searchProductRangePrice($data)
    {
        $range = mysqli_real_escape_string($this->db->link, $data['range']);
        $category = mysqli_real_escape_string($this->db->link, $data['category']);
        $brand = mysqli_real_escape_string($this->db->link, $data['brand']);
        $sql = "SELECT pd.*
            FROM tbl_product AS pd 
            INNER JOIN category AS cat ON pd.catId=cat.catId   
            INNER JOIN tbl_brand AS br ON pd.brandId=br.brandId
            WHERE cat.catName='$category' AND br.brandName='$brand' AND pd.price <='$range'";
        $result = $this->db->select($sql);
        return $result;
    }
}
?>