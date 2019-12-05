<!DOCTYPE html>
<html>

<?php
    $numAtributos = isset($_POST['numAtributos']) ? $_POST['numAtributos'] : 4;
    $nomeClasse = isset($_POST['nomeClasse']) ? $_POST['nomeClasse'] : "teste";
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gerador de objetos</title>
    <link rel="stylesheet" href="css/bulma.css" />
    <link rel="icon" href="css/favicon.png">
</head>

<body>
    <section class="section">
        <div class="container" style="margin-bottom: 60px;">
            <h1 class="title">Gerador de objetos</h1>
        </div>
        <form action="gerador.php" method="POST"> <?php for ($i = 1; $i <= $numAtributos; $i++) {?>
        <div class="row">
            <div class="columns">
                <div class="column is-1"><?php echo $i; ?>° Atributo</div>
                <div class="column">
                    <div class="field">
                        <div class="control">
                            <input class="input" type="text" name="atributo<?php echo $i; ?>" placeholder="Nome do <?php echo $i; ?>° atributo" required>
                         </div>
                    </div>
                </div>
                <div class="column">
                    <div class="control">
                        <label class="radio">
                        <input type="radio" name="tipoAtributo<?php echo $i; ?>" value="1" checked>Texto</label>
                        <label class="radio">
                        <input type="radio" name="tipoAtributo<?php echo $i; ?>" value="2">Número</label>
                        <label class="radio">
                        <input type="radio" name="tipoAtributo<?php echo $i; ?>" value="3">Data</label>
                    </div>
                </div>
            </div> <?php } ?>
            <div style="text-align: center;">
                <input type="hidden" name="nomeClasse" value="<?php echo $nomeClasse ?>">
                <input type="hidden" name="numAtributos" value="<?php echo $numAtributos ?>">
                <input class="button is-primary is-outlined" type="submit" value="Avançar" />
            </div>
        </form>
    </section>
</body>

</html>

<?php
class Estado {

    private $codigo;
    private $nome;
    private $sigla;

    public function setCodigo($codigo) {
        if ($codigo > 1) {
            $this->codigo = $codigo;
        }
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function setNome($nome) {
        if (strlen($nome) > 1) {
            $this->nome = $nome;
        }
    }

    public function getNome() {
        return $this->nome;
    }

    public function setSigla($sigla) {
        if (strlen($sigla) > 1) {
            $this->sigla = $sigla;
        }
    }

    public function getSigla() {
        return $this->sigla;
    }

}
?>