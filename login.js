//getting reset button and form elements
const clearButton = document.querySelector("#reset");
const loginFormElement = document.querySelector("form");

//debugging
console.log(loginFormElement); // Should log the form element in the console
console.log("clear button:", clearButton);
console.log("login form:", loginFormElement);




//adding an event listener for the clear button
clearButton.addEventListener("click",function(){
    const userChoice = confirm("Are you sure you want to clear the form?");

    //if user clicked "OK" 
    if(userChoice){
        
       // Manually clear each input field
       const inputs = loginFormElement.querySelectorAll("input"); // Select inputs and textareas
       inputs.forEach((input) => {
           input.value = ""; // Clear the value
       });
        alert("Form cleared!");
    }

    //if user clicked "Cancel"
    else{
        //if "Cancel" is press
        alert("Form not cleared!")
    }
    
})