<?php
include 'conect1.php';

$nome = $_POST['nome'];
$sobrenome = $_POST['sobre'];
$nasc = $_POST['nasc'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$sexo = $_POST['sexo'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$cep = $_POST['cep'];
$email = $_POST['email'];
$foto = $_FILES["imagem"]["name"];
$login = $_POST['usuario'];
$senha = $_POST['pass'];
$pasta = "img/";
$separa = explode(".", $foto); // retira o ponto da extensão da foto.
$separa = array_reverse($separa); // inverte a posição dos vetores, não precisa saber o tamanho do vetor.
$tipo = $separa[0];
$foto = $cpf . '.' . $tipo;
$fotov = $pasta . $foto; 

$testar = $banco->query("SELECT * FROM alunos WHERE cpf = '$cpf' ");
$check = mysqli_num_rows($testar);

if($check == 1){
    echo "<h1>CPF já cadastrado!</h1>";
    echo "<h1>$cpf</h1>";
}else {
    $banco->query("INSERT INTO alunos(nome, sobrenome, nasc, rg, cpf, sexo, rua, numero, bairro, estado, cidade, cep, email, foto, login, senha) VALUES('$nome','$sobrenome','$nasc','$rg','$cpf','$sexo','$rua','$numero','$bairro','$estado','$cidade','$cep','$email','$fotov','$login','$senha')");
    echo "<h1> Dados Cadastrados com SUCESSO!!!</h1>";

move_uploaded_file($_FILES['imagem']['tmp_name'],$pasta . $foto); //esse parametro faz com que a foto enviada pelo usuario seja salva na pasta selecionada. O parametro ['temp_name'] não muda.
};



echo"$nome<br>$sobrenome<br>$nasc<br>$rg<br>$cpf<br>$sexo<br>$rua<br>$numero<br>$bairro<br>$estado<br>$cidade<br>$cep<br>$email<br>$fotov<br>$login<br>$senha<br>";

echo "<a href=form.html> Voltar ao Cadastro</a>";
?>