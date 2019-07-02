<div class="sidebar-background">
	<div class="primary-sidebar-background">
	</div>
</div>
<div class="primary-sidebar">
	<!-- Main nav -->
    <br />
    <div style="text-align:center;">
    	<a href="<?php echo base_url();?>">
        	<img src="<?php echo base_url();?>uploads/logo.png"  style="max-height:100px; max-width:100px;"/>
        </a>
		<!-- ESCONDER MENU
			<div class="sidebar-collapse" style="">
            <a href="#" class="sidebar-collapse-icon with-animation">
				<i class="icon-reorder"></i>
            </a>
        </div>-->
    </div>
   	<br />
	<ul class="nav nav-collapse collapse nav-collapse-primary">
	<li class="dark-nav active">
			<span class="glow"></span>
				<a href="<?php echo base_url();?>index.php?admin/manage_department" >
					<i class="icon-desktop icon-2x"></i>
					<span>Dashboard</span>
				</a>
		</li>
        
        <!------dashboard----->
		<li class="dark-nav">
			<span class="glow"></span>
            <a class="accordion-toggle " data-toggle="collapse" href="#view_hospital_submenu" >
                <i class="icon-columns icon-2x"></i>
                <span>Agenda <i class="icon-caret-down" style="float:right; margin:6px 12px 0 0;"></i></span>
            </a>
            
            <ul id="view_hospital_submenu" class="collapse">
                <li class="">
                  <a href="<?php echo base_url();?>agendados">
                      <i class="icon-exchange"></i> Agendados 
                  </a>
                </li>
				<li class="">
                  <a href="<?php echo base_url();?>sala-espera">
                      <i class="icon-exchange"></i> Sala de Espera 
                  </a>
                </li>
				</ul>
		</li>
        
        <!------department----->
		<li class="<?php if($page_name == 'manage_department')echo 'dark-nav active';?>">
			<span class="glow"></span>
				<a href="<?php echo base_url();?>" >
					<i class="icon-user-md icon-2x"></i>
					<span>Atendimento</span>
				</a>
		</li>
        
        <!------doctor----->
		<li class="<?php if($page_name == 'manage_doctor')echo 'dark-nav active';?>">
			<span class="glow"></span>
				<a href="<?php echo base_url();?>anamnese" >
					<i class="icon-beaker icon-2x"></i>
					<span>Anamnese</span>
				</a>
		</li>
        
        <!------Avaliações----->
		<li class="dark-nav">
			<span class="glow"></span>
            <a class="accordion-toggle " data-toggle="collapse" href="#view_avaliacao_submenu" >
                <i class="icon-medkit icon-2x"></i><!--icon-user-->
                <span>Avaliações <i class="icon-caret-down" style="float:right; margin:6px 12px 0 0;"></i></span>
            </a>
            
            <ul id="view_avaliacao_submenu" class="collapse">
                <li class="">
                  <a href="<?php echo base_url();?>fisica-geral">
                      <i class="icon-exchange"></i> Fisica Geral 
                  </a>
                </li>
				<li class="">
                  <a href="<?php echo base_url();?>oftalmologica">
                      <i class="icon-exchange"></i> Oftalmológica 
                  </a>
                </li>
				<li class="">
                  <a href="<?php echo base_url();?>otorrino">
                      <i class="icon-exchange"></i> Otorrinolaringológica 
                  </a>
                </li>
				<li class="">
                  <a href="<?php echo base_url();?>cardiorespiratoria">
                      <i class="icon-exchange"></i> Cardiorrespiratória 
                  </a>
                </li>
				<li class="">
                  <a href="<?php echo base_url();?>neurologica">
                      <i class="icon-exchange"></i> Neurológica 
                  </a>
                </li>
				<li class="">
                  <a href="<?php echo base_url();?>aparelho-locomotor">
                      <i class="icon-exchange"></i> Aparelho Locomotor 
                  </a>
                </li>
				<li class="">
                  <a href="<?php echo base_url();?>disturbio-sono">
                      <i class="icon-exchange"></i> Distúrbios do Sono 
                  </a>
                </li>
			</ul>
		</li>
        
        <!------nurse----->
		<li class="<?php if($page_name == 'manage_nurse')echo 'dark-nav active';?>">
			<span class="glow"></span>
				<a href="<?php echo base_url();?>index.php?admin/manage_nurse" >
					<i class="icon-sitemap icon-2x"></i>
					<span>Finalizar</span>
				</a>
		</li>

		<!------manage own profile--->
		<li class="<?php if($page_name == 'manage_profile')echo 'dark-nav active';?>">
			<span class="glow"></span>
				<a href="<?php echo base_url();?>login" >
					<i class="icon-lock icon-2x"></i>
					<span>Sair</span>
				</a>
		</li>
		
	</ul>
	
</div>