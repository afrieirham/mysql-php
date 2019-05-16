<?php
require('config/config.php');
require('config/db.php');

    // Create query
    $query = 'SELECT * FROM questions';

    // Get result
    $result = mysqli_query($conn, $query);

    // Fetch data
    $questions = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // Free result from memory
    mysqli_free_result($result);

    // Close connection
    mysqli_close($conn);

?>

<?php include('include/header.php'); ?>
    <?php include('include/navbar.php'); ?>
    <div class="container">
        <h1 class="mt-3">Question</h1>
        <?php foreach($questions as $question) : ?>
        <div class="card mb-3" style="width: 60%; margin: auto;">
            <div class="card-body">
                <h4><?php echo $question['id'].'. '. $question['questions'] ?></h4>
                <p><?php echo $question['answers'] ?></p>

                <div class="form-group">
                    <!-- Long answers -->
                    <?php if($question['type'] == 'textarea'): ?>
                    <textarea name="" style="width: 100%;" class="form-control"></textarea>
    
                    <!-- Short answers -->
                    <?php elseif($question['type'] == 'text'): ?>
                    <input type="text" style="width: 100%;" class="form-control">
    
                    <!-- Dropdown -->
                    <?php elseif($question['type'] == 'dropdown'): ?>
                    <select style="width: 40%;" class="form-control">
                        <option value="volvo"><?php echo $question['answers'] ?></option>
                        <option value="saab">Saab</option>
                        <option value="vw">VW</option>
                        <option value="audi" selected>Audi</option>
                    </select>
                    
                    <!-- Radio -->
                    <?php elseif($question['type'] == 'radio'): ?>
                    <input type="radio" name="test"> <?php echo $question['answers'] ?> <br>
                    <input type="radio" name="test"> <?php echo $question['answers'] ?> <br>
    
                    <!-- Checkbox -->
                    <?php elseif($question['type'] == 'checkbox'): ?>
                    <input type="checkbox" name="test"> <?php echo $question['answers'] ?> <br>
    
                    <?php endif; ?>
                </div>

            </div>
        </div>
        <?php endforeach; ?>
    </div>
<?php include('include/footer.php'); ?>