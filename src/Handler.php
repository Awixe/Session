<?php
namespace Awixe\Module\Session;
class Handler
{
    public function set(string $name)
    {
      
    }
    public function get(string $name)
    {
      
    }
    public function del(string $name)
    {
        if (isset($_SESSION[$name]))
        {
            unset($_SESSION[$name]);
        }
    }
}
?>
