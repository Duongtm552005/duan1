    <?php   

class HomeController
{
    public $modelSanPham;
    public $modelTaiKhoan;
    public function __construct(){
        $this->modelSanPham = new SanPham();
        $this->modelTaiKhoan = new TaiKhoan();
    }

    public function home(){
        $listSanPham = $this->modelSanPham->getAllSanPham();
        require_once './views/home.php';
        
    }
    public function formLogin(){
        require_once './views/auth/formLogin.php';

        deleteSessionError();
        exit();
    }
    public function postLogin()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Kiểm tra thông tin đăng nhập
            $user = $this->modelTaiKhoan->checkLogin($email, $password);

            if (is_array($user)) {
                // Lưu thông tin người dùng vào session
                $_SESSION['user_client'] = $user;  // Lưu toàn bộ thông tin người dùng vào session

                // Kiểm tra vai trò người dùng để chuyển hướng
                if ($user['vai_tro'] == 1) {
                    // Nếu là admin, chuyển đến trang quản trị
                    $_SESSION['user_admin'] = $user;  // Lưu thông tin admin
                    header('Location:' . BASE_URL_ADMIN);  // Chuyển đến trang quản trị
                    exit();
                } else {
                    // Nếu là khách hàng, chuyển đến trang chủ
                    header('Location:' . BASE_URL);  // Chuyển đến trang chủ
                    exit();
                }
            } else {
                // Lỗi đăng nhập
                $_SESSION['error'] = $user;
                $_SESSION['flash'] = true;
                header('Location:' . BASE_URL . '?act=login');
                exit();
            }
        }
    }

}