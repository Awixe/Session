<?php
namespace Awixe\Module\Session;
class Handler {
    public function set(string $name, $value = null) {
        if (!is_null($value)) {
            $_SESSION[$name] = $value;
        }
    }
    public function get(string $name, $defaultReturnValue = null) {
        if (isset($_SESSION[$name])) {
            return $_SESSION[$name];
        }
        return $defaultReturnValue;
    }
    public function del(string $name) {
        if (isset($_SESSION[$name])) {
            unset($_SESSION[$name]);
        }
    }
}
?>
