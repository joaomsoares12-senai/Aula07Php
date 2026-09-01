<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Nota da aluna Evelyn</h2>
    <form action="conexao/calculomedia.php" method="post">
        <table>
            <tr>
                <td width="100">
                    Nota 01
                </td>
                <td width="100">
                    <input type="number" name="nota1" placeholder="7,0" min="0" max="10" step="0.5">
                </td>
            </tr>
            <tr>
                <td width="100">
                    Nota 02
                </td>
                <td width="100">
                    <input type="number" name="nota2" placeholder="4,0" min="0" max="10" step="0.5">
                </td>
            </tr>
            <tr>
                <td width="100">
                    Nota 03
                </td>
                <td width="100">
                    <input type="number" name="nota3" placeholder="5,0" min="0" max="10" step="0.5">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <button type="submit">Enviar</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
