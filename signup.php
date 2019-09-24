<?php
  require "db.php";
  $data = $_POST;
  if(isset($data['do_signup'])){
    // Здесь регистрируем
    $errors = array();
    if(trim($data['login']) == ''){
      $errors[] = "Введите логин!";
    }
    if(trim($data['email']) == ''){
      $errors[] = "Введите E-mail!";
    }
    if($data['password'] == ''){
      $errors[] = "Введите пароль!";
    }
    if($data['password_2'] != $data['password']){
      $errors[] = "Повторный пароль введен не верно!";
    }
    if(empty($errors)){
      // Все хорошо, регистритуем
      
    }else{
      echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
    }
    
  }
?>

<form action="/signup.php" method="POST">
  <p>
    <p><strong>Ваш логин</strong>:</p>
    <input type="text" name="login" value="<?php echo @$data['login']; ?>">
  </p>
  <p>
    <p><strong>Ваш Email</strong>:</p>
    <input type="email" name="email" value="<?php echo @$data['email']; ?>">
  </p>
  <p>
    <p><strong>Ваш пароль</strong>:</p>
    <input type="password" name="password" value="<?php echo @$data['password']; ?>">
  </p>
  <p>
    <p><strong>Введите пароль еще раз</strong>:</p>
    <input type="password" name="password_2" value="<?php echo @$data['password_2']; ?>">
  </p>
  <p>
    <button type="submit" name="do_signup">Зарегистрироваться</button>
  </p>
</form>