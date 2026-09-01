<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <h2>Tipos de Input</h2>

    <!-- Data e hora -->
    <label>Selecione a data:<label><br>
    <input type="date" name="data">
    <br><br>

    <label>Selecione a hora:<label><br>
    <input type="time" name="hora">
    <br><br>

    <!-- Input de seleção -->
    <label>Selecione a cor:<label><br>
    <input type="color" name="cor">
    <br><br>

    <label>Selecione Gênero:<label><br>
    <select name="sexo"> 
        <option value="M">Masculino</option>
        <option value="F">Feminino</option>
        <option value="O">Outros</option>
    </select>
    <br><br>

    <label>Onde você nasceu?<label><br>
    <input type="text" placeholder="Digite aqui">
    <br><br>

    <label>Selecione o arquivo<label>
    <input type="file">
    <br><br>

    <label>Escolha o que deseja: </label><br>
    <input type="checkbox" name="escolha" value="Açai">
        Açai<br>
    </input>
    <input type="checkbox" name="escolha" value="Coxinha">
        Coxinha<br>
    </input>
    <input type="checkbox" name="escolha" value="Sorvete">
        Sorvete<br>
    </input>
    <br><br>

    <label>Forma de Pagamento: </label><br>
    <input type="radio" name="pg" value="Av">
    Avista<br>
    <input type="radio" name="pg" value="Cred">
    Cartão de Crédito<br>
    <input type="radio" name="pg" value="Pix">
    Pix<br>


</body>
</html>