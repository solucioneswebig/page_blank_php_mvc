<?php

session_start();

$url_sitio    = ctrRuta();

/*ACCEDER*/
if (isset($_POST['access_admin'])){

$mail = $_POST['mail_admin'];
$obtener_datos = select_one("SELECT * FROM shared_link_admin WHERE mail_admin = '".$mail."'");

$variable = var_dump($obtener_datos);
?>
  <script>alert("<?php echo $variable; ?>");</script>
<?php
  if(password_verify($_POST['pass_admin'], $obtener_datos['pass_admin'])) {
  $_SESSION['user_admin']  = $obtener_datos['id_useradmin'];
  

  header("Location: ".$url_sitio."mi-cuenta");

  }


}
/*ACCEDER*/



$registro = 1;

/*REGISTRAR*/
if ($registro == 1 || isset($_POST["register_admin"])){
    $data = [
        "id_useradmin"    => 0,
        "name_admin"      => "Admin",
        "mail_admin"      => "admin@gmail.com",
        "pass_admin"      => encriptar("Admin1234"),
        "role_admin"      => 1,
        "estatus_admin"   => 1,
        "register_date"   => date("Y-m-d H:i:s")
    ];
    $guardar = insert("shared_link_admin",$data);
}
	/*REGISTRAR*/
