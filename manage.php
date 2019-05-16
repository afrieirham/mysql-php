<?php
require('config/config.php');
require('config/db.php');

// Check for Submit
if(isset($_POST['submit'])){
    $question = mysqli_real_escape_string($conn, $_POST['question']);
    $answer = mysqli_real_escape_string($conn, $_POST['answer']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);

    $query = "INSERT INTO questions(questions, answers, type) VALUES('$question', '$answer', '$type')";

    if(mysqli_query($conn, $query)){
        header('Location: '.ROOT_URL.'manage.php?question=success');
    }else{
        echo 'ERROR'. mysqli_error($conn);
    }
}

?>

<?php include('include/header.php'); ?>
<?php include('include/navbar.php'); ?>
<div class="container mb-5">
    <h2 class="h2 mt-5">Manage Question</h2>
    <p id="add-question" class="btn btn-light mt-2"><span class="lead">Add Questions </span><i class="fas fa-plus-circle"></i></p>
    <form id="question-form" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
        <span id="question-area">
            <?php //include('include/question-card.php'); ?>
        </span>
        <button type="submit" name="submit" class="btn btn-success mt-2 mb-5"><span class="lead">Submit Question</span></button>
        <!-- <input type="submit" value="Submit Questions" name="submit" class="btn btn-info mt-2"> -->
    </form>

</div>
<script src="js/manage.js"></script>
<?php include('include/footer.php'); ?>