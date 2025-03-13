<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Cliente</title>
</head>
<body>
    <h1>Adicionar Novo Cliente</h1>

    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br>

        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone">
        <br>

        <label for="endereco">Endereço:</label>
        <textarea name="endereco"></textarea>
        <br>

        <button type="submit">Salvar</button>
    </form>

    <a href="{{ route('clientes.index') }}">Voltar para Lista</a>
</body>
</html>
