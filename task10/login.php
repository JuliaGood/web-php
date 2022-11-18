<!-- Login to your account -->

<h2>Увійдіть y свій аккаунт:</h2>
<form action="action.php" method="post">
  <p>Логін: <input type="text" name="login" /></p>
  <p>Пароль: <input type="text" name="password" /></p>
  <p><input type="submit" /></p>
  <?php echo $_GET['msg']; ?> 
</form>
