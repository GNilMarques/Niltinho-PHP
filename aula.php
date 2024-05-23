<?php
//PASTA ARQUIVO,ALUNOS,IMAGENS,DOCUMENTOS
   /* $pasta = "arquivos/aulas/imagens/documentos";
    if(!is_dir($pasta)){
        mkdir($pasta,0755,true);
    } else {
            echo "pasta arquivo existente";        
    } 

//PASTA PATINS,ALUNOS,AULAS
    $pasta = "patins/alunos/aulas";
    if(!is_dir($pasta)){
        mkdir($pasta,0755,true);
    }else {
        echo "pasta patins existente";
    } */
    
//ARQUIVOS DE PASTAS
    $pasta = "arquivos/";
    if(!is_dir($pasta)){
        mkdir($pasta,0755);
    }

//criar pastas
    $nomeArquivo = date('y-m-d-H-i-s').".txt";
    $arquivo = fopen($pasta.$nomeArquivo,'a+');
    $dataAtual = date('d/m/Y');
    fwrite($arquivo,"texto teste criado utilizando em PHP".PHP_EOL);
    fwrite($arquivo,"aula PHP ".$dataAtual.PHP_EOL);
    fwrite($arquivo,'outro aquivo de texto'.PHP_EOL);
    fwrite($arquivo,'criando mais um texto'.PHP_EOL);
    fclose($arquivo);
    echo "pasta criada";
/*
    $caminhoArquivo = $pasta.$nomeArquivo;
    if(file_exists($caminhoArquivo) && is_file($caminhoArquivo)){
        $abrirArquivo = fopen($caminhoArquivo,'r');
         while (!feof($abrirArquivo)){
            echo fgets($abrirArquivo)."<br>";
         }  
    }
*/
//apagar pastas
   
    if(is_dir($pasta)){
        foreach(scandir($pasta) as $lixo){
            $caminho = $pasta.$lixo;
            if(is_file($caminho)){
                unlink($caminho);
                echo "pasta deletada";
            }
        }
        rmdir($pasta);
    }
         
    
?>