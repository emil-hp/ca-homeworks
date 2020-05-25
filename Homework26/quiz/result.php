<?php

if(isset($_SESSION['quiz'])) {
    $answers = parse_ini_file('.answers.ini');
    $results = [];
    foreach($answers as $question => $answer) {
        $results[$question] = ['answer' => $_SESSION['quiz'][$question], 'correct_answer' => $answer];
    }
session_destroy();
}
?>

<h4 style="text-align: center" > Your result is: </h4>
<table class="table">
  <thead>
    <tr>
      <th >Question</th>
      <th >Your answer</th>
      <th >Correct answer</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach($results as $question => $answer) : ?>
      <tr class="<?= ('$answer'] === $answer['correct_answer']) ? 'table-success' : 'table-danger' ?>">
      <td><?= $question; ?></td>
      <td><?=$answer['answer']; ?></td>
      <td><?=$answer['correct_answer']; ?></td>
    </tr>
      <?php endforeach; ?>  
  </tbody>
</table>
