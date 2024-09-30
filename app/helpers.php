<?php

use App\Models\project;
use App\Models\section;
use App\Models\setting;
use App\Models\testimoni;

function get_setting_value($key)
{
    $data = setting::where ('key',$key)->first();
    if(isset($data->value)){
        return $data->value;
    } else{
        return 'empty';
    }
}
function get_section_data($key)
{
    $data = section::where ('post_as',$key)->first();
    if($data){
        return $data;
    }
    else{
        return 'empty';
    }
}
function get_project()
{
    $data = project::all();
    return $data;
}


function get_testimonis()
{
    $data = testimoni::all();
    return $data;
}