<?php

session_start();

session_destroy();

header("Location: /ProjetoIntegradorFilmes/index.php");

exit;
?>