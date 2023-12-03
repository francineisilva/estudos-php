<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de String</title>
</head>
<body>
    <h1>Manipulação de Strings</h1>
    <?php 
    //double quoted - Aspas duplas "Curso" Existe a interpretação do conteúdo da string (Ex: "PHP \u{1F428}") - exibição de emoji
    //single quoted - Aspas simples 'cursos' Não há interpretação do conteúdo da string (Ex: "PHP \u{1F428}") vai exibir o conteúdo descrito
    //Concatenação "Curso" "PHP" para juntar usa o operador . (ponto) 

        // $nome = "Francinei"; 
        // $sobrenoeme = "Francinei";
        // echo "Olá $nome!"; //Conteúdo interpretado
        // echo 'Olá $nome!'; //Não há interpretação 

        //Para constantes não funciona a interpretação.
        // const ESTADO = "RJ";
        // echo "Moro no ". ESTADO;
        // echo "Estamos no ano de ".date('Y');

        //Pode usar Aspas duplas dentro de aspas simples, e pode usar aspas simples dentro de aspas duplas, mas não pode usar aspas duplas dentro de aspas duplas e o mesmo para simples.

        // $nom = "Rodrigo";
        // $snom = "Nogueira";
        
        // echo "$nom\"Minotauro\"$snom"; // Sequência de escape 

        //SEQUÊNCIA DE ESCAPE - ASPAS DUPLAS
        // \n - Nova linha
        // \t - Tabulação horizontal
        // \\ - Barra invertida
        // \$ - Sinal de cifrão
        // \u{} - Unicode (simbolos)

        // $nome = "Francinei";
        // $sobrenome = "Silva";
        // $apelido = "Matrix";
        // echo "$nome \t \"$apelido\" \t\t$sobrenome";

        //Sintaxe Heredoc - Multiplas linhas
        $canal = "Curso em Vídeo";
        $ano = date ('Y');
        echo <<< FRASE
            Olá galera do $canal!
                    Tudo bem com vocês?
                Como está sendo esse ano de $ano?
            Abraços! \u{1F596}

        FRASE;

    
    ?>
</body>
</html>