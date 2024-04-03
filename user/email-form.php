<!-- Responsive Contact Page with Dark Mode and Form Validation (vanilla JS).

*Designed & built for desktop and tablets with viewport width >= 720px and in landscape orientation.  -->

<?php
    require ("../head.html");
?>


<div class="contact-container">
  <div class="left-col">
    
  </div>
  <div class="right-col">
    <div class="theme-switch-wrapper">
    <label class="theme-switch" for="checkbox">
        <input type="checkbox" id="checkbox" />
        <div class="slider round"></div>
  </label>
  <div class="description">Dark Mode</div>
</div>
    
    <h1>Contact us</h1>
    <p>If you have any questions or issues regarding the services we provide, don't hesitate to reach out via email. Simply complete the form provided below.</p>
    
    <form id="contact-form" method="post">
      <label for="name">Full name</label>
  <input type="text" id="name" name="name" placeholder="Your Full Name" required>
      <label for="email">Email Address</label>
  <input type="email" id="email" name="email" placeholder="Your Email Address" required>
      <label for="message">Message</label>
  <textarea rows="6" placeholder="Your Message" id="message" name="message" required></textarea>
      <button type="submit" id="submit" name="submit">Send</button>
  
</form>
<div id="error"></div>
<div id="success-msg"></div>
  </div>
</div>

<script src="../javascript/form-script.js"></script>