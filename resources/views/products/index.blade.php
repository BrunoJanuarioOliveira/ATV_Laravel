<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Produtos e Itens</title>
    <style>
        table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>
    <h1>Listagem de Produtos</h1>

    @foreach($products as $product)
        <div style="border: 1px solid #ccc; padding: 15px; margin-bottom: 15px;">
            <h2>{{ $product->nome }}</h2>
            <p><strong>Preço:</strong> R$ {{ number_format($product->preco, 2, ',', '.') }}</p>
            <p><strong>Unidade de Medida:</strong> {{ $product->unidade_medida }}</p>

            <h3>Itens de Composição:</h3>
            @if($product->items->count() > 0)
                <table>
                    <thead>
                        <tr>
                            <th>Quantidade</th>
                            <th>Cor</th>
                            <th>Valor Unitário</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($product->items as $item)
                            <tr>
                                <td>{{ $item->quantidade }}</td>
                                <td>{{ $item->cor }}</td>
                                <td>R$ {{ number_format($item->valor, 2, ',', '.') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>Nenhum item associado.</p>
            @endif
        </div>
    @endforeach
</body>
</html>
