<?php

namespace App\Http\Models;


use App\Department;

class DepartmentFilter {
    
    
    public static function getDepartment($name = null,$id = null,$process_id = null){
        $Department = Department::query();
        
        if($name){
            $Department->where('name',"like","%{$name}%");
        }
        
     
        if($id){
            $Department->where('id',$id);
        }
        if($process_id){
            $Department->where("process_id", $process_id);
        }
        $Department->orderBy('id');
        
        return $Department->get();
        
    }
    
    
    
}
