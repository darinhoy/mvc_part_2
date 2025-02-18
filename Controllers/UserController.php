<?php
require_once "Models/UserModel.php";


class UserController extends BaseController
{
    private $users;

    /**
     * Constructor to initialize the product model.
     */
    public function __construct()
    {
        $this->users = new UserModel();
    }

    /**
     * Displays the home page with the list of products.
     */
    public function index()
    {
        $result = $this->users->getUsers();
        $this->view('users/user', ['users' => $result]);

    }

    public function create(){
        $this->view('users/create');
    }
     /**
     * Deletes a product from the database.
     */
    public function destroy($id)
    {
        $this->users->deleteUser($id);
        $this->redirect('/user');
    }
       /**
     * Displays the edit product form.
     */
    public function edit($id)
    {
        
        $result = $this->users->getUserById($id);
        $this->view('users/edite', ['user' => $result]);
    }

    
    
    /**
     * Updates an existing product in the database.
     */
    public function update($id)
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['pswd'];
        $role = $_POST['role'];
        $passwordEnypt = password_hash($password, PASSWORD_BCRYPT);
        $this->users->updateUser($id, $name, $email,$passwordEnypt, $role);
        $this->redirect('/user');
    }

/**
     * Saves a new product to the database.
     */
    public function store()
    {
        $name = htmlspecialchars( $_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $passwordl = htmlspecialchars($_POST['pswd']);
        $role = htmlspecialchars($_POST['role']);
        // echo $password;
        $passwordEnypt = password_hash($password, PASSWORD_BCRYPT);
        // echo $passwordEnypt; die;
        $this->users->addUser($name, $passwordEnypt, $email, $role);
        $this->redirect('/user');
    }
}