<?php

namespace App\Http\Models;


use App\Machine;

class MachineFilter {
    
    
    public static function getMachine($name = null,$id = null,$process_id = null){
        $Machine = Machine::query();
        
        if($name){
            $Machine->where('name',"like","%{$name}%");
        }
        
     
        if($id){
            $Machine->where('id',$id);
        }
        if($process_id){
            $Machine->where("process_id", $process_id);
        }
        $Machine->orderBy('id');
        
        return $Machine->get();
        
    }
    
    
    
}
