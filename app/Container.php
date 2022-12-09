<?php
namespace App;
class Container {
    protected $binding = [];
    public function bind($key,$value){
        $this->binding[$key]=$value;
    }

    public function get($key){
        return $this->binding[$key];
    }

    public function resolve($key){
        return call_user_func($this->binding[$key]);
    }
}
