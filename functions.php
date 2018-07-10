<?php
//trim te borra los espacion
//strlen la cantidad de caracteres de un string

function validarDatos($datos) {

	foreach ($datos as $key => $value) {
	$datos[$key] = trim($value);
	}

	$errores = [];

	if (strlen($datos["email"]) == 0) {
		$errores["email"] = "El email es obligatorio";
	} else if (!filter_var($datos["email"], FILTER_VALIDATE_EMAIL) ) {
    	$errores["email"] = "Ingresa un email valido";
  	}

	if (strlen($datos["password"]) < 4 || strlen($datos["password2"]) < 4) {
		$errores["password"] = "Ingresa una contraseña de mas de 4 caracteres";
	} else if($datos["password"] != $datos["password2"]){
		$errores["password"] = "Las contraseñas no son iguales";
	}

	return $errores;
}

function crearUsuario($datos){
  $usuario = [
    "email" => $datos["email"],
    "password" => password_hash($datos["password"],PASSWORD_DEFAULT),
  ];
  return $usuario;

}

function guardarUsuario($usuario){
	$json= json_encode($usuario);
	file_put_contents("usuarios.json",$json . PHP_EOL, FILE_APPEND); 
}

function dameTodos() {
  $contenido = file_get_contents("usuarios.json");

  $usuariosJSON = explode(PHP_EOL, $contenido);

  array_pop($usuariosJSON);

  $usuariosFinal = [];

  foreach ($usuariosJSON as $usuario) {
    $usuariosFinal[] = json_decode($usuario, true);
  }

  return $usuariosFinal;
}

function buscamePorMail($email) {
  $todos = dameTodos();

  foreach ($todos as $usuario) {
    if ($usuario["email"] == $email) {
      return $usuario;
    }
  }

  return NULL;
}

    function login($usuario) {
        //si coinciden los valores...
        $_SESSION["email"] = $usuario["email"];
        //seteamos la cookie
        setcookie("email", $usuario["email"], time()+3600);
    }
    //nuestro controlador de login
    function controlarLogin() {
        //SI ESTA SETEADO el email en nuestra sesion
        if (isset($_SESSION["email"])) {
            //devolveme true
            return true;
        } else {
            //si nos llega un usuario con una cookie
            if (isset($_COOKIE["email"])) {
                //que mi session sea seteada con el mail de esa cookie
                $_SESSION["email"] = $_COOKIE["email"];
                //y devolveme true
                return true;
            } else {
            //ante cualquier otro caso, dame false            
                return false;
            }
        }
    }

    //nuestra funcion para desloguear
    function logout() {
        session_destroy();
        //seteo de cookie con -1 para que "muera" D=
        setcookie("email", "", -1);
    }
 

?>