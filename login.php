 <?php
  if($_POST['Login_User'] != '@SystemRhino' || $_POST['Senha_User'] != '@SystemRhino'){
  		echo "Erro ao fazer o login: usuário ou senha não encontrado, tente novamente logar no sistema ou crie uma conta!";
  }else{echo"Seja bem vindo ao sistema em PHP ".$_POST['Login_User'];}
 ?>
