 
    //finds the <select> dropdown used for filtering posts by month and stores it in a variable called 'select'
    const select = document.getElementById("month");

    //if statement acting as a safety check to ensure that the select element exists before adding an event listener to it
    //this prevents errors in case the element is not found in the DOM
    if (select) {

        //"change" event is triggered when the user selects a different month from the dropdown
        select.addEventListener("change", function () {

            //'this' refers to the <select> element
            //'.form' accesses the form that selects the element inside of it
            //'.submit()' triggers the form submission 

            // Since the form uses the GET method and has action="viewBlog.php", this resubmits the page with the selected month
            this.form.submit();
        });
    };
