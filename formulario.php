    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulário Escola</title>
    </head>
    <body>
        <!-- tags são os comandos em HTML -->
        <h1>Formulário Escola Formulário</h1>
        <hr>

        <!-- Conhecia formulários, não sabia que eram fáceis 
        de implementar.

        Poderiam fazer parte desse formulários campos:
        Turma, Registro do Aluno, Cidade, Rua, Telefone, CEP,
        Porcentagem de Bolsa de Estudos, Mensalidade
         -->
        <form>
            Nome: <input type="text" required> <br><br>
            Idade: <input type="text" required> <br><br>
            Turma: <input type="text" required> <br><br>
            Registro do Aluno: <input type="text" required> <br><br>
            Cidade: <input type="text" required> <br><br>
            Rua: <input type="text" required> <br><br>
            CEP: <input type="text" required> <br><br>
            Porcentagem de Bolsa de Estudos: <input type="text" required> <br><br>
            Valor Mensalidade: <input type="number" required> <br><br>
            Data de Inscrição: <input type="date" required> <br><br>
            Email: <input type="text" required> <br><br>
            Curso: <select required>
                <option>Excel</option>
                <option>Programador Web</option>
                <option>Banco de Dados</option>
            </select>
            <br><br>
            <input type="submit" value="Cadastrar Funcionário"> <br><br>
        </form>
        
    </body>
    </html>
