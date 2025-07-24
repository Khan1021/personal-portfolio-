
/* 
This function resets the style for any given field
    acts a reusable helper function to reset the styling of a form field
    
        clears the red borders and warning backgrounds
        used before validation to give clean slate
*/

function resetFieldStyles(field) {
    field.style.border = "";
    field.style.backgroundColor = "";
}



//getting clear button and form elements
const clearButton = document.querySelector("#reset");
const formElement = document.querySelector("form");


//debugging should log the form element in the console
console.log(formElement);  

console.log("clear button:", clearButton);
console.log("login form:", formElement);



//adding an event listener for the clear button
clearButton.addEventListener("click",function(){
    const userChoice = confirm("Are you sure you want to clear the form?");


    //if "OK" is pressed
    if(userChoice){
        
       // Manually clear each input field
       const inputs = formElement.querySelectorAll("input[type='text'],textarea"); // Select inputs and textareas
       inputs.forEach((input) => {
           input.value = ""; // Clear the value
       });
        alert("Form cleared!");
    }

    //if "Cancel" is press
    else{
        alert("Form not cleared!")
    }
    
})




//ensure code prevents submission of the form if field are empty
formElement.addEventListener("submit",function(e){


    //setting up the validation process
    let isValid = true; // Flag to track if the form is valid

    const titleBox = document.querySelector("#title");
    const textBox = document.querySelector("#textBox");


    //clearing any old styles before validation
    function resetFieldStyles(field){
        field.style.border="";
        field.style.backgroundColor="";
    }


    // Reset styles for both fields by using the helper function from before
    [titleBox, textBox].forEach(resetFieldStyles);


    //if title field is empty, highlight it in red and mark form as invalid
    if(titleBox.value.trim() === ""){
        titleBox.style.border = "2px solid red"; // Highlight the field in red
        titleBox.style.backgroundColor = "#ffcccc"; // Light red background
        isValid = false; // Set the flag to false
    }

    if(textBox.value.trim() === ""){
        textBox.style.border = "2px solid red"; // Highlight the field in red
        textBox.style.backgroundColor = "#ffcccc"; // Light red background
        isValid = false; // Set the flag to false
    }


    //block form submission if any field is invalid
    if(!isValid){
        e.preventDefault(); // Prevent form submission
        alert("Please fill in all required fields."); // Alert the user
    }

})



