/*
 Halcyonic by HTML5 UP
 html5up.net | @n33co
 Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
 */

(function($) {

    skel
        .breakpoints({
            desktop: '(min-width: 737px)',
            tablet: '(min-width: 737px) and (max-width: 1200px)',
            mobile: '(max-width: 736px)'
        })
        .viewport({
            breakpoints: {
                tablet: {
                    width: 1080
                }
            }
        });

    $(function() {

        var $window = $(window),
            $body = $('body');

        // Fix: Placeholder polyfill.
        $('form').placeholder();

        // Prioritize "important" elements on mobile.
        skel.on('+mobile -mobile', function() {
            $.prioritize(
                '.important\\28 mobile\\29',
                skel.breakpoint('mobile').active
            );
        });

        // Off-Canvas Navigation.

        // Title Bar.
        $(
            '<div id="titleBar">' +
            '<a href="#navPanel" class="toggle"></a>' +
            '<span class="title">' + $('#logo').html() + '</span>' +
            '</div>'
        )
            .appendTo($body);

        // Navigation Panel.
        $(
            '<div id="navPanel">' +
            '<nav>' +
            $('#nav').navList() +
            '</nav>' +
            '</div>'
        )
            .appendTo($body)
            .panel({
                delay: 500,
                hideOnClick: true,
                hideOnSwipe: true,
                resetScroll: true,
                resetForms: true,
                side: 'left',
                target: $body,
                visibleClass: 'navPanel-visible'
            });

        // Fix: Remove navPanel transitions on WP<10 (poor/buggy performance).
        if (skel.vars.os == 'wp' && skel.vars.osVersion < 10)
            $('#titleBar, #navPanel, #page-wrapper')
                .css('transition', 'none');

    });

    /**
     *  Gets the Semester name then adds the year next to the Heading
     */
    $(function updateSemesterYear() {
        var year = new Date;
        //set fall
        var fall = document.getElementById("fall");
        fall.innerHTML = "Fall " + year.getFullYear();

        year = year.getFullYear() + 1;
        //set spring
        var spring = document.getElementById("spring");
        spring.innerHTML = "Spring " + year;

        var summerA = document.getElementById("summerA");
        summerA.innerHTML = "Summer A " + year;

        var summerB = document.getElementById("summerB");
        summerB.innerHTML = "Summer B " + year;
    });

    /**
     * Updates the courses being taught for each semester to that of the instructor who is currently logged on
     */
    $(function updateCoursesTeaching(){
        var course = "SELECT courseID, section, lectureDays, startTime, endTime FROM CourseOffering WHERE instructorID = '1111111';";
        var element = document.getElementById("fallCourses");
        element.innerHTML = "" + course;
    });

    /**
     * Updates the instructor's name field to the name of the instructor who is currently logged on
     */
    $(function updateInstructorName(){
        var name = "SELECT firstName, lastName FROM Instructors WHERE instructorID = '1111111';";
        var element = document.getElementById("instructorName");
        element.innerHTML = "" + name;
    });

    /**
     *  Updates the instructor's details to match that of the instructor who is currently logged on
     */
    $(function updateInstructorDetails(){
        // DB queries
        var id = "SELECT instructorID FROM Instructor WHERE instructorID = '1111111';";
        var email = "SELECT email FROM Instructor WHERE instructorID = '1111111';";
        var phone = "SELECT phoneNumber FROM Instructor WHERE instructorID = '1111111';";
        var courseLoad = "SELECT maxLoad, assignedLoad FROM availability WHERE instructorID = '1111111' AND term = F15;";
        var adviser = "SELECT * FROM Instructor WHERE instructorID = '1111111';";
        var pc = "SELECT isPC FROM Instructor WHERE instructorID = '1111111';";
        var adminAccess = "SELECT * FROM Instructor WHERE instructorID = '1111111';";
        var instructorInfo = "SELECT * FROM Instructor WHERE instructorID = '1111111';";

        // Get the text elements by their ID to be updated
        var element1 = document.getElementById("instructorID");
        var element2 = document.getElementById("email");
        var element3 = document.getElementById("phone");
        var element4 = document.getElementById("courseLoad");
        var element5 = document.getElementById("adviser?");
        var element6 = document.getElementById("PC?");
        var element7 = document.getElementById("adminAccess?");

        // Update the text labels with the queried data
        element1.innerHTML = "Instructor ID: " + id;
        element2.innerHTML = "Email: " + email;
        element3.innerHTML = "Phone Number: " + phone;
        element4.innerHTML = "Course Load: " + courseLoad;
        element5.innerHTML = "Adviser? " + adviser;
        element6.innerHTML = "Program Coordinator? " + pc;
        element7.innerHTML = "adminAccess? " + adminAccess;
    });

    /**
     * Adds a new combo box (Source: http://viralpatel.net/blogs/dynamic-add-textbox-input-button-radio-element-html-javascript/)
    */
    $(function addCourseDropdown() {
        //Create an input type dynamically.
        var element = document.createElement("select");

        //Get the appropriate container to add the new combo box to
        var foo = document.getElementById("myPopupCourse");

        //Append the element in page (in span).
        foo.appendChild(element);
    });

})(jQuery);