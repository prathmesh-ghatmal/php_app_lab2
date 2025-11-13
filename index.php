<!DOCTYPE html>
<html>
<head>
  <title>PHP Greeting App</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>👋 Welcome to PHP Greeting App</h1>
    <form method="POST">
      <input type="text" name="username" placeholder="Enter your name" required>
      <button type="submit">Say Hello</button>
    </form>

    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST["username"]);
        echo "<h2>Hello, $name! 👋</h2>";
      }
    ?>
  </div>
</body>
</html>
