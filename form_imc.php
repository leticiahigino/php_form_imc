<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de IMC</title>
</head>
<body>
    <h1>Calculadora de IMC</h1>
    <form action="form.php" method="POST">
        <label for="peso">Peso (em kg):</label>
        <input type="text" id="peso" name="peso" required><br><br>

        <label for="altura">Altura (em metros):</label>
        <input type="text" id="altura" name="altura" required><br><br>

        <button type="submit">Calcular IMC</button>
    </form>
</body>
</html>
