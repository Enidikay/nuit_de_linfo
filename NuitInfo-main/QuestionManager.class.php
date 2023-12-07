<?php
require_once("connection.inc.php");
class QuestionReponseManager {
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getQuestionById($id)
    {
        $query = $this->pdo->prepare("SELECT * FROM question WHERE idQuestion = :id");
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();

        $data = $query->fetch(PDO::FETCH_ASSOC);

        if (!$data) {
            return null; // Id not found
        }

        return new QuestionReponseClass($data);
    }
}

// Example usage
try {
    $pdo =$db;
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $manager = new QuestionReponseManager($pdo);

    // Assuming you have a question with id = 1 in your database
    $question = $manager->getQuestionById(1);

    if ($question) {
        // Display properties
        echo "Question: " . $question->getQuestion() . PHP_EOL;
        echo "Reponse: " . $question->getReponse() . PHP_EOL;
        echo "OptionA: " . $question->getOptionA() . PHP_EOL;
        echo "OptionB: " . $question->getOptionB() . PHP_EOL;
        echo "OptionC: " . $question->getOptionC() . PHP_EOL;
    } else {
        echo "Question not found.";
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}