<?php 


if(isset($_SESSION['user_admin'])){
?>

<section>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Navbar</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $url_sitio; ?>logout" >LogOut</a>
      </li>
    </ul>

  </div>
</nav>
</section>

<section>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-md-12 text-center">
                    <h1>Mi cuenta</h1>
            </div>
        </div>
    </div>
</section>
<?php
}else{
    unset($_SESSION['user_admin']);
        
    session_destroy();
    header("Location: ".$url_sitio."acceder");
    
}

?>