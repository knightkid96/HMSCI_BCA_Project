<div class="box">

	<div class="box-header">

    

    	<!------CONTROL TABS START------->

		<ul class="nav nav-tabs nav-tabs-left">

			<li class="active">

            	<a href="#add" data-toggle="tab"><i class="icon-plus"></i>

					<?php echo ('Verify Payment');?>

                    	</a></li>

		</ul>

    	<!------CONTROL TABS END------->

        

	</div>

	<div class="box-content padded">

		<div class="tab-content">

        	

			<!----CREATION FORM STARTS---->

			<div class="tab-pane box active" id="add" style="padding: 5px">

                <div class="box-content">

                    <?php echo form_open('accountant/manage_invoice/create' , array('class' => 'form-horizontal validatable'));?>

                        <div class="padded">

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Patient');?></label>

                                <div class="controls">

                                    <select class="chzn-select" name="patient_id">

										<?php 

										$this->db->order_by('account_opening_timestamp' , 'asc');

										$patients	=	$this->db->get('patient')->result_array();

										foreach($patients as $row):

										?>

                                        	<option value="<?php echo $row['patient_id'];?>"><?php echo $row['name'];?></option>

                                        <?php

										endforeach;

										?>

									</select>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Title');?></label>

                                <div class="controls">

                                    <input type="text" name="title" value=""/>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Amount');?></label>

                                <div class="controls">

                                    <input type="text" name="amount" value=""/>

                                </div>

                            </div>

                             <div class="control-group">

                                <label class="control-label"><?php echo ('Method');?></label>

                                <div class="controls">

                                    <input type="text" name="method" value=""/>

                                </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Description');?></label>

                                <div class="controls">

                                    <div class="box closable-chat-box">

                                        <div class="box-content padded">

                                                <div class="chat-message-box">

                                                <textarea name="description" id="ttt" rows="5" placeholder="<?php echo ('Add Description');?>"></textarea>

                                                </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Status');?></label>

                                <div class="controls">

                                    <select name="status" class="uniform">

                                       	<option value="paid"><?php echo ('Paid');?></option>

                                       	<option value="unpaid"><?php echo ('Unpaid');?></option>

									</select>

                                </div>

                            </div>

                        </div>

                        <div class="form-actions">

                            <button type="submit" class="btn btn-primary"><?php echo ('Add Invoice');?></button>

                        </div>

                    <?php echo form_close();?>                

                </div>                

			</div>

			<!----CREATION FORM ENDS--->

            

		</div>

	</div>

</div>



