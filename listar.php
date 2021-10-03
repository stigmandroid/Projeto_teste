<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border = "1">
    <tr>
        <td colspan="20">
            <h1 align="center">Listagem de novos alunos</h1>

        </td>
    </tr>
    <tr>
        <td>CPF</td>
        <td>Nome</td>
        <td>Sobrenome</td>
        <td>Nascimento</td>
        <td>RG</td>
        <td>Sexo</td>
        <td>Rua</td>
        <td>Número</td>
        <td>Bairro</td>
        <td>Estado</td>
        <td>Cidade</td>
        <td>CEP</td>
        <td>Email</td>
        <td>Foto</td>
        <td>Login</td>
        <td>Senha</td>
        <td colspan="10" align="center">Ação</td>
    </tr>

    <?php

        include 'conect1.php';

        $buscar = $banco->query("SELECT * FROM alunos");

        while ($linha = mysqli_fetch_array($buscar)) {  
            $cpf = $linha['cpf'];
            $nome = $linha['nome'];
            $sobrenome = $linha['sobrenome'];
            $nasc = $linha['nasc'];
            $rg = $linha['rg'];
            $sexo = $linha['sexo'];
            $rua = $linha['rua'];
            $numero = $linha['numero'];
            $bairro = $linha['bairro'];
            $estado = $linha['estado'];
            $cidade = $linha['cidade'];
            $cep = $linha['cep'];
            $email = $linha['email'];
            $foto = $linha["foto"];
            $login = $linha['login'];
            $senha = $linha['senha'];
            $pasta = "img/";
            //$separa = explode(".", $foto); // retira o ponto da extensão da foto.
            //$separa = array_reverse($separa); // inverte a posição dos vetores, não precisa saber o tamanho do vetor.
            //$tipo = $separa[0];
            //$foto = $cpf . '.' . $tipo;
            //$fotov = $pasta . $foto; 

            echo "
                    <tr>
                        <td>$cpf</td>
                        <td>$nome</td>
                        <td>$sobrenome</td>
                        <td>$nasc</td>
                        <td>$rg</td>
                        <td>$sexo</td>
                        <td>$rua</td>
                        <td>$numero</td>
                        <td>$bairro</td>
                        <td>$estado</td>
                        <td>$cidade</td>
                        <td>$cep</td>
                        <td>$email</td>
                        <td><img src='$foto' width=100px></td>
                        <td>$login</td>
                        <td>$senha</td>
                        <td><a href='excluir.php?cpf=$cpf' onclick=\"return confirm('Tem certeza que deseja excluir?');\">Excluir</td>
                        <td>Alterar</td>
                    </tr>";


        } 
        echo"</table>"; 

    ?>


</body>
</html>

