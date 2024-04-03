<?php
require("../head.html");
?>

<div class="contact-container">
  <div class="left-col">

  </div>
  <div class="right-col">
    <div class="theme-switch-wrapper">
      <label class="theme-switch" for="checkbox">
        <input type="checkbox" id="checkbox"/>
        <div class="slider round"></div>
      </label>
      <div class="description">Dark Mode</div>
    </div>

    <h1>Contact us</h1>
    <p>If you have any questions or issues regarding the services we provide, don't hesitate to reach out via email. Simply complete the form provided below.</p>

    <form id="contact-form" method="post" action="../function/email-sending-process.php">
      <label for="name">Full name</label>
      <input type="text" id="name" name="name" placeholder="Enter your name" required>
      <label for="email">Email Address</label>
      <input type="Email" id="email" name="email" placeholder="Enter your email address" required>
      <label for="message">Message</label>
      <textarea rows="6" placeholder="Enter your message" id="message" name="message" minlength="20" required></textarea>
      <button type="submit" id="submit" name="submit">Send</button>

    </form>
    <div id="error"></div>
    <div id="success-msg"></div>
  </div>
</div>

<script src="../javascript/email-form-script.js"></script>