<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
</head>
<body>
    <h1>Editar Cliente</h1>

    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="{{ $cliente->nome }}" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ $cliente->email }}" required>
        <br>

        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" value="{{ $cliente->telefone }}">
        <br>

        <label for="endereco">Endereço:</label>
        <textarea name="endereco">{{ $cliente->endereco }}</textarea>
        <br>

        <button type="submit">Atualizar</button>
    </form>

    <a href="{{ route('clientes.index') }}">Voltar para Lista</a>
</body>
</html>
