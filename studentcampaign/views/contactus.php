 <body>
     <?php include('includes/header.php') ?>
     <div class="contact_box">
         <div class="text">
             <h1 class="contact-head">CONTACT US</h1><br>
         </div>
         <img src="../assets/images/logo/contact.png" class="bg_contact" alt="image">
         <div class="contact-container">
             <div class="contact-form">
                 <label for="name" class="contact-label">Name:</label><br>
                 <input type="text" class="contact-input" id="contact-name"><br>
                 <label for="email" class="contact-label">Email:</label><br>
                 <input type="email" class="contact-input" id="contact-mail"><br>
                 <label for="phone no" class="contact-label">Phone no:</label><br>
                 <input type="tel" class="contact-input" id="contact-ph-no"><br>
                 <label for="text" class="contact-label">Message:</label><br>
                 <input type="text" class="contact-input" id="message"><br>
                 <div>
                     <button class="contact-btn" onclick="contactus()">Submit</button>
                 </div>
             </div>
         </div>
     </div>
     </div>
     <?php include('includes/footer.php') ?>
 </body>