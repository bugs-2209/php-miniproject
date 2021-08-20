<?php


class UserController extends BaseController {

    private $model;

    public function __construct() {

        // $this->checkAuth();
        $this->loadModel('User');
        $this->model = new User();

    }
    
    public function index() {
        $users = $this->model->get();
        return $this->view('admin.users.index', ['users' => $users]);
    }

    public function create() {
        
        return $this->view('admin.users.create');
    }

    public function store() {
        $error = [];
        $error['username'] = $error['email'] = $error['password'] = NULL;

        if (empty($_POST['username'])) {
            $error['username'] = '* Vui lòng không bỏ trống';
        } else {
            $username = $_POST['username'];
        }
        
        if (empty($_POST['email'])) {
            $error['email'] = '* Vui lòng không bỏ trống';
        } else {
            $email = $_POST['email'];
        }

        if (empty($_POST['password'])) {
            $error['password'] = '* Vui lòng không bỏ trống';
        } else {
            $password = crypt($_POST['password'], 'DES');
        }
        
        if (isset($username) && isset($email) && isset($password)) {
            $this->model->create($username,$password, $email);
            header('Location: ?controller=user');
        }else {
            $this->view('admin.users.create',['error' => $error]);
        }

        
    }

    public function edit() {
        $id = $_GET['id'];
        $user = $this->model->edit($id);

        $error = [];
        $error['username'] = $error['email'] = $error['password'] = NULL;

        return $this->view('admin.users.edit',['user' => $user]);
    }

    public function update() {
        $id = $_GET['id'];

        $error = [];
        $error['username'] = $error['email'] = $error['password'] = NULL;

        if (empty($_POST['username'])) {
            $error['username'] = '* Vui lòng không bỏ trống';
        } else {
            $username = $_POST['username'];
        }
        
        if (empty($_POST['email'])) {
            $error['email'] = '* Vui lòng không bỏ trống';
        } else {
            $email = $_POST['email'];
        }

        if (isset($username) && isset($email)) {
            $this->model->update($username,$email,$id);
            header('Location: ?controller=user');
        } else {
            $_GET['action'] = 'edit';
            return $this->view('admin.users.edit',['error' => $error]); 
        }
        
        
    }

    public function delete() {
        $id = $_GET['id'];
        $this->model->delete($id);
        header('Location: ?controller=user');
    }
    
}