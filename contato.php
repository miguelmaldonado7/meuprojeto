<?php
$name = $_POST['name'] ?? '';
$message = $_POST['message'] ?? '';
$sent = false;

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $sent = true;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Contato</title>
</head>
<body>
  <h1>Contato</h1>

  <?php if($sent): ?>
    <p>Mensagem enviada com sucesso!</p>
    <p><strong>Nome:</strong> <?= htmlspecialchars($name) ?></p>
    <p><strong>Mensagem:</strong> <?= htmlspecialchars($message) ?></p>
  <?php else: ?>
    <form method="post">
      <label>Nome: <input type="text" name="name" required></label><br>
      <label>Mensagem: <textarea name="message" required></textarea></label><br>
      <button type="submit">Enviar</button>
    </form>
  <?php endif; ?>

  <p><a href="index.php">Voltar</a></p>
</body>
</html>
