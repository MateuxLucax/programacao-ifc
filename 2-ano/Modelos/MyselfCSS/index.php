<!DOCTYPE html>
<html lang="pt-BR">

<?php 
  $text = isset($_POST['text'])?$_POST['text']:'Exemplo';
  $email = isset($_POST['email'])?$_POST['email']:'exemplo@exemplo.com';
  $password = isset($_POST['password'])?$_POST['password']:'exemplo';
  $number = isset($_POST['number'])?$_POST['number']:1;
  $tel = isset($_POST['tel'])?$_POST['tel']:'(47) 98881-9255';
  $search = isset($_POST['search'])?$_POST['search']:'Exemplo';
  $textarea = isset($_POST['textarea'])?$_POST['textarea']:'Exemplo';
  $radioA = isset($_POST['radioA'])?$_POST['radioA']:1;
  $radioB = isset($_POST['radioB'])?$_POST['radioB']:1;
  $selectA = isset($_POST['selectA'])?$_POST['selectA']:1;
  $selectB = array(isset($_POST['selectB'])?$_POST['selectB']:'');
  $optionB = array('Opção A', 'Opção B', 'Opção C');
  $checkboxA = isset($_POST['checkboxA'])?$_POST['checkboxA']:0;
  $checkboxB = isset($_POST['checkboxB'])?$_POST['checkboxB']:0;
  $checkboxC = isset($_POST['checkboxC'])?$_POST['checkboxC']:0;
?>

<head>
  <meta charset="UTF-8" />
  <title>Material PHP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h1>Material PHP</h1>
    <hr class="dividir" />
    <h5>Exemplos de Inputs</h5>
    <div class="input">
      <input type="text" name="text" value="<?php echo $text; ?>" />
      <label>Nome</label>
    </div>
    <div class="input">
      <input type="email" name="email" value="<?php echo $email; ?>" />
      <label>E-mail</label>
    </div>
    <div class="input">
      <input type="password" name="password" value="<?php echo $password; ?>"/>
      <label>Senha</label>
    </div>
    <div class="input">
      <input type="number" name="number" value="<?php echo $number; ?>"/>
      <label>Número</label>
    </div>
    <div class="input">
      <input type="tel" name="tel" value="<?php echo $tel; ?>"/>
      <label>Telefone</label>
    </div>
    <div class="input">
      <input type="search" name="search" value="<?php echo $search; ?>"/>
      <label>Pesquisa</label>
    </div>
    <div class="input">
      <textarea type="textarea" name="textarea" rows="5"><?php echo $textarea; ?></textarea>
      <label>Mensagem</label>
    </div>
    <section>
    <h4>Opções: </h4>
    <div>
      <div class="radio">
        <input id="1" type="radio" name="radioA"  value="1" <?php echo $radioA == 1 ? 'checked ' : ' '; ?> />
        <label for="1">Opção A</label>
      </div>
      <div class="radio">
        <input id="2" type="radio" value="2" name="radioA" <?php echo $radioA == 2 ? 'checked ' : ' '; ?> />
        <label for="2">Opção B</label>
      </div>
    </div>
    <div>
    <div class="radio radio-inline">
      <input id="3" type="radio" name="radioB" value="1" <?php echo $radioB == 1 ? 'checked ' : ' '; ?>/>
      <label for="3">Opção A</label>
    </div>
    <div class="radio radio-inline">
      <input id="4" type="radio" name="radioB" value="2" <?php echo $radioB == 2 ? 'checked ' : ' '; ?>/>
      <label for="4">Opção B</label>
    </div>
    </div>
    </section>
    <br />
    <h4>Opções: </h4>
    <select name="selectA">
          <option value="" disabled selected>Escolha uma opção:</option>
          <option value="1" <?php echo $selectA == 1 ? 'selected ' : ' '; ?>>Opção A</option>
          <option value="2" <?php echo $selectA == 2 ? 'selected ' : ' '; ?>>Opção B</option>
          <option value="3" <?php echo $selectA == 3 ? 'selected ' : ' '; ?>>Opção C</option>
    </select>
    <br />
    <br />
    <h4>Opções: </h4>
    <select name="selectB[]" multiple="multiple">
      <option value="" disabled selected>Escolha uma opção:</option>
      <?php
        for ($i = 0; $i < count($optionB); $i++) { 
          if (in_array($optionB[$i], $selectB)) {
            echo "<option value='". $optionB[$i]. "' selected >". $optionB[$i]. "</option>\n";
          } else{
            echo "<option value='". $optionB[$i]. "' >". $optionB[$i]. "</option>\n";
          }
        }
      ?>
    </select>
    <br />
    <br />
    <h4>Opções: </h4>
    <div class="checkbox">
       <input type="checkbox" name="checkboxA" id="checkboxA" class="checkboxInput" value="1" <?php echo $checkboxA == 1 ? 'checked ' : ' '; ?> />
       <label for="checkboxA" class="checkboxLabel">Opção A</label>
    </div>
    <br />
    <div class="checkbox">
       <input type="checkbox" name="checkboxB" id="checkboxB" class="checkboxInput" value="2" <?php echo $checkboxB == 2 ? 'checked ' : ' '; ?> />
       <label for="checkboxB" class="checkboxLabel">Opção B</label>
    </div>
    <br />
    <div class="checkbox">
       <input type="checkbox" name="checkboxC" id="checkboxC" class="checkboxInput" value="3" <?php echo $checkboxC == 3 ? 'checked ' : ' '; ?> />
       <label for="checkboxC" class="checkboxLabel">Opção C</label>
    </div>
    <div class="input">
      <input type="submit" value="Enviar Dados" />
      <input type="reset" value="Limpar" />
    </div>
    <br /><br /><br /><br />
    <hr class="dividir" />
    <h5>Exemplo de Lista</h5>
    <ul>
      <li>
        Item 1
      </li>
      <li>
        Item 2
      </li>
      <li>
        Item 3
      </li>
    </ul>
    <br />
    <hr class="dividir" />
    <h5>Exemplo de Parágrafo</h5>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu aliquam felis. Mauris ultricies gravida facilisis. In nec molestie justo. Proin fringilla vulputate diam, in iaculis augue accumsan vel. Maecenas finibus, justo id congue tristique, mi
      nibh convallis purus, ut mattis justo neque id risus.
    </p>
    <br />
    <hr class="dividir" />
    <h5>Exemplos de Titulo</h5>
    <ul>
      <li>
        h1:
        <h1>Exemplo</h1>
      </li>
      <li>
        h2:
        <h2>Exemplo</h2>
      </li>
      <li>
        h3:
        <h3>Exemplo</h3>
      </li>
      <li>
        h4:
        <h4>Exemplo</h4>
      </li>
      <li>
        h5:
        <h5>Exemplo</h5>
      </li>
      <li>
        h6:
        <h6>Exemplo</h6>
      </li>
    </ul>
    <br />
    <hr class="dividir" />
    <h5>Exemplo de &lt;Pre></h5>
    <pre>
&lt;!DOCTYPE html>
&lt;html>
  &lt;head>
    &lt;meta charset="utf-8">
    &lt;title>Exemplo&lt;/title>
  &lt;/head>
  &lt;body>
    &lt;h1>Teste&lt;/h1>
  &lt;/body>
&lt;/html>
    </pre>
    <br />
    <hr class="dividir" />
    <h5>Exemplo de Tabela</h5>
    <table>
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nome</th>
          <th scope="col">Carga</th>
          <th scope="col">Custo</th>
        </tr>
      </thead>
      <tr>
        <td>1</td>
        <td>Falcon Heavy</td>
        <td>64 Toneladas</td>
        <td>94 Milhões de Dólares</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Delta IV Heavy</td>
        <td>30 Toneladas</td>
        <td>300 Milhoẽs de Dólares</td>
      </tr>
    </table>
    <br />
    <br />
    <br />
  </form>
</body>

</html>
