var bookArray = [];
var bookList = document.getElementById('bookList');
var bookInput = document.getElementById('bookInput');
var addBook = document.getElementById('addBook');
var submit = document.getElementById('submit');
var complete = document.getElementById('complete');

addBook.addEventListener('click', function() {
    var book = bookInput.value.trim();
    if (book) {
        bookArray.push(book);
        document.getElementById('listaBook').style.display='block';
        var listItem = document.createElement('li');
        var span = document.createElement('span');
        var delBtn = document.createElement('button');
        span.textContent = book;
        delBtn.textContent = 'X';
        delBtn.className = 'delBook';
        delBtn.addEventListener('click', function() {
            var index = bookArray.indexOf(book);
            if (index !== -1) {
                bookArray.splice(index, 1);
                bookList.removeChild(listItem);
                if (bookArray.length < 12) {
                    submit.disabled = true;
                }
            }
        });
        listItem.appendChild(span);
        listItem.appendChild(delBtn);
        bookList.appendChild(listItem);
        bookInput.value = '';
        if (bookArray.length === 12) {
            submit.disabled = false;
        }
    } else {
        alert('¡No has escrito nada!');
    }
});

submit.addEventListener('click', function() {
    if (confirm('confirmList')) {
        addBook.disabled = true;
        submit.disabled = true;
        var delBtns = document.querySelectorAll('.delBook');
        for (var i = 0; i < delBtns.length; i++) {
            delBtns[i].style.display = 'none';
        }
        document.cookie = 'bookList=' + JSON.stringify(bookArray);
    }
});

function eligeLamina() {
    var dropdown = document.getElementById('selectLamina');
    var selectedOption = dropdown.options[dropdown.selectedIndex].value;
    var selectedOptionIndex = bookArray.indexOf(selectedOption);
    document.getElementById('laminaOk').innerHTML = 'Has seleccionado: <br\/\><br\/\> Lámina ' + selectedOption;
}