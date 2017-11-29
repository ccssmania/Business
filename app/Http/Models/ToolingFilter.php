<?php

namespace App\Http\Models;


use App\Tooling;

class ToolingFilter {
    
    
    public static function getTooling($name = null,$id = null,$process_id = null){
        $Tooling = Tooling::query();
        
        if($name){
            $Tooling->where('name',"like","%{$name}%");
        }
        
     
        if($id){
            $Tooling->where('id',$id);
        }
        if($process_id){
            $Tooling->where("process_id", $process_id);
        }
        $Tooling->orderBy('id');
        
        return $Tooling->get();
        
    }
    
    
    
}
