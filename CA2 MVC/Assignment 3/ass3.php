<!DOCTYPE html>
<html>
<head>
<title>EMAIL SENDING</title>
<link href="css/elements.css" rel="stylesheet">
</head>
<!-- Body Starts Here -->
<body>
<div class="container">
<!-- Feedback Form Starts Here -->
<div id="feedback">
<!-- Heading Of The Form -->
<div class="head">
<h3>EMAIL SENDING</h3>
<br><br>
</div>
<!-- Feedback Form -->
<form action="#" id="form" method="post" name="form">
<input name="vname" placeholder="From Email" type="text" value="">
<br><br>
<input name="vemail" placeholder="To Email" type="text" value="">
<br><br>
<label>Your Suggestion/Feedback</label>
<textarea name="msg" placeholder="Type your text here..."></textarea>
<br><br>
<input id="send" name="submit" type="submit" value="Send Feedback">
</form>
<h3><?php include "email.php"?></h3>
</div>
<!-- Feedback Form Ends Here -->
</div>
</body>
<!-- Body Ends Here -->
</html>