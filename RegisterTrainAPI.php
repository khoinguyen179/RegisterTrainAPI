<?php

if(!defined("WHMCS")){
    die("This file cannot be accessed directly");
}

use WHMCS\Database\Capsule;
function RegisterTrainAPI_config()
{
    return[
        'name' => 'Vietnix Register Train API Module',
        'description' => 'Register Module for Customer us e API',
        'version' => '1.0',
        'author' => 'Vietnix',
    ];
}

function RegisterTrainAPI_activate(){
    try {
        Capsule::schema()->create("tblTokens", function ($table) {
            $table->increments("id");
            $table->string("token");
        });
    }
    catch (Exception $e){
        return [
            'status' => 'error',
            'message' => 'Không thể tạo bảng'
        ];
    }
}