<link rel="stylesheet" href="<?php echo base_url();?>template/css/font.css">
		<!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800">-->
        <link href="<?php echo base_url();?>template/css/bayanno.css" media="screen" rel="stylesheet" type="text/css" />
        <!--[if lt IE 9]>
        <script src="<?php echo base_url();?>template/js/html5shiv.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>template/js/excanvas.js" type="text/javascript"></script>
        <![endif]-->
        <script src="<?php echo base_url();?>template/js/bayanno.js" type="text/javascript"></script>
        
 <style>
        
        .sidebar-collapse {
  position: relative;
  float: right;
  margin-top:14px;
}
.sidebar-collapse a {
    color:#FFF;
  display: inline-block;
  border: 1px solid #FFF;
  text-align: center;
  line-height: 1;
  font-size: 20px;
  font-weight: 300;
  padding: 5px;
  -webkit-border-radius: 3px;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 3px;
  -moz-background-clip: padding;
  border-radius: 3px;
  background-clip: padding-box;
  -moz-transition: all 200ms ease-in-out;
  -o-transition: all 200ms ease-in-out;
  -webkit-transition: all 200ms ease-in-out;
  transition: all 200ms ease-in-out;
}
.sidebar-collapse a:hover,
.sidebar-mobile-menu a:hover {
  background-color: rgba(69, 74, 84, 0.4);
}</style>
        
        <?php
		//////////LOADING SYSTEM SETTINGS FOR ALL PAGES AND ACCOUNTS/////////
		
		$system_name	=	'Laudo Médico';//$this->db->get_where('settings' , array('type'=>'system_name'))->row()->description;
		$system_title	=	'Laudo Médico';//$this->db->get_where('settings' , array('type'=>'system_title'))->row()->description;