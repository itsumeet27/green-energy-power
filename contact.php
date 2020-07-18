<?php include('includes/header.php'); ?>

  <div style="margin-top: 7.5em">
    <img src="img/Terms & Condition.jpg" class="img-responsive img-fluid">
  </div>

  <section class="container">
  	<!--Section: Contact v.2-->
	<section class="mb-4 mt-5">

	    <h2 class="h2-responsive text-center pb-4 font-weight-bold" style="color: #555">CONTACT US</h2>
	    <p class="text-center w-responsive mx-auto mb-5" style="font-size: 18px">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
	        a matter of hours to help you.</p>

	    <div class="row">
	        <div class="col-md-9 mb-md-0 mb-5">
	            <form id="contact-form" name="contact-form" action="mail.php" method="POST">
	                <div class="row">
	                    <div class="col-md-6">
	                        <div class="md-form mb-0">
	                            <input type="text" id="name" name="name" class="form-control">
	                            <label for="name" class="">Your name</label>
	                        </div>
	                    </div>
	                    <div class="col-md-6">
	                        <div class="md-form mb-0">
	                            <input type="text" id="email" name="email" class="form-control">
	                            <label for="email" class="">Your email</label>
	                        </div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="md-form mb-0">
	                            <input type="text" id="subject" name="subject" class="form-control">
	                            <label for="subject" class="">Subject</label>
	                        </div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-md-12">

	                        <div class="md-form">
	                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
	                            <label for="message">Your message</label>
	                        </div>
	                    </div>
	                </div>
	            </form>
	            <div class="text-center text-md-left">
	                <a class="btn" onclick="validateForm();" style="background: #004a6e; color: #fff">Send</a>
	            </div>
	            <div class="status"></div>
	        </div>

	        <div class="col-md-3 text-center">
	            <ul class="list-unstyled mb-0">
	                <li><i class="fas fa-map-marker-alt fa-2x"></i>
	                    <p class="pt-3">San Francisco, CA 94126, USA</p>
	                </li>

	                <li><i class="fas fa-phone mt-4 fa-2x"></i>
	                    <p class="pt-3">+ 91 99999 99999</p>
	                </li>

	                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
	                    <p class="pt-3">contact@gmail.com</p>
	                </li>
	            </ul>
	        </div>
	    </div>
	</section>
  </section>
  <script type="text/javascript">
 	function validateForm() {
 		document.getElementById('status').innerHTML = "Sending...";
		formData = {
			'name'     : $('input[name=name]').val(),
			'email'    : $('input[name=email]').val(),
			'subject'  : $('input[name=subject]').val(),
			'message'  : $('textarea[name=message]').val()
		};
		$.ajax({
			url : "mail.php",
			type: "POST",
			data : formData,
			success: function(data, textStatus, jqXHR){
				$('#status').text(data.message);
				if (data.code) //If mail was sent successfully, reset the form.
				$('#contact-form').closest('form').find("input[type=text], textarea").val("");
			},
			error: function (jqXHR, textStatus, errorThrown){
				$('#status').text(jqXHR);
			}
		});
	}
  </script>

 <?php include('includes/footer.php'); ?>  