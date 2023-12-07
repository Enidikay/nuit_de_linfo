<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Quiz sur le Changement Climatique</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="quiz-container">
    <h1>Quiz sur le Changement Climatique</h1>
    <p>Répondez aux questions suivantes :</p>
    <form id="quiz-form">
      <div class="question">
        <h3>1. Quelle est la principale cause du changement climatique ?</h3>
        <input type="radio" name="q1" value="a"> Les activités humaines<br>
        <input type="radio" name="q1" value="b"> Les éruptions volcaniques<br>
        <input type="radio" name="q1" value="c"> Les variations naturelles du climat<br>
      </div>
      <div class="question">
        <h3>2. Quelle est l'une des façons de réduire les émissions de carbone ?</h3>
        <input type="radio" name="q2" value="a"> Utiliser plus de combustibles fossiles<br>
        <input type="radio" name="q2" value="b"> Planter des arbres<br>
        <input type="radio" name="q2" value="c"> Augmenter la consommation d'énergie<br>
      </div>
      <div class="question">
        <h3>3. Comment peut-on contribuer à la lutte contre le changement climatique au quotidien ?</h3>
        <input type="radio" name="q3" value="a"> En prenant des douches plus longues<br>
        <input type="radio" name="q3" value="b"> En recyclant et en réduisant les déchets<br>
        <input type="radio" name="q3" value="c"> En laissant les lumières allumées toute la journée<br>
      </div>
      <input type="submit" value="Vérifier mes réponses">
    </form>
    <div id="results"></div>
  </div>

  <script src="quiz.js"></script>
</body>
</html>