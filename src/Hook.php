<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Shridhar\Hooks;

require_once __DIR__ . "/php-hooks.php";

/**
 * Description of Hook
 *
 * @author shrid
 */
class Hook {

    static $hooks;

    public static function __callStatic($name, $arguments) {
        global $hooks;
        return call_user_func_array([$hooks, $name], $arguments);
    }

}
