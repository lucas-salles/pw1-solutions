<html>
    <body>
        <?php
            echo 'Nome:'.$_POST['nome'];
            echo 'Login:'.$_POST['login'];
            echo '<br>Senha:'.$_POST['senha'];
            if($_POST['sexo']=='m')
                echo 'Sexo Masculino';
            else echo 'Sexo Feminino';
            echo '<br> Mora em:';
            switch($_POST['cidade']){
                case 'jp':echo 'Joao Pessoa';
                        break;
                case 'cg':echo 'Campina';
                        break;
                case 'pa':echo 'Patos';
            }
            echo '<br>Interesses:';
            foreach ($_POST['interesses'] as $interesse)
                switch($interesse){
                    case 'in':echo 'Informática,';
                            break;
                    case 'ec':echo 'Economia, ';
                            break;
                    case 'es':echo 'Esporte, ';
                            break;                
                    case 'cul':echo 'Cultura, ';
                }
            echo '<br>Linguagens:';
            print_r($_POST['linguagens'])
        ?>
    </body>
</html>
