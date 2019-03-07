<?php
session_start();
  if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Por último, destrói a sessão
session_destroy();

echo "Obrigado por usar o Sistema de mesnageiro da CBPC";
?><br><br>
<a href="index.php"><button>voltar</button></a>