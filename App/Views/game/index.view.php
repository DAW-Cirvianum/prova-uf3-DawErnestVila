<main>
    <form class="col-11 col-md-9 col-lg-7 col-xl-5 border p-4 my-4 mx-auto bg-light" action="/game/finish" method="post">
        <h2 class="text-success"><?= $params['quiz']['quiz_name'] ?></h2>
        <?
        

        ?>
        <ul>
            <h3>Capital of France?</h3>
            <div class='form-check'><input class='form-check-input' type='radio' name='1' id='' value='1'><label class='form-check-label' for=''>Paris</label></div>
            <div class='form-check'><input class='form-check-input' type='radio' name='1' id='' value='2'><label class='form-check-label' for=''>Madrid</label></div>
            <div class='form-check'><input class='form-check-input' type='radio' name='1' id='' value='3'><label class='form-check-label' for=''>Barcelona</label></div>
        </ul>
        <ul>
            <h3>Continent of the Great Wall of China?</h3>
            <div class='form-check'><input class='form-check-input' type='radio' name='2' id='' value='4'><label class='form-check-label' for=''>Asia</label></div>
            <div class='form-check'><input class='form-check-input' type='radio' name='2' id='' value='5'><label class='form-check-label' for=''>Africa</label></div>
            <div class='form-check'><input class='form-check-input' type='radio' name='2' id='' value='6'><label class='form-check-label' for=''>Europe</label></div>
        </ul>
        <ul>
            <h3>Longest river in the world?</h3>
            <div class='form-check'><input class='form-check-input' type='radio' name='3' id='' value='7'><label class='form-check-label' for=''>Amazon</label></div>
            <div class='form-check'><input class='form-check-input' type='radio' name='3' id='' value='8'><label class='form-check-label' for=''>Yangtze</label></div>
            <div class='form-check'><input class='form-check-input' type='radio' name='3' id='' value='9'><label class='form-check-label' for=''>Nile</label></div>
        </ul>
        <ul>
            <h3>Largest country in the world?</h3>
            <div class='form-check'><input class='form-check-input' type='radio' name='4' id='' value='10'><label class='form-check-label' for=''>Russia</label></div>
            <div class='form-check'><input class='form-check-input' type='radio' name='4' id='' value='11'><label class='form-check-label' for=''>China</label></div>
            <div class='form-check'><input class='form-check-input' type='radio' name='4' id='' value='12'><label class='form-check-label' for=''>USA</label></div>
        </ul>
        <ul>
            <h3>a</h3>
            <div class='form-check'><input class='form-check-input' type='radio' name='21' id='' value='61'><label class='form-check-label' for=''>a</label></div>
            <div class='form-check'><input class='form-check-input' type='radio' name='21' id='' value='62'><label class='form-check-label' for=''>a</label></div>
            <div class='form-check'><input class='form-check-input' type='radio' name='21' id='' value='63'><label class='form-check-label' for=''>a</label></div>
        </ul> <input type="hidden" name="quiz_id" value="1">
        <input type="hidden" name="name" value="ernest">
        <button type="submit" class="btn btn-primary mt-3">Finish</button>
        <a href="/main/index/" class="btn btn-danger mt-3">Exit</a>

    </form>
</main>