<?php

class tasksController extends http\controller
{
    
  
    public static function show()
    {
        $record = todos::findOne($_REQUEST['id']);
        self::getTemplate('show_task', $record);
    }

    public static function all()
    {
        $records = todos::findAll();

        self::getTemplate('all_tasks', $records);

    }

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
          self::setSuccessMessage("Tasks updated successfully for Owner ID ",$user->ownerid);
          self::getTemplate('show_task', $user);
        }else{
           self::setSuccessMessage("Task inserted successfully for Owner ID ",$user->ownerid);
           self::goToProfile();
        }

    }

    public static function goToProfile(){
        
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
        
        $tasks = todos::findTasks($_SESSION["userID"]);
        if(empty($tasks)){
          $_SESSION['message'] = "No Tasks to display";
        }
        self::getTemplate('profilePage', $tasks);
    }

    public static function insertTasks(){
    
        self::getTemplate('insertTask');
    }

    public static function store(){
    
        $record = todos::findOne($_REQUEST['id']);
        $record->body = $_REQUEST['body'];
        $record->save();
    }

 
    public static function delete()
    {
        $record = todos::findOne($_SESSION['taskID']);
        $record->delete();
        self::goToProfile();

    }
  
    public static function setSuccessMessage($task,$id){
           if(session_status() == PHP_SESSION_NONE){
            session_start();
          } 
          $_SESSION['message'] =   $task . $id;
    }

    public static function confirmDelete(){
      
      self::setSuccessMessage("Your task will be deleted. Do you want to continue?", " " );
        $record = todos::findOne($_SESSION['taskID']);
        self::getTemplate('show_task', $record);
      
    }  
}