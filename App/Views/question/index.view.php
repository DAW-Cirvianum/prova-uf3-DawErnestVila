<main>
    <form class="col-11 col-md-9 col-lg-7 col-xl-5 border p-4 my-4 mx-auto bg-light" action="/question/store/<?= $params['quiz']['id'] ?>" method="post">
        <h2>Quiz: <?= $params['quiz']['quiz_name'] ?></h2>
        <h4 class="text-success">New question</h4>
        <div class="mb-3">
            <label for="question" class="form-label">Question</label>

            <textarea id="question" class="form-control" name="question" rows="2" cols="50"></textarea>
        </div>
        <input type="hidden" name="quiz_id" value="9">
        <hr>
        <h4 class="text-primary">Answers</h4>
        <div class="mb-3 d-flex align-items-center ">
            <label for="quiz_subject" class="form-label mx-1">1</label>
            <input type="text" class="form-control mx-1" name="a1" id="a1" aria-describedby="helpId" placeholder="">
            <div class="form-check ml-3 mx-1">
                <input class="form-check-input" name="correct" type="radio" value="a1" id="" checked>
                <label class="form-check-label" for="">
                    Correct
                </label>
            </div>
        </div>

        <div class="mb-3 d-flex align-items-center ">
            <label for="quiz_subject" class="form-label mx-1">2</label>
            <input type="text" class="form-control mx-1" name="a2" id="a2" aria-describedby="helpId" placeholder="">
            <div class="form-check ml-3 mx-1">
                <input class="form-check-input" name="correct" type="radio" value="a2" id="">
                <label class="form-check-label" for="">
                    Correct
                </label>
            </div>
        </div>
        <div class="mb-3 d-flex align-items-center ">
            <label for="quiz_subject" class="form-label mx-1">3</label>
            <input type="text" class="form-control mx-1" name="a3" id="answer3" aria-describedby="helpId" placeholder="">
            <div class="form-check ml-3 mx-1">
                <input class="form-check-input" name="correct" type="radio" value="a3" id="">
                <label class="form-check-label" for="">
                    Correct
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="/quiz/index" class="btn btn-danger">Back</a>


    </form>

    <div class="llistat col-11 col-md-11 col-lg-10 col-xl-9 mx-auto">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Question</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
                foreach ($params['questions'] as $question) {
                ?>
                    <tr>
                        <td><?= $question['question'] ?></td>
                        <td><a class='btn btn-danger' href='/question/destroy/<?= $question['id'] ?>/?quiz_id=<?= $params['quiz']['id'] ?>'>Delete</a></td>
                    </tr>
                <?
                }
                ?>
            </tbody>
        </table>
    </div>
</main>