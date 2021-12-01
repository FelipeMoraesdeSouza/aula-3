<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>senac - ARRJ</title>
</head>

<body>
    <!-- tags são os comandos no html -->
    <h1>meu primeiro formulario</h1>
    <hr>
    
    <form action="#">
        nome:<input type="text" required ></input><br><br>
        idade:<input type="number" required ></input><br><br>
        data de inscrisão:<input type="date" required ></input><br><br>
        E-mail:<input type="email" required></input>
        curso:
        <select >
            <option>excel</option>
            <option>programador web</option>
            <option>Banco de dados</option>
        </select>
        <br><br>
        <input type="submit" value="cadastrar funcionario">
    </form>

</body>
</html>