<?php
require_once '../dao/Roles.dao.php';
  switch ($_GET['a']) {
    case 'ingr':
      $r = new Rol();
      $r->nombre = $_POST['nombre'];
      RolesDAO::ingresarDato($r);
    case 'edit':
      $r = new Rol();
      $r->id = $_POST['id'];
      $r->nombre = $_POST['nombre'];

      break;
  }
  header("Location: ../roles/");
 ?>
