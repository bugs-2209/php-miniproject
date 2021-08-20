<?php


class AuthController extends BaseController{

    public function __construct() {
        $this->loadModel('User');
        $this->model = new User();

    }

    public function index() {
        return $this->view('site.login');
    }

    public function login() {
        $username = $password = NULL;
        
        $errorLogin = [];
        $errorLogin['username'] = $errorLogin['password'] = NULL;

        if (empty($_POST['username'])) {
            $errorLogin['username'] = '* Cần điền tên đăng nhập';
        } else {
            $username = $_POST['username'];
        }
        
        if (empty($_POST['password'])) {
            $errorLogin['password'] = '* Cần điền mật khẩu';
        } else {
            $password = crypt($_POST['password'],'DES');
        }

        if (isset($_POST['remember'])) {
            setcookie ("username",$_POST["username"],time()+ 3600);
            setcookie ("password",$_POST["password"],time()+ 3600);
        } else {
            setcookie("username","");
            setcookie("password","");
        }

        if ($username && $password) {
            
            $result = $this->model->login($username, $password);
            $check = $result->num_rows;
            
            if ($check > 0) {
                $data = $result->fetch_array(); /*lấy dữ liệu tương ứng với username và password nhập*/
                $_SESSION['useradmin'] = $data; /*lưu session*/
                header('Location:index.php?controller=home');
            } else {
                echo "<script>alert('Sai mật khẩu hoặc tên đăng nhập')</script>";
                return $this->view('site.login');
            }

        }
    }

    public function logout() {
        session_start();
        $_SESSION["useradmin"] = "";
        session_destroy();
        header('location:index.php');
	    exit;
    }

}