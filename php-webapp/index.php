<?php
$name = $_GET['name'] ?? 'friend';
?>
<!doctype html>
<html>
<head><meta charset="utf-8"><title>Demo WebApp</title></head>
<body>
  <h1>Hello, <?= htmlspecialchars($name) ?>!</h1>
  <form method="get">
    <input name="name" placeholder="Your name">
    <button type="submit">Say hi</button
  </form>
</body>
</html>
