<?php
class Router{
    public static function add($route, $controllerAction) {
        // Define the logic to add routes here
    }
}
Router::add('/', 'HomeController@index');
Router::add('/Login', 'LoginController@index');
Router::add('/forgetpassword', 'ForgetPasswordController@index');
Router::add('/Dashboard', 'DashboardController@index');
Router::add('/forgetpassword', 'ForgetPassword@index');
Router::add('/error', 'ErrorController@index');
Router::add('/userinfo', 'UserInfoController@index');
?>