<?php

    //pound conversions
    function convertFromPounds($value, $measurmentType){
        switch($measurmentType){
            case "kilograms":
            //pounds to kilograms
                $result = $value / 2.205;
                $_SESSION["result"] = "$value pounds is equal to $result kilograms";
                break;
            //pounds to ounces
            case "ounces":
                $result = $value * 16;
                $_SESSION["result"] = "$value pounds is equal to $result ounces";
                break;
            //pounds to stone
            case "stone" :
                $result = $value / 14;
                $_SESSION["result"] = "$value pounds is equal to $result stone";
                break;
            //pounds to us ton
            case "us ton" : 
                $result = $value / 2000;
                $_SESSION["result"] = "$value pounds is equal to $result $measurmentType";
                break;
                //stone to 
            default: $_SESSION["result"] = "Please enter proper measurments";
        }
    }
    
    //killogram conversions
    function convertFromKilograms($value, $measurmentType){
        $String = "$value kilograms is equal to";
        switch($measurmentType){
            //kilograms to pounds
            case "pounds":
                $result = $value * 2.205;
                $_SESSION["result"] = "$String $result $measurmentType";
                break;
            //kilograms to ounces
            case "ounces":
                $result = $value * 35.274;
                $_SESSION["result"] = "$String $result $measurmentType";
                break;
            //kilograms to stone
            case "stone" : 
                $result = $value / 6.35;
                $_SESSION["result"] = "$String $result $measurmentType";
                break;
            //kilograms to us ton
            case "us ton" : 
                $result = $value / 907;
                $_SESSION["result"] = "$String $result $measurmentType";
                break;
            default: $_SESSION["result"] = "Please enter proper measurments";
        }
    }

    function convertFromOunces($value, $measurmentType){
        switch($measurmentType){
            //ounces to pounds
            case "pounds":
                $result = $value / 16;
                $_SESSION["result"] = "$value ounces is equal to $result $measurmentType";
                break;
            // ounces to kilograms
            case "kilograms" : 
                $result = $value / 35.274;
                $_SESSION["result"] = "$value ounces is equal to $result $measurmentType";
                break;
            // ounces to stone
            case "stone" : 
                $result = $value / 224;
                $_SESSION["result"] = "$value ounces is equal to $result $measurmentType";
                break;
            // ounces to us ton
            case 'us ton':
                $result = $value / 32000;
                $_SESSION["result"] = "$value ounces is equal to $result $measurmentType";
                break;
            default : $_SESSION["result"] = "please enter proper measurments";
        }
    }

    function convertFromStone($value, $measurmentType){
        switch($measurmentType){
            case "pounds" :
                //stone to pounds 
                $result = $value * 14;
                $_SESSION["result"] = "$value stone is equal to $result $measurmentType";
                break;
            case "kilograms" :
                //stone to  kilograms
                $result = $value * 6.35;
                $_SESSION["result"] = "$value stone is equal to $result $measurmentType";
                break;
            case "ounces" :
                //stone to ounces 
                $result = $value * 244;
                $_SESSION["result"] = "$value stone is equal to $result $measurmentType";
                break;
            case "us ton" :
                //stone to us ton
                $result = $value / 143;
                $_SESSION["result"] = "$value stone is equal to $result $measurmentType";
                break;
            default: $_SESSION["result"] = "please enter proper measurments";
        }
    }

    function convertFromUSTon($value, $measurmentType){
        switch($measurmentType){
            case "pounds" :
                //us ton to pounds 
                $result = $value * 2000;
                $_SESSION["result"] = "$value us tons is equal to $result $measurmentType";
                break;
            case "kilograms" :
                //us ton to kilograms
                $result = $value * 907;
                $_SESSION["result"] = "$value us tons is equal to $result $measurmentType";
                break;
            case 'ounces':
                //us ton to ounces
                $result = $value * 32000;
                $_SESSION["result"] = "$value us tons is equal to $result $measurmentType";
                break;
            case "stone" :
                //us ton to  stone
                $result = $value * 143;
                $_SESSION["result"] = "$value us tons is equal to $result $measurmentType";
                break;
            default: $_SESSION["result"] = "please enter proper measurments";
        }
    }
?>