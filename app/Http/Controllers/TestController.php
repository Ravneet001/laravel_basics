<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index($fn = null, $ln = null, $age = null)
    {
        echo 'Hello ' . $fn . ' ' . $ln. ' ' . $age;
    }

    public function foo()
    {
        echo  $this->_sayHello();
    }

    private function _sayHello()
    {
        return 'Hello';
    }

    public function meetToInder()
    {  
        $this->_waitForTwoSeconds();
        return redirect()->route('meet.to.ravneet');
    }

    public function meetToRavneet()
    {
        echo 'Met with Ravneet';
    }

    private function _waitForTwoSeconds()
    {
        sleep(2);
    }








}
