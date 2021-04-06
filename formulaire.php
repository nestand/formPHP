
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Contact us</title>
    </head>
<body>
    
   <form action="validation.php" method="post">
  <div class="elem-group">
    <label for="name">Votre Nom</label>
    <input type="text" id="name" name="visitor_name" placeholder="Franck Dupont" pattern=[A-Z\sa-z]{3,20} required>
  </div>
  <div class="elem-group">
    <label for="email">Votre E-mail</label>
    <input type="email" id="email" name="visitor_email" placeholder="franck.dupont@email.com" required>
  </div>
  <div class="elem-group">
    <label for="message">Write your message</label>
    <textarea id="message" name="visitor_message" placeholder="Votre message." required></textarea>
  </div>
  <button type="submit">Send Message</button>
</form>

</body>
</html>