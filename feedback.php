<!doctype html>
<html>
  <head>
    <title>Feedback Form</title>
  </head>
  <body style="font-family:Arial;">
    <h1>Feedback Form</h1>
    <form action="thankyou.php" method="post">
      <label for="complete_name">Complete Name:</label><br>
      <input type="text" id="complete_name" name="complete_name" required><br><br>

      <label for="email">Email Address:</label><br>
      <input type="email" id="email" name="email" required><br><br>

      <label for="type">Type:</label><br>
      <select id="type" name="type">
        <option value="Inquiry">Inquiry</option>
        <option value="Feedback">Feedback</option>
        <option value="Other">Other</option>
      </select><br><br>

      <label for="satisfaction_level">Level of satisfaction:</label><br>
      <input type="range" id="satisfaction_level" name="satisfaction_level" min="0" max="10" required><br><br>

      <label for="message">Feedback Message:</label><br>
      <textarea id="message" name="message" required></textarea><br><br>

      <input type="submit" value="Submit">
	  <br>
	</form>
</body>
</html>