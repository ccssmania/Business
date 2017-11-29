<?php

namespace App\Http\Models;


use App\Input;

class InputFilter {
    
    
    public static function getInput($name = null,$id = null,$process_id = null){
        $Input = Input::query();
        
        if($name){
            $Input->where('name',"like","%{$name}%");
        }
        
     
        if($id){
            $Input->where('id',$id);
        }
        if($process_id){
            $Input->where("process_id", $process_id);
        }
        $Input->orderBy('id');
        
        return $Input->get();
        
    }
    
    
    
}
