<?php
/**
 * Created by PhpStorm.
 * User: kwilliams
 * Date: 11/27/17
 * Time: 5:32 PM
 */


//each page extends controller and the index.php?page=tasks causes the controller to be called
class tasksController extends http\controller
{
    
    //each method in the controller is named an action.
    //to call the show function the url is index.php?page=task&action=show
    public static function show()
    {
        $record = todos::findOne($_REQUEST['id']);
        self::getTemplate('show_task', $record);
    }

    //to call the show function the url is index.php?page=task&action=list_task

    public static function all()
    {
        $records = todos::findAll();
        /*session_start();
           if(key_exists('userID',$_SESSION)) {
               $userID = $_SESSION['userID'];
           } else {

               echo 'you must be logged in to view tasks';
           }
        $userID = $_SESSION['userID'];

        $records = todos::findTasksbyID($userID);
        */
        self::getTemplate('all_tasks', $records);

    }
    //to call the show function the url is called with a post to: index.php?page=task&action=create
    //this is a function to create new tasks

    //you should check the notes on the project posted in moodle for how to use active record here

    public static function create()
    {
        print_r($_POST);
    }

    //this is the function to view edit record form
    public static function edit()
    {
        $record = todos::findOne($_REQUEST['id']);

        self::getTemplate('edit_task', $record);

    }
    
    
    //this is used to save the update form data
    public static function save() {

        $user = new todo();
        $taskStatus = 'insert';

        if(isset($_REQUEST['id'])==1){

            $user = todos::findOne($_REQUEST['id']);
            $taskStatus = 'update';
        }

                
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }

        
        $user->owneremail = $_POST['email'];
        $user->ownerid = $_POST['ownerid'];
        $user->createddate = $_POST['createddate'];
        $user->duedate = $_POST['duedate'];
        $user->message = $_POST['message'];
        $user->isdone = $_POST['isdone'];
        $user->userid = $_SESSION["userID"];
        $user->save();
        
        if($taskStatus == 'update'){
          self::getTemplate('show_task', $user);
        }else{
           self::goToProfile();
        }

    }

    public static function goToProfile(){
        
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
        
        
        $tasks = todos::findTasks($_SESSION["userID"]);
        
       

       if (empty($tasks)) {
            echo "No Tasks found";
        }else{
         self::getTemplate('profilePage', $tasks);
        }

    }

    public static function insertTasks(){
    
        self::getTemplate('insertTask');
    }

    public static function store()
    {


        $record = todos::findOne($_REQUEST['id']);
        $record->body = $_REQUEST['body'];
        $record->save();
        //print_r($_POST);

    }

 
    public static function delete()
    {
        $record = todos::findOne($_REQUEST['id']);
        $record->delete();
        self::goToProfile();

    }



}