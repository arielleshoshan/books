/* this file contains one event listener for enter_new_record.php.
    the JavaScript here acts as a bridge between the HTML form
    in enter_new_record.php and the PHP script in enter.php -
    which writes the new record into the database.
*/

// this is the form in enter_new_record.php -
const bookform = document.querySelector('#bookform');

// this is a DIV in enter_new_record.php -
const response_content = document.querySelector('#response');

// this DIV contains the form in enter_new_record.php -
const book_form = document.querySelector('#books');
// show the DIV if it is hidden
book_form.style.display = 'block';


// event handler
bookform.onsubmit = (e) => {
    // gets the names and current values from the form
    const formData = new FormData(bookform);
    // FETCH
    fetch('enter.php', {
        method: "POST",
        body: formData,
        credentials: "same-origin"
    })
    .then( (response) => {
        if (!response.ok) {
            throw new Error("Network response was not ok");
        }
        return response.text();
    })
    .then( (data) => {
        book_form.style.display = 'none';
        response_content.innerHTML =
        "<div class='col-lg-8 mx-auto p-4 my-5 border border-4 border-dark bg-white'>" + "<p class='lead text-center'>" + data + "</p>" + "<p class=' lead text-center'><a href='enternewquote.php'>Return to form</a></p>" + "<p class='lead text-center'><a href='bookquotes.php'>View Book Recommendations</a></p>" + "</div>";
    })
    .catch( (error) => {
        console.error('Error in fetch: ', error);
    }); // end of FETCH
    return false;
}; // end bookform.onsubmit
