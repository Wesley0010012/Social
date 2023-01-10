<div class="login">
  <h2>Registre-se para acessar a Social</h2>
  <br />
  <?php if(@$_GET['register'] && @$_GET['register'] == 'failed') {?>
  <p id="error">Não foi possível registrar. Tente novamente mais tarde!</p>
  <?php } ?>
  <form method="post">
    <div class="form-single">
      <p>Nome Completo:</p>
      <input type="text" name="name" placeholder="Nome Completo..." required id="name" minlength="10" value="<?php if(@$_GET['user']){ echo @$_GET['user']; } ?>"  />
    </div>
    <div class="form-single">
      <p>E-mail:</p>
      <input type="email" name="email" placeholder="E-mail..." required id="email" value="<?php if(@$_GET['email']){ echo @$_GET['email']; } ?>" />
    </div>
    <div class="form-single">
      <p>Senha:</p>
      <input type="password" name="pass" placeholder="Senha..." required id="password" minlength="8" value="<?php if(@$_GET['pass']){ echo @$_GET['pass']; } ?>" />
    </div>
    <div class="form-single">
      <p>Repita a senha:</p>
      <input type="password" name="pass2" placeholder="Repita a senha..." required id="password2" minlength="8" />
    </div>
    <div class="form-single">
      <br />
      <input type="submit" name="action" value="Registrar" id="act" />    
    </div>
    <a class="linker" href="<?php echo INCLUDE_PATH; ?>home">Já possui E-mail na Social?</a>
  </form>
</div>