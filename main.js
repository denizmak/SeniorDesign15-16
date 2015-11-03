/**
 * Created by Cierra on 10/19/2015.
 */

// Adds a new combo box (Source: http://viralpatel.net/blogs/dynamic-add-textbox-input-button-radio-element-html-javascript/)
function addCourse() {
    //Create an input type dynamically.
    var element = document.createElement("select");

    //Get the appropriate container to add the new combo box to
    var foo = document.getElementById("myPopupCourse");

    //Append the element in page (in span).
    foo.appendChild(element);
}
