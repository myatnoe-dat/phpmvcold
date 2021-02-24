<?php

    class AuthToken{
        public static function authorizePath()
        {
            if(isset($_COOKIE['CSRFtoken']))
            {
                header("Location: /");
            }
        }
    }


?>