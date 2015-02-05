
<div class="container center offset-top secondary-banner">
	<img src="<?=base_url();?>assets/img/contact_banner.png" alt="contact_banner.jpg">
</div>

<div class="container app-container remove-gutters">
	<div class="col-xs-12 remove-gutters caption">
    	<h1>24 HOUR  7 DAYS A WEEK SERVICE</h1>
        <h3>
        	Contact DeMenna Cranes anytime to discuss your project needs and for more<br>
            information on our world class Crane Trucks/High Rail Crane Trucks Fleet
		</h3>
    </div>
    
    <div class="clear"></div>
    
    <div class="secondary">
    	<div class="col-xs-7">
        	<p>
            	Contact our team via the below webform for a fast response 24-7<br>
                * Denotes required field
            </p>
            <form id="contact-form" class="form-horizontal app-form-hz">
            	<div class="form-group">
                	<label class="col-xs-3 control-label">Name *</label>
                    <div class="col-xs-9">
                    	<input type="text" name="name" class="form-control" placeholder="enter your name">
                    </div>
                </div>
                <div class="form-group">
                	<label class="col-xs-3 control-label">Company</label>
                    <div class="col-xs-9">
                    	<input type="text" name="company" class="form-control" placeholder="enter your company">
                    </div>
                </div>
                <div class="form-group">
                	<label class="col-xs-3 control-label">Phone *</label>
                    <div class="col-xs-9">
                    	<input type="text" name="phone" class="form-control" placeholder="enter your phone">
                    </div>
                </div>
                <div class="form-group">
                	<label class="col-xs-3 control-label">Email *</label>
                    <div class="col-xs-9">
                    	<input type="text" name="email" class="form-control" placeholder="enter your email address">
                    </div>
                </div>
                <div class="form-group">
                	<label class="col-xs-3 control-label">Message</label>
                   	<div class="col-xs-9">
                    	<textarea class="form-control" rows="4" name="message" placeholder="what do you want to discuss?"></textarea>
                    </div>
                </div>
                <div class="form-group">
                	<label class="col-xs-3 control-label">Enter Code *</label>
                    <div class="col-xs-9">
                    	<div class="col-xs-6 remove-gutters">
	                    	<?php echo $captcha['image'];?>
                        </div>
                        <div class="col-xs-6 remove-gutters">
                        	<input type="text" name="captcha" class="form-control" placeholder="enter code">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                	<label class="col-xs-3 control-label">&nbsp;</label>
                    <div class="col-xs-9">
                    	<button id="send-msg" type="button" class="btn btn-white-txt">submit</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-xs-5">
        	<h4>CONECT WITH LUKE DEMENNA</h4>
            <?php $this->load->view('common/linkedin');?>
            
            <h4>DEMENNA CRANES</h4>
			<span class="slogan">WHERE SERVICE & RELIABILITY COUNTS 24/7</span>
			
            <div class="address">
                <h4>HEAD OFFICE</h4>
                <p>
                    5 Green St, Thomastown <br>
                    Vic AUstralia 3074
                </p>
            	<ul class="fa-ul">
                	<li><i class="fa fa-phone-square"></i> 03 9465 4118</li>
                    <li><i class="fa fa-fax"></i> 03 9466 1294</li>
                    <li><i class="fa fa-envelope-o"></i> team@demennacranes.com.au</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script>
$('#send-msg').click(function(){
	$('#contact-result').hide();
	$.ajax({
		url: '<?=base_url();?>content/sendcontact',
		data: $('#contact-form').serialize(),
		type:'POST',
		dataType:'JSON',
		success:function(data){
			var form_id = 'contact-form';
			if (!data.ok) { 
				// Invalid
				var errors = data.errors;
				//reset error class in form as they will need to be re validated
				remove_error_class(form_id);
				mark_errors(form_id,errors);
			}else{
				$('#contact-result').html('Your message was successfully sent.').removeClass('bg-danger').addClass('bg-success').show();
				remove_error_class(form_id);
				$('#'+form_id)[0].reset();
			}
		}
	});
	
});

function mark_errors(form_id,errors){
	var msg = '';
	errors.forEach(function(e){
		$('#' + form_id).find('[name="' + e.field + '"]').parent().addClass('has-error');
		msg += e.msg+'<br>';
		$('#contact-result').html(msg).addClass('bg-danger').show();
	});	
}

function remove_error_class(form_id){
	$('#'+form_id+' input,#'+form_id+' textarea,#'+form_id+' select,#'+form_id+' date#'+form_id+' email').each(function(){
		$(this).parent().removeClass('has-error');
	});
}

</script>