<?php

class trueTestClass
{
    const test_CONSTANT=true;
    public $publicProperty=true;
    private $privateProperty=true;

    public function publicMethod()
    {
        if(true)
            return true;
        else
            return false;

        while(true)
            return true;

        for(true;true;true)
            return true;

        foreach(array(true) as $var)
            return true;

        if(true)
        {
            return true;
        }
        elseif(true)
        {
            return false;
        }
        else
        {
            return false;
        }

        while(true)
        {
            return true;
        }

        for(true;true;true)
        {
            return true;
        }

        foreach(array(true) as $var)
        {
            return true;
        }

		return true;
    }
}
