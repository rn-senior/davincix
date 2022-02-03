<?php 
   include("../partial/header.php");
?>
<style>
   input[type=text], select, textarea {
     width: 100%; /* Full width */
     padding: 12px; /* Some padding */ 
     border: 1px solid #ccc; /* Gray border */
     border-radius: 4px; /* Rounded borders */
     box-sizing: border-box; /* Make sure that padding and width stays in place */
     margin-top: 6px; /* Add a top margin */
     margin-bottom: 16px; /* Bottom margin */
     resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
   }

   /* Style the submit button with a specific background color etc */
   input[type=submit] {
     background-color: #0063ff;
     color: white;
     padding: 12px 20px;
     border: none;
     border-radius: 4px;
     cursor: pointer;
   }

   /* When moving the mouse over the submit button, add a darker green color */
   input[type=submit]:hover {
     background-color: #0058e3;
   }

   /* Add a background color and some padding around the form */
   .contact-container {
     border-radius: 5px;
     background-color: #f2f2f2;
     padding: 20px;
   }
</style>
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
                  <div class = "col-md-6">
                     <h3 class="list-with-image__headline x-title-2">
                        Phone: 248-875-7114
                     </h3>
                     <h3 class="list-with-image__headline x-title-2">
                        E-mail: projects@damundi.com
                     </h3>
                  </div>

                  <div class = "col-md-6">
                     <div class="contact-container">
                       <form action="contact.php" method="post">

                         <label for="fname">First Name</label>
                         <input type="text" id="fname" name="name" required placeholder="Your name..">

                         <label for="lname">Email</label>
                         <input type="text" id="email" name="email" required placeholder="Your email..">


                           <label for="lname">Phone</label>
                           <input type="text" id="phone" name="phone" required placeholder="Your phone number..">

                         <label for="subject">About Project</label>
                         <textarea id="subject" name="subject" required placeholder="Write about your project" style="height:200px"></textarea>

                         <input type="submit" value="Submit">

                       </form>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>
<?php 
   include("../partial/footer.php");
?>
<script type="text/javascript" src="../static/bundles/views/culture.a468487c7caa119f3897.js" ></script>
