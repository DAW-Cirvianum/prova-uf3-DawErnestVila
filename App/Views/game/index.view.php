<main>
    <form class="col-11 col-md-9 col-lg-7 col-xl-5 border p-4 my-4 mx-auto bg-light" action="/game/finish/<?= $params['quiz']['id'] ?>" method="post">
        <h2 class="text-success"><?= $params['quiz']['quiz_name'] ?></h2>
        <?
        foreach ($params['questions'] as $question) {
        ?>
            <ul>
                <h3><?= $question['question'] ?></h3>
                <?
                foreach ($params['answers'] as $answerspack) {
                    foreach ($answerspack as $answer) {
                        if ($answer['question_id'] == $question['id']) {
                ?>
                            <div class='form-check'><input class='form-check-input' type='radio' name='<?= $question['id'] ?>' id='' value='<?= $answer['id'] ?>'><label class='form-check-label' for=''><?= $answer['answer'] ?></label></div>
                <?
                        }
                    }
                }
                ?>
            </ul>


        <?
        }

        ?>

        <input type="hidden" name="name" value="ernest">
        <button type="submit" class="btn btn-primary mt-3">Finish</button>
        <a href="/main/index/" class="btn btn-danger mt-3">Exit</a>

    </form>
</main>