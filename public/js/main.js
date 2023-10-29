// Wait for the HTML document to fully load before executing JavaScript
document.addEventListener('DOMContentLoaded', function () {
    // Your code goes here

    // Example: Add a click event listener to a button
    const button = document.getElementById('myButton');
    button.addEventListener('click', function () {
        alert('Button clicked!');
    });

    // Example: Change the text of an element
    const changeTextButton = document.getElementById('changeTextButton');
    const textElement = document.getElementById('textElement');

    changeTextButton.addEventListener('click', function () {
        textElement.innerText = 'Text has been changed!';
    });

    // More JavaScript code can go here
});
