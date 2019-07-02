<?php 
//$this->load->view('includes');

/*if(isset($pagina_developer)):
	$this->load->view('laudo_template/header');
endif;
//$this->load->view('laudo_template/menu');
if(isset($view_pagina)):
    $this->load->view('laudo_views/'.$view_pagina);
endif;
$this->load->view('laudo_template/footer');
*/


//EXCLUIR DESENVOLVEDOR
if(isset($pagina_developer)):
    $this->load->view('dev/laudo_template/header');
    $this->load->view('dev/laudo_views/'.$view_pagina);
    $this->load->view('dev/laudo_template/footer');
endif;
?>
