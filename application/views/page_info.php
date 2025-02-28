        <div class="container-fluid" >
            <div class="row-fluid">
                <div class="area-top clearfix">
                    <div class="pull-left header">
                        <h3 class="title">
                        <i class="icon-info-sign"></i>
                        <?php echo $page_title;?> </h3>
                    </div>
                    <ul class="inline pull-right sparkline-box">
                        <li class="sparkline-row">
                            <h4 class="blue">
                                <span><?php echo ('Doctor');?></span> 
                                <?php echo $this->db->count_all_results('doctor');?>
                            </h4>
                        </li>
                        <li class="sparkline-row">
                            <h4 class="red">
                                <span><?php echo ('Patient');?></span> 
                                <?php echo $this->db->count_all_results('patient');?>
                            </h4>
                        </li>
                        <li class="sparkline-row">
                            <h4 class="green">
                                <span><?php echo ('Nurse');?></span> 
                                <?php echo $this->db->count_all_results('nurse');?>
                            </h4>
                        </li>
                        <li class="sparkline-row">
                            <h4 class="blue">
                                <span><?php echo ('Pharmacist');?></span> 
                                <?php echo $this->db->count_all_results('pharmacist');?>
                            </h4>
                        </li>
                        <li class="sparkline-row">
                            <h4 class="red">
                                <span><?php echo ('Laboratorist');?></span> 
                                <?php echo $this->db->count_all_results('laboratorist');?>
                            </h4>
                        </li>
                        <li class="sparkline-row">
                            <h4 class="green">
                                <span><?php echo ('Accountant');?></span> 
                                <?php echo $this->db->count_all_results('accountant');?>
                            </h4>
                        </li>
                        <li class="sparkline-row">
                            <h4 class="blue">
                                <span><?php echo ('Total number of Beds');?></span> 
                                <?php echo $this->db->count_all_results('bed');?>
                            </h4>
                            <li class="sparkline-row">
                            <h4 class="red">
                                <span><?php echo ('Beds Occupied');?></span> 
                                <?php echo $this->db->count_all_results('bed_allotment');?>
                            </h4>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <!--------FLASH MESSAGES--->
        
		<?php if($this->session->flashdata('flash_message') != ""):?>
        <div class="container-fluid padded">
        	<div class="alert alert-info">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <?php echo $this->session->flashdata('flash_message');?>
            </div>
        </div>
        <?php endif;?>
        
        
        <?php if($this->session->flashdata('flash_message') != ""):?>
 		<script>
			$(document).ready(function() {
				Growl.info({title:"<?php echo $this->session->flashdata('flash_message');?>",text:""})
			});
		</script>
        <?php endif;?>