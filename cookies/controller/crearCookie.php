<?

function crearCookie($cookie_name,$cookie_cognom){
     setcookie($cookie_name, $cookie_cognom, time() + (86400 * 30), "/");
}
?>