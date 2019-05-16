// Set Global Variable i
var i = 0;

function increment() {
    i += 1; /* Function for automatic increment of field's "Name" attribute. */
}

// Add Questions
document.getElementById('add-question').addEventListener('click', function () {
    var questionArea = document.querySelector('#question-area');

    var card = document.createElement('div');

    increment();
    card.setAttribute('id', 'del-question-' + i);
    card.innerHTML = `
    <div class="card bg-light mt-2">
        <div class="card-header">
            <span class="h4">Question ` + i + `</span>
            <p class="float-right btn btn-outline-dark btn-sm" onclick="removeElement('question-area', 'del-question-` + i +`')" ><span class=""><i class="fas fa-trash-alt"></i></span></p>
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
    </div>`;

    questionArea.appendChild(card);
});

// Remove Questions
function removeElement(parentDiv, childDiv) {
    if (childDiv == parentDiv) {
        alert("The parent div cannot be removed.");
    } else if (document.getElementById(childDiv)) {
        var child = document.getElementById(childDiv);
        var parent = document.getElementById(parentDiv);
        parent.removeChild(child);
    } else {
        alert("Child div has already been removed or does not exist.");
        return false;
    }
}