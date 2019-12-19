<?php
namespace app\home;

use denha\HttpResource;

class Resource
{
    public function method(){
        print_r(HttpResource::$request);
    }

    public function get(){
    	print_r(HttpResource::$request['params']['get']);
    }

    public function post(){
    	print_r(HttpResource::$request['params']['post']);
    }

    public function put(){
    	print_r(HttpResource::$request['params']['put']);
    }

    public function file(){
    	print_r(HttpResource::$request['params']['file']);
    }
}