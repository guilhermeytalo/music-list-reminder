<!DOCTYPE html>
<html>

<head>
    <title>Cadastro de Mídia</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div>
    <div class="flex flex-col justify-center items-center h-screen">
        <div class="text-center">
            <h1 class="text-2xl font-semibold">Cadastro de Mídia</h1>
        </div>
        <form id="cadastroForm" class="mt-4 w-full max-w-md">
            <div class="mb-4">
                <label for="tipo" class="block text-gray-700">Tipo (CD, DVD, Vinil, K7, etc.):</label>
                <input type="text" name="tipo" required class="mt-1 p-2 w-full border rounded">
            </div>

            <div class="mb-4">
                <label for="interprete" class="block text-gray-700">Nome do Intérprete (Banda, Cantor, etc.):</label>
                <input type="text" name="interprete" required class="mt-1 p-2 w-full border rounded">
            </div>

            <div class="mb-4">
                <label for="album" class="block text-gray-700">Nome do Álbum:</label>
                <input type="text" name="album" required class="mt-1 p-2 w-full border rounded">
            </div>

            <div class="mb-4">
                <label for="data_compra" class="block text-gray-700">Data da Compra:</label>
                <input type="date" name="data_compra" required class="mt-1 p-2 w-full border rounded">
            </div>

            <div class="mb-4">
                <label for="valor_pago" class="block text-gray-700">Valor Pago:</label>
                <input type="number" name="valor_pago" required class="mt-1 p-2 w-full border rounded">
            </div>

            <div class="mb-4">
                <label for="observacao" class="block text-gray-700">Observação:</label>
                <textarea name="observacao" class="mt-1 p-2 w-full border rounded"></textarea>
            </div>

            <div class="mb-4">
                <input type="submit" value="Enviar"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
            </div>
        </form>
    </div>
    <div>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Recupera os dados do formulário
                $tipo = $_POST["tipo"];
                $interprete = $_POST["interprete"];
                $album = $_POST["album"];
                $data_compra = $_POST["data_compra"];
                $valor_pago = $_POST["valor_pago"];
                $observacao = $_POST["observacao"];
        
                // Exibe os dados preenchidos
                echo "<p><strong>Tipo:</strong> $tipo</p>";
                echo "<p><strong>Intérprete:</strong> $interprete</p>";
                echo "<p><strong>Álbum:</strong> $album</p>";
                echo "<p><strong>Data da Compra:</strong> $data_compra</p>";
                echo "<p><strong>Valor Pago:</strong> R$ $valor_pago</p>";
                echo "<p><strong>Observação:</strong> $observacao</p>";
            } else {
                // Se o formulário não foi enviado, exibe uma mensagem de erro
                echo "<p>Erro: O formulário não foi enviado.</p>";
            }
        ?>
    </div>
    </div>

    <script>
        document.getElementById("cadastroForm").addEventListener("submit", function (event) {
            const tipo = document.getElementsByName("tipo")[0].value;
            const interprete = document.getElementsByName("interprete")[0].value;
            const album = document.getElementsByName("album")[0].value;
            const dataCompra = document.getElementsByName("data_compra")[0].value;
            const valorPago = document.getElementsByName("valor_pago")[0].value;

            if (!tipo || !interprete || !album || !dataCompra || !valorPago) {
                alert("Por favor, preencha todos os campos obrigatórios.");
                event.preventDefault(); // Impede o envio do formulário
            }
        });
    </script>
</body>

</html>
