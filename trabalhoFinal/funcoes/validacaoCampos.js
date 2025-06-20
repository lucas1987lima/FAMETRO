function validacao (form2){
 if(form2.cpf.value == ""){ // Se o conteudo (value) for igual em Branco
   alert("O Campo CPF deve ser preenchido");
   form2.cpf.focus();
   return false; //So ira mostrar esta mensagem se o campo estiver em Branco
 }// fim do if
 if(form2.opcao.value == ""){ // Se o conteudo (value) for igual em Branco
   alert("Escolha um Candidato");
   form2.opcao.focus();
   return false; //So ira mostrar esta mensagem se o campo estiver em Branco
 }// fim do if
}// fim funcao
