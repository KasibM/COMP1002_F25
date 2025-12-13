//are you sure you're not from Troy? JavaScript

document.addEventListener("DOMContentLoaded", function(){
    const notTroy = document.getElementById("no"); //
    //console.log(notTroy);

    notTroy.addEventListener("change", function(){ //checks if no is clicked
    //https://developer.mozilla.org/en-US/docs/Web/API/HTMLElement/change_event
        confirm("Are you sure you're not from Troy?"); //are you sure?
    });
});