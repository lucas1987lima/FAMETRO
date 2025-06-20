function validacao (form){
 if(form.nome.value == ""){ // Se o conteudo (value) for igual em Branco
   alert("O Campo nome deve ser preenchido");
   form.nome.focus();
   return false; //So ira mostrar esta mensagem se o campo estiver em Branco
 }// fim do if
 if(form.login.value == ""){ // Se o conteudo (value) for igual em Branco
   alert("O Campo login deve ser preenchido");
   form.login.focus();
   return false; //So ira mostrar esta mensagem se o campo estiver em Branco
 }// fim do if
 if(form.senha.value == ""){ // Se o conteudo (value) for igual em Branco
   alert("O Campo senha deve ser preenchido");
   form.senha.focus();
   return false; //So ira mostrar esta mensagem se o campo estiver em Branco
 }// fim do if
}// fim funcao
