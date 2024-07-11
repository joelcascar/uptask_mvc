<?php
namespace Controllers;

use MVC\Router;

class LoginController{
    public static function login(Router $router){
        if($_SERVER["REQUEST_METHOD"] === "POST"){}
        // Render a la vista
        $router->render("auth/login",[
            "titulo" => "iniciar Sesión"
        ]);
    }
    public static function logout(){
        echo "Desde logout";
    }
    public static function crear(Router $router){
        if($_SERVER["REQUEST_METHOD"] === "POST"){}

        // Render a la vista
        $router->render("auth/crear",[
            "titulo" => "Crea tu cuenta en UpTask"
        ]);
      
    }
    public static function olvide(Router $router){
        if($_SERVER["REQUEST_METHOD"] === "POST"){}
        // Mostrar la vista
        $router->render("auth/recuperar-password",[
            "titulo" => "Recuperar contraseña"
        ]);
    }
    public static function reestablecer(Router $router){
        
        if($_SERVER["REQUEST_METHOD"] === "POST"){}
        // Mostrar la vista
        $router->render("auth/reestablecer",[
            "titulo" => "Reestablecer contraseña"
        ]);
    }
    public static function mensaje(Router $router){
        $router->render("auth/mensaje",[
            "titulo" => "Cuenta creada exitosamente"
        ]);
    }
    public static function confirmar(Router $router){
        $router->render("auth/confirmar",[
            "titulo" => "Confirma tu cuenta UpTask"
        ]);
    }
}