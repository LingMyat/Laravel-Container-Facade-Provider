<?php
namespace App;
class Test{
    protected $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function something(){
        return 'Here is something';
    }

    public function excute(){
        dd('excution work');
    }

    public function writeName(){
        dd($this->name);
    }
}
