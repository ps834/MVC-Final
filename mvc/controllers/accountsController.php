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
        header("Location: index.php?page=accounts&action=all");
    }

    //this is to login, here is where you find the account and allow login or deny.
    public static function login()
    {
        //you will need to fix this so we can find users username.  YOu should add this method findUser to the accounts collection
        //when you add the method you need to look at my find one, you need to return the user object.
        //then you need to check the password and create the session if the password matches.
        //you might want to add something that handles if the password is invalid, you could add a page template and direct to that
        //after you login you can use the header function to forward the user to a page that displays their tasks.
        //        $record = accounts::findUser($_POST['email']);

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

 /*             $tasks = todos::findTasks($_SESSION["userID"]);
              self::getTemplate('profilePage', $tasks);*/

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