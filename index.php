<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Prova de Conceito</title>
</head>
<body>
    <div class="container">
        <h1>Prova de Conceito</h1>

        <?php
        $perguntas = [
            "Qual a maior raça de cavalo do mundo?",
            "Qual o buraco negro do centro da nossa galáxia?",
            "Qual o gato mais bonito do mundo?"
        ];

        $alternativas = [
            ["Crioulo", "Fresian", "Percheron", "Manga Larga"],
            ["Ton618", "Gargantua", "Sagitário A*", "Andromeda"],
            ["Godão", "Seu gato", "Persas", "Siameses"]
        ];

        $certo = [2, 3, 1];

        for ($i = 0; $i < count($perguntas); $i++) {
            echo "<div class='pergunta'>";
            echo "<h2>Pergunta " . ($i + 1) . "</h2>";
            echo "<p>" . $perguntas[$i] . "</p>";
            echo "<ul>";

            for ($j = 0; $j < count($alternativas[$i]); $j++) {
                echo "<li>" . $alternativas[$i][$j] . "</li>";
            }

            echo "</ul>";
            echo "<p class='resposta'>Resposta correta: " . $alternativas[$i][$certo[$i] - 1] . "</p>";
            echo "</div>";
            echo "<hr>";
        }
        ?>

    </div>
</body>
</html>
