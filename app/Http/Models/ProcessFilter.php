<?php

namespace App\Http\Models;


use App\Process;

class ProcessFilter {
    
    
    public static function getProcess($name = null,$id = null){
        $status = 0;
        $process = Process::query();
        
        if($name){
            $process->where('name',"like","%{$name}%");
        }
        
     
        if($id){
            $process->where('id',$id);
        }
        $process->orderBy('id');
        
        return $process->paginate(8);
        
    }
    
    
    
}
