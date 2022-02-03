<?php
	if($_POST) {
	    $visitor_name = "";
	    $visitor_email = "";
	    $visitor_phone = "";
	    $visitor_message = "";
	    $email_body = "<div>";
	     
	    if(isset($_POST['name'])) {
	        $visitor_name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
	        $email_body .= "<div>
	                           <label><b>Visitor Name:</b></label>&nbsp;<span>".$visitor_name."</span>
	                        </div>";
	    }

	    if(isset($_POST['phone'])) {
	        $visitor_phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
	        $email_body .= "<div>
	                           <label><b>Visitor Phone:</b></label>&nbsp;<span>".$visitor_phone."</span>
	                        </div>";
	    }

	    if(isset($_POST['email'])) {
	        $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
	        $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
	        $email_body .= "<div>
	                           <label><b>Visitor Email:</b></label>&nbsp;<span>".$visitor_email."</span>
	                        </div>";
	    }
	     
	    if(isset($_POST['subject'])) {
	        $visitor_message = htmlspecialchars($_POST['subject']);
	        $email_body .= "<div>
	                           <label><b>Visitor Message:</b></label>
	                           <div>".$visitor_message."</div>
	                        </div>";
	    }

	    $recipient = "projects@damundi.com";
	     
	    $email_body .= "</div>";

	    $headers  = 'MIME-Version: 1.0' . "\r\n"
	    .'Content-type: text/html; charset=utf-8' . "\r\n"
	    .'From: ' . $visitor_email . "\r\n";
	     
	    if(mail("projects@damundi.com", "New Project Request", $email_body, $headers)) {
	        $status = true;
	    } else {
	        $status = false;
	    }
?>
<?php 
   include("../partial/header.php");
?>
	<main>
         <section class="block block--our-values">
            <div class="container">
               <div class="row" style="margin-top: 50px;">
                  <div class="col-sm-8 col-sm-offset-2 col-md-12 col-md-offset-0">
                     <div class="section-heading center-grid section-heading--large-margin">
                        <h4 class="section-heading__headline">Thank you</h4>
                     </div>
                  </div>
               </div>
            </div>
            <div class="container">
               <div class="row" style="margin-top: 50px;margin-bottom: 50px;">
                  <div class = "col-md-12">
                     <h3 class="list-with-image__headline x-title-2 text-center">
	        			<p>We will contact you soon.</p>
                     </h3>
                  </div>
               </div>
            </div>
         </section>
      </main>
<?php 
   include("../partial/footer.php");
?>
<?php
	} else {
?>
	
<?php 
   include("../partial/header.php");
?>
	<main>
         <section class="block block--our-values">
            <div class="container">
               <div class="row" style="margin-top: 50px;">
                  <div class="col-sm-8 col-sm-offset-2 col-md-12 col-md-offset-0">
                     <div class="section-heading center-grid section-heading--large-margin">
                        <h4 class="section-heading__headline">Contact us</h4>
                     </div>
                  </div>
               </div>
            </div>
            <div class="container">
               <div class="row" style="margin-top: 50px;margin-bottom: 50px;">
                  <div class = "col-md-12">
                     <h3 class="list-with-image__headline x-title-2 text-center">
	        			<p>Sorry, we are unable to send email, please try again later!</p>
                     </h3>
                  </div>
               </div>
            </div>
         </section>
      </main>
<?php 
   include("../partial/footer.php");
?>
<?php 		
	}
?>