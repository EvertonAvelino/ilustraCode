<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8" />
    <title>Calculo de frete</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <script type="text/javascript" src="js/funcoes.js"></script>
  </head>
  <body>
    <form action="calcular.php" method="POST">
      CEP Origem<br />
      <input type="text" id="cep-o" name="n-cep-o" required /><br />
      CEP Destino<br />
      <input type="text" id="cep-d" name="n-cep-d" required /><br />
      Tipo de Envio <br />
      <select id="s-serv" name="n-serv">
        <option value="41106">Pac</option>
        <option value="40010">Sedex</option>
      </select>
      <br />
      Peso <br />
      <input type="text" id="id-peso" name="n-peso" required /><br />
      Comprimento <br />
      <input type="text" id="id-comp" name="n-comp" required /><br />
      Largura <br />
      <input type="text" id="id-larg" name="n-larg" required /><br />
      Altura <br />
      <input type="text" id="id-alt" name="n-alt" required /><br />
      Valor declarado <br />
      <input
        type="text"
        id="id-val"
        name="n-val"
        required
        onkeyup="mask(this)"
      /><br />
      <input type="submit" name="calcular" action="calcular.php" /><br />
    </form>
  </body>
</html>
