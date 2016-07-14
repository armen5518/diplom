<?php
/**
 * Created by PhpStorm.
 * User: armen5518
 * Date: 09.07.2016
 * Time: 16:13
 */

namespace frontend\vendor;


use yii\base\Component;

class DataColl extends  Component 
{
    public $name;
    public function Arm(){
        return $this->name;
    }

}