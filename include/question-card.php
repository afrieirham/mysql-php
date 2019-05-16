<div id="del-question" class="card bg-light mt-2">
    <div class="card-header">
        <span class="h4">Question 1</span>
        <p class="float-right btn btn-outline-dark btn-sm" onclick="removeElement('question-area', 'del-question')" ><span class=""><i class="fas fa-trash-alt"></i></span></p>
    </div>

    <div class="card-body">
        <div class="form-group">
            <h6 class="card-title">Question</h6>
            <input type="text" name="question" class="form-control" placeholder="Example: 2 + 2?">
        </div>
        <div class="form-group">
            <h6 class="card-title">Answer</h6>
            <input type="text" name="answer" class="form-control" placeholder="Example: 4">
        </div>
        <div class="form-group">
            <h6 class="card-title">Type of Question</h6>
            <select name="type" class="form-control">
                <option selected disabled>Question Type</option>
                <option value="textarea">Long Answers</option>
                <option value="text">Short Answers</option>
                <option value="dropdown">Dropdown</option>
                <option value="radio">Multiple Choice</option>
                <option value="checkbox">Checkbox</option>
            </select>
        </div>
    </div>
</div>