<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Mídia</title>
    <!-- Add Tailwind CSS link here -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="p-4 bg-white rounded shadow-lg flex">
        <div class="p-4">
            <h1 class="text-2xl font-semibold text-center mb-4">Cadastro de Mídia</h1>

            <?php
            // Variáveis para armazenar os valores preenchidos
            $tipo = $interprete = $album = $data_compra = $valor_pago = $observacao = "";

            // Verifica se o formulário foi enviado
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Recupera os dados do formulário
                $tipo = $_POST["tipo"];
                $interprete = $_POST["interprete"];
                $album = $_POST["album"];
                $data_compra = $_POST["data_compra"];
                $valor_pago = $_POST["valor_pago"];
                $observacao = $_POST["observacao"];
            }
            ?>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="mb-4">
                    <label for="tipo" class="block text-gray-700 mb-2">Tipo (CD, DVD, Vinil, K7, etc.):</label>
                    <input type="text" name="tipo" required value="<?php echo $tipo; ?>" class="w-full p-2 border rounded mb-4">
                </div>

                <div class="mb-4">
                    <label for="interprete" class="block text-gray-700 mb-2">Nome do Intérprete (Banda, Cantor, etc.):</label>
                    <input type="text" name="interprete" required value="<?php echo $interprete; ?>" class="w-full p-2 border rounded mb-4">
                </div>

                <div class="mb-4">
                    <label for="album" class="block text-gray-700 mb-2">Nome do Álbum:</label>
                    <input type="text" name="album" required value="<?php echo $album; ?>" class="w-full p-2 border rounded mb-4">
                </div>

                <div class="mb-4">
                    <label for="data_compra" class="block text-gray-700 mb-2">Data da Compra:</label>
                    <input type="date" name="data_compra" required value="<?php echo $data_compra; ?>" class="w-full p-2 border rounded mb-4">
                </div>

                <div class="mb-4">
                    <label for="valor_pago" class="block text-gray-700 mb-2">Valor Pago:</label>
                    <input type="number" name="valor_pago" required value="<?php echo $valor_pago; ?>" class="w-full p-2 border rounded mb-4">
                </div>

                <div class="mb-4">
                    <label for="observacao" class="block text-gray-700 mb-2">Observação:</label>
                    <textarea name="observacao" class="w-full p-2 border rounded mb-4"><?php echo $observacao; ?></textarea>
                </div>

                <input type="submit" value="Enviar" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
            </form>
        </div>

        <!-- Display information on the right side -->
        <div class="w-64 p-4 bg-gray-200">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                echo "<h2 class='text-xl font-semibold mb-2'>Cadastro Efetuado</h2>";
                echo "<p><strong>Tipo:</strong> $tipo</p>";
                echo "<p><strong>Intérprete:</strong> $interprete</p>";
                echo "<p><strong>Álbum:</strong> $album</p>";
                echo "<p><strong>Data da Compra:</strong> $data_compra</p>";
                echo "<p><strong>Valor Pago:</strong> R$ $valor_pago</p>";
                echo "<p><strong>Observação:</strong> $observacao</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>
