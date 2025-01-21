 <?php
     include 'viacep.php';
     $endereco = getendereco();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        
    <CENTER>
        <form action="." method="POST">
            <h1>CONSULTAR ENDEREÇO PELO CEP</h1>
        <table>          
            <tr>
                <td>
                    Digite o CEP
                </td>
                <td>
                    <input type="text" id="cep" name="cep" placeholder="00000-000">
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit">Consultar</button>
                </td>
            </tr>            
        </table>
             </form>
        </br>
        </br>
        </br>
        <table>
            <tr>
             <td>Dados do CEP</td>
            </tr>
            <tr>
                <td>CEP</td>
                <td><input type="text" id="input_cep" value="<?php echo $endereco->cep; ?>" readonly="true"> </input></td>
                <td>Logradouro</td>
                 <td><input type="text" id="input_cep" value="<?php echo $endereco->logradouro; ?>" readonly="true"></td>            
            </tr>
            <tr>
                <td>Complemento</td>
                <td><input type="text" id="input_complemento" value="<?php echo $endereco->complemento; ?>" readonly="true"> </input></td>
                <td>Unidade</td>
                 <td><input type="text" id="input_unidade" value="<?php echo $endereco->unidade; ?>" readonly="true"></td>            
            </tr>
            <tr>
                <td>Bairro</td>
                <td><input type="text" id="input_bairro" value="<?php echo $endereco->bairro; ?>" readonly="true"> </input></td>
                <td>Localidade</td>
                 <td><input type="text" id="input_localidade" value="<?php echo $endereco->localidade; ?>" readonly="true"></td>            
            </tr>
            <tr>
                <td>UF</td>
                <td><input type="text" id="input_uf" value="<?php echo $endereco->uf; ?>" readonly="true"> </input></td>
                <td>Estado</td>
                 <td><input type="text" id="input_estado" value="<?php echo $endereco->estado; ?>" readonly="true"></td>            
            </tr>
            <tr>
                <td>Região</td>
                <td><input type="text" id="input_regiao" value="<?php echo $endereco->regiao; ?>" readonly="true"> </input></td>
                <td>IBGE</td>
                 <td><input type="text" id="input_ibge" value="<?php echo $endereco->ibge; ?>" readonly="true"></td>            
            </tr>
            <tr>
                <td>Gia</td>
                <td><input type="text" id="input_gia" value="<?php echo $endereco->gia; ?>" readonly="true"> </input></td>
                <td>DDD</td>
                 <td><input type="text" id="input_ddd" value="<?php echo $endereco->ddd; ?>" readonly="true"></td>            
            </tr>
            <tr>
                <td>Siafi</td>
                <td><input type="text" id="input_siafi" value="<?php echo $endereco->siafi; ?>" readonly="true"> </input></td>
            </tr>
            
        </table>
       </CENTER>
    </body>
    
    
</html>
<?php  // o script abaixo é a mascara do cep. 
//já valida podendo escever só 8 caracteres e já coloca traço automaticamente. aceita apenas numeros. ?>

<script src="https://cdn.jsdelivr.net/npm/cleave.js@1.6.0/dist/cleave.min.js"></script>

  <script>
    new Cleave('#cep', {
      blocks: [5,3],
      delimiters: ['-'],
      numericOnly: true
    });
  </script>