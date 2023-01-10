<div class="login">
  <h2>Faça login para acessar seu perfil</h2>
  <br />
  <?php if(@$_GET['login'] && @$_GET['login'] == 'failed') {?>
    <p id="error">E-mail ou senha Incorretos!</p>
  <?php } ?>
  <?php if(@$_GET['register'] && @$_GET['register'] == 'success') { ?>
    <p id="success">Criação de Conta executada com sucesso!</p>
  <?php } ?>
  <form method="post">
    <div class="form-single">
      <p>E-mail:</p>
      <input type="email" name="email" placeholder="E-mail..." required />
    </div>
    <div class="form-single">
      <p>Senha:</p>
      <input type="password" name="pass" placeholder="Senha..." required />
    </div>
    <div class="form-single">
      <br />
      <input type="submit" name="action" value="Login" />
      <?php if(@$_GET['login'] && @$_GET['login'] == 'failed') { ?>
        <a href="not-remember=pass">Não se lembra de sua senha?</a>
        <a href="not-remember=email">Nao se lembra de seu e-mail?</a>
      <?php } ?>
    </div>
      <a class="linker" href="register">Crie sua conta agora!</a>
  </form>
</div>