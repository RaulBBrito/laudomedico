<div class="container-fluid padded">
	<div class="row-fluid">
        <div class="span30">
            <!-- find me in partials/action_nav_normal -->
            <!--big normal buttons-->
            <div class="action-nav-normal">
                <div class="row-fluid">
                    <div class="span2 action-nav-button">
                        <a href="<?php echo base_url();?>index.php?admin/manage_patient">
                        <i class="icon-columns"></i>
                        <span>Agenda<?php //echo get_phrase('patient');?></span>
                        </a>
                    </div>
                    <div class="span2 action-nav-button">
                        <a href="<?php echo base_url();?>index.php?admin/manage_doctor">
                        <i class="icon-user-md"></i>
                        <span>Atendimento<?php //echo get_phrase('doctor');?></span>
                        </a>
                    </div>
                    <div class="span2 action-nav-button">
                        <a href="<?php echo base_url();?>index.php?admin/manage_nurse">
                        <i class="icon-beaker"></i>
                        <span>Anamnese<?php //echo get_phrase('nurse');?></span>
                        </a>
                    </div>
                    <div class="span2 action-nav-button">
                        <a href="<?php echo base_url();?>index.php?admin/manage_pharmacist">
                        <i class="icon-medkit"></i>
                        <span>Avaliações<?php //echo get_phrase('pharmacist');?></span>
                        </a>
                    </div>
                    <div class="span2 action-nav-button">
                        <a href="<?php echo base_url();?>index.php?admin/manage_laboratorist">
                        <i class="icon-plus-sign-alt"></i>
                        <span>Exames<?php //echo get_phrase('laboratorist');?></span>
                        </a>
                    </div>
                    <div class="span2 action-nav-button">
                        <a href="<?php echo base_url();?>index.php?admin/manage_laboratorist">
                        <i class="icon-sitemap"></i>
                        <span>Finalizar<?php //echo get_phrase('laboratorist');?></span>
                        </a>
                    </div>
                </div>
                
                
            </div>
        </div>
        <!---DASHBOARD MENU BAR ENDS HERE-->
    </div>
    <hr />
    <div class="row-fluid">
    
    	<!-----CALENDAR SCHEDULE STARTS-->
        <div class="span6">
            <div class="box">
                <div class="box-header">
                    <div class="title">
                        <i class="icon-calendar"></i> <?php //echo get_phrase('calendar_schedule');?>
                    </div>
                </div>
                <div class="box-content">
                    <div id="schedule_calendar">
                    </div>
                </div>
            </div>
        </div>
    	<!-----CALENDAR SCHEDULE ENDS-->
        
    	<!-----NOTICEBOARD LIST STARTS-->
        <div class="span6">
            <div class="box">
                <div class="box-header">
                    <span class="title">
                        <i class="icon-reorder"></i> <?php //echo get_phrase('noticeboard');?>
                    </span>
                </div>
                <div class="box-content scrollable" style="max-height: 500px; overflow-y: auto">
                
                <div class="box-section news with-icons">
                        <div class="avatar blue">
                            <i class="icon-tag icon-2x"></i>
                        </div>
                        <div class="news-time">
                            <span>23</span> Jul                        </div>
                        <div class="news-content">
                            <div class="news-title">
                                Atendimento                            </div>
                            <div class="news-text">
                                 Descrição do atendimento                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    	<!-----NOTICEBOARD LIST ENDS-->
    </div>
</div>

  
  
  <script>
  $(document).ready(function() {

    // page is now ready, initialize the calendar...

    $("#schedule_calendar").fullCalendar({
            header: {
                left: "prev,next",
                center: "title",
                right: "month,agendaWeek,agendaDay"
            },
            editable: 0,
            droppable: 0,
            events: [
					<?php 
					
                    $notices	=	[];//$this->db->get('noticeboard')->result_array();
                    foreach($notices as $row):
                    ?>
					{
						title: "<?php echo $row['notice_title'];?>",
						start: new Date(<?php echo date('Y',$row['create_timestamp']);?>, <?php echo date('m',$row['create_timestamp'])-1;?>, <?php echo date('d',$row['create_timestamp']);?>),
						end:	new Date(<?php echo date('Y',$row['create_timestamp']);?>, <?php echo date('m',$row['create_timestamp'])-1;?>, <?php echo date('d',$row['create_timestamp']);?>)  
            		},
					<?php
					endforeach;
					?>
					]
        })

});
  </script>