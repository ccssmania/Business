<?php

namespace App\Http\Models;


use App\Task;

class TaskFilter {
    
    
    public static function getTask($name = null,$id = null,$process_id = null){
        $task = Task::query();
        
        if($name){
            $task->where('name',"like","%{$name}%");
        }
        
     
        if($id){
            $task->where('id',$id);
        }
        if($process_id){
            $task->where("process_id", $process_id);
        }
        $task->orderBy('id');
        
        return $task->get();
        
    }
    
    
    
}
