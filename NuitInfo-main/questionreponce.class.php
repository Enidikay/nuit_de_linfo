<?php
require_once("connection.inc.php");
class QuestionReponseClass {
    private $_question;
    private $_reponse;
    private $_OptionA;
    private $_OptionB;
    private $_OptionC;

    public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }

    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value) {
            $method = 'set' . ucfirst($key);

            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    // Getters

    public function getQuestion()
    {
        return $this->_question;
    }

    public function getReponse()
    {
        return $this->_reponse;
    }

    public function getOptionA()
    {
        return $this->_OptionA;
    }

    public function getOptionB()
    {
        return $this->_OptionB;
    }

    public function getOptionC()
    {
        return $this->_OptionC;
    }
    // Setters

    public function setReponse($reponse)
    {
        if (is_string($reponse) && !empty($reponse)) {
            $this->_reponse = $reponse;
        }
    }

    public function setQuestion($question)
    {
        if (is_string($question) && !empty($question)) {
            $this->_question = $question;
        }
    }

    public function setOptionA($optionA)
    {
        if (is_string($optionA) && !empty($optionA)) {
            $this->_optionA = $optionA;
        }
    }

    public function setOptionB($optionB)
    {
        if (is_string($optionB) && !empty($optionB)) {
            $this->_optionB = $optionB;
        }
    }

    public function setOptionC($optionC)
    {
        if (is_string($optionC) && !empty($optionC)) {
            $this->_optionC = $optionC;
        }
    }

}
