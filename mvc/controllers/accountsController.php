<?php

class accountsController extends http\controller
{

    public static function show()
    {
        $record = accounts::findOne($_REQUEST['id']);
        self::getTemplate('show_account', $record);
    }


    public static function all()
    {

        $records = accounts::findAll();
        self::getTemplate('all_accounts', $records);

    }

    public static function register()
    {

        self::getTemplate('register');
    }

    public static function store()

    {
        $user = accounts::findUserbyEmail($_REQUEST['email']);


        if ($user == FALSE) {
            $user = new account();
            $user->email = $_POST['email'];
            $user->fname = $_POST['fname'];
            $user->lname = $_POST['lname'];
            $user->phone = $_POST['phone'];
            $user->birthday = $_POST['birthday'];
            $user->gender = $_POST['gender'];
            $user->password = account::setPassword($_POST['password']);
            $user->save();
            $templateData['error'] = 'Thank you for registering. Please login to continue.';
            self::getTemplate('homepage', $templateData);

        } else {
        
            $templateData['error'] = 'User already registered';
            self::getTemplate('homepage', $templateData);
        }

    }

    public static function edit()
    {
        $record = accounts::findOne($_REQUEST['id']);

        self::getTemplate('edit_account', $record);

    }

    public static function save() {
    
        $user = accounts::findOne($_REQUEST['id']);
        $user->email = $_POST['email'];
        $user->fname = $_POST['fname'];
        $user->lname = $_POST['lname'];
        $user->phone = $_POST['phone'];
        $user->birthday = $_POST['birthday'];
        $user->gender = $_POST['gender'];
        $user->save();
        $_SESSION['name']=$_POST['fname'];
        //header("Location: index.php?page=tasks&action=goToProfile");
        self::getMyProfile();
    }

    public static function delete() {

        $record = accounts::findOne($_REQUEST['id']);
        $record->delete();
        
        header("Location: index.php");
    }

 
    public static function login()
    {
    

        $user = accounts::findUserbyEmail($_REQUEST['email']);


        if ($user == FALSE) {
        
            $templateData['error'] = 'User not found';
            self::getTemplate('homepage', $templateData);
            
        } else {

            if($user->checkPassword($_POST['password']) == TRUE) {
            
                session_start();

                $_SESSION["userID"] = $user->id;
                $_SESSION["name"] = $user->fname;
                
       
               header("Location: index.php?page=tasks&action=goToProfile");


            } else {
               
            $templateData['error'] = 'Invalid Password';
            self::getTemplate('homepage', $templateData);
            }

        }
    }


    public static function logout(){

        session_start();
        session_unset($_SESSION["userID"]);
        session_destroy();
        header("Location:index.php?page=homepage&action=show");
        exit();

    }
    
    public static function getMyProfile(){
    
    
      if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
        $record = accounts::findOne($_SESSION["userID"]);
       // print_r($record);
        self::getTemplate('show_account', $record);
      
    }
    
    public static function callEditProfile(){
    
    
      if(session_status() == PHP_SESSION_NONE){
              session_start();
      }
      
      $record = accounts::findOne($_SESSION["userID"]);
      self::getTemplate('edit_account', $record);
    
    
    }

}