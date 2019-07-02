<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <style>
  @import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");
  body{background: -webkit-linear-gradient(to bottom, #005566, #005566);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #005566,#005566);}
.login-block{
    background: #18778B;  /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom, #18778B, #005566);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #18778B,#005566); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
float:left;
width:100%;
padding : 50px 0;
}
.banner-sec{background:url(<?php echo base_url(); ?>assets/css/login/img_medico.jpeg)  no-repeat left bottom; background-size:cover; min-height:500px; border-radius: 0 10px 10px 0; padding:0;}
.container{background:#fff; border-radius: 10px; box-shadow:15px 20px 0px rgba(0,0,0,0.1);}
.carousel-inner{border-radius:0 10px 10px 0;}
.carousel-caption{text-align:left; left:5%;}
.login-sec{padding: 50px 30px; position:relative;}
.login-sec .copy-text{position:absolute; width:80%; bottom:20px; font-size:13px; text-align:center;}
.login-sec .copy-text i{color:#005566;}
.login-sec .copy-text a{color:#E36262;}
.login-sec h2{margin-bottom:30px; font-weight:800; font-size:30px; color: #005566;}
.login-sec h2:after{content:" "; width:200px; height:5px; background:#005566; display:block;
margin-top:20px; border-radius:3px; margin-left:auto;margin-right:auto}
.btn-login{background: #18778B; color:#fff; font-weight:600;}
.banner-text{width:70%; position:absolute; bottom:40px; padding-left:20px;}
.banner-text h2{color:#fff; font-weight:600;}
.banner-text h2:after{content:" "; width:100px; height:5px; background:#FFF; display:block; margin-top:20px; border-radius:3px;}
.banner-text p{color:#fff;}
  </style>
  
	 <link href="<?php echo base_url(); ?>assets/css/login/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="<?php echo base_url(); ?>assets/css/login/jquery-1.11.1.min.js"></script> 
	
	<!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<section class="login-block">
    <div class="container">
	<div class="row">
		<div class="col-md-4 login-sec">
		    <h2 class="text-center">Laudo Médico</h2>
		    <form class="login-form" action="/login/verificar" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1" class="text-uppercase">Usuário</label>
    <input type="text" class="form-control" placeholder="Admin" disabled>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="text-uppercase">Senha</label>
    <input type="password" class="form-control" placeholder="*******" disabled>
  </div>
  
  
    <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input" checked disabled>
      <small>Lembra usuário</small>
    </label>
    <button type="submit" class="btn btn-login float-right">Acessar</button>
  </div>
  
</form>
<div class="copy-text">Todos os direitos reservados <i class="fa fa-heart"></i> 2019</div>
		</div>
		<div class="col-md-8 banner-sec">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 <!--<ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  </ol>-->
            <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="<?php echo base_url(); ?>assets/css/login/img_medico.jpeg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <!--<h2>Laudo Medico Master</h2>-->
        </div>	
  </div>
    </div>
            </div>	   
		    
		</div>
	</div>
</div>
</section>

