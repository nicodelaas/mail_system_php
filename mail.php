
     <html>
<table>
     <form method="post">
      <td><label for="">verstuur mail</label></td>
          <tr>
              <td><label>email</label></td>
              <td><input type="email" name="email" id="email" required></td>
        </tr>
        <tr>
            <td><label>Subject</label></td>
            <td><input type="text" id="subject" name="subject"</td>
        </tr>
        <tr>
            <td><label>Message</label></td>
            <td><textarea id="message" name="message" rows="8" cols="30"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" class="button" name="verzenden" value="Verzenden"></td>
        </tr>
    </form>
</table>
</html>
 <?php
 if(isset($_POST['verzenden'])){
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $to = "naskamp@naskamp.gc-webhosting.nl";
     $headers = 'From: '. $email . "\r\n" .
         'Reply-To: '. $email . "\r\n" .
         'X-Mailer: PHP/' . phpversion();
     if(mail($to, $subject, $message, $headers)){
         echo '<p class="success">Your message has been sent successfully!</p>';
     } else{
         echo '<p class="error">Unable to send email. Please try again!</p>';
     }
 }
?>