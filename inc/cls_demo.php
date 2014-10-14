<?php
/**
 * @copyright 2014
 * @description: cls_demo
 * @file: cls_demo.php
 * @charset: UTF-8
 * @create: 2014-10-14
 * @version 1.0
**/

class cls_demo{
    public $name = NULL;

    /**
     * @name: get_name
     * @description: get_name
     * @scope: public
     * @return: string
     * @create: 2014-10-14
    **/
    public function get_name(){
        if(is_empty($this -> name)) $this -> name = __CLASS__;
        return $this -> name;
    }

    /**
     * @name: set_name
     * @description: set_name
     * @scope: public
     * @param: string value
     * @return: string
     * @create: 2014-10-14
    **/
    public function set_name($val=NULL){
        if(is_empty($val)) $val = __CLASS__;
        $this -> name = $val;
    }
}
?>