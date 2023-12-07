<?php
$answers = ['a', 'b', 'b']; // Réponses correctes pour chaque question

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userAnswers = [
        $_POST['q1'],
        // Ajoutez ici les autres questions sous la forme $_POST['qX'] où X est le numéro de la question
    ];

    $score = 0;
    for ($i = 0; $i < count($userAnswers); $i++) {
        if ($userAnswers[$i] === $answers[$i]) {
            $score++;
        }
    }

    echo "Vous avez obtenu $score sur " . count($answers) . " bonnes réponses.";
}
?>