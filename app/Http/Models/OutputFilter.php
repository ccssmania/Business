<?php

namespace App\Http\Models;


use App\Output;

class OutputFilter {
    
    
    public static function getOutput($name = null,$id = null,$process_id = null){
        $Output = Output::query();
        
        if($name){
            $Output->where('name',"like","%{$name}%");
        }
        
     
        if($id){
            $Output->where('id',$id);
        }
        if($process_id){
            $Output->where("process_id", $process_id);
        }
        $Output->orderBy('id');
        
        return $Output->get();
        
    }
    
    
    
}
