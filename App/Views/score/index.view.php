<main>

    <?
    if (isset($params['num'])) {
    ?>
        <div class="col-11 col-md-5 col-lg-4 col-xl-3 mx-auto bg-light my-4 border p-3 d-flex flex-column align-items-center">
            <h2 class="text-primary">Personal Score</h2>
            <h4>Correct Answers: <?= $params['score']['correct_answers'] ?></h4>
            <h4>Incorrect Answers: <?= $params['score']['incorrect_answers'] ?></h4>
            <h4>Grade: <?= $params['score']['grade'] ?></h4>
        </div>
    <?
    }


    ?>




    <div class="llistat col-11 col-md-11 col-lg-10 col-xl-9 mx-auto">
        <h2>Score Board</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Participant</th>
                    <th scope="col">CorrectAnswers</th>
                    <th scope="col">IncorrectAnswers</th>
                    <th scope="col">Grade</th>
                    <th scope="col">Quiz</th>

                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($params['scores'] as $score) {
                ?>
                    <tr>
                        <td><?= $score['id'] ?></td>
                        <td><?= $score['name'] ?></td>
                        <td><?= $score['correct_answers'] ?></td>
                        <td><?= $score['incorrect_answers'] ?></td>
                        <td><?= $score['grade'] < 0 ? 0 : $score['grade'] ?></td>
                        <td><?
                            foreach ($params['quizes'] as $quiz) {
                                if ($quiz['id'] == $score['quiz_id']) {
                                    echo $quiz['quiz_name'];
                                }
                            }
                            ?></td>
                    </tr>
                <?
                }
                ?>

            </tbody>
        </table>
    </div>
</main>