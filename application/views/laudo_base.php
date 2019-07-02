<?php 
/*$this->load->view('includes');
$this->load->view('laudo_template/header');

//$this->load->view('laudo_template/menu');
if(isset($view_pagina)):
    $this->load->view('laudo_views/'.$view_pagina);
endif;
$this->load->view('laudo_template/footer');*/


?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
		<?php include 'includes.php';?>
        <title><?php echo $page_title;?> | <?php echo $system_title;?></title>
    </head>
    
    
<body>
    <?php include 'header.php';?>
    <?php //include $this->session->userdata('login_type').'/navigation.php';?>
	<?php include 'laudo_views/navigation.php';?>
    <div class="main-content">
		<?php include 'page_info.php';?>
        <div class="container-fluid padded">
            <?php //include $this->session->userdata('login_type').'/'.$page_name.'.php';?>
			<?php include 'laudo_views/'.$page_name.'.php';?>
        </div>        
	<?php include 'footer.php';?>
    </div>
    
</body>
</html>
