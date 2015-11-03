<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        #Title {
            width: 30%;
            margin: 0 auto;
        }
        #div1 {
            float:left;
            width:250px;
            height:550px;
            margin:5px;
            border:3px solid blue;
        }
        #div2 {
            float:left;
            width:250px;
            height:550px;
            margin:5px;
            border:3px solid green;
        }
        #div3 {
            float:left;
            width:250px;
            height:550px;
            margin:5px;
            border:3px solid yellow;
        }
    </style>
    <script>
        function allowDrop(ev) {
            ev.preventDefault();
        }

        function drag(ev) {
            ev.dataTransfer.setData("text", ev.target.id);
        }

        function drop(ev) {
            ev.preventDefault();
            var data = ev.dataTransfer.getData("text");
            ev.target.appendChild(document.getElementById(data));
        }

var i=1;

function addInstructor() {
	var x,y,name;

	x=document.getElementById("form1") ;
	y=x.elements["name"].value;

	document.getElementById(i).innerHTML=y;
	i++;


}



    </script>
</head>

<body>

<div id="div0">
<form id="InstructorForm" action="Instructors_DB.php" method="post"> Enter Instructor Name: <input type="text" name="InstructorName">
<input type="submit" value="Submit"/>
</form>
</div>


<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
    <div id="Title"> Faculty </div>
    <div id="staff1" draggable="true" ondragstart="drag(event)"> Barott </div>
    <div id="staff2" draggable="true" ondragstart="drag(event)"> Behi </div>
    <div id="staff3" draggable="true" ondragstart="drag(event)"> Bobiceanu </div>
    <div id="staff4" draggable="true" ondragstart="drag(event)"> Boja </div>
    <div id="staff5" draggable="true" ondragstart="drag(event)"> Brixius </div>
<!--<div id="staff6" draggable="true" ondragstart="drag(event)"> Butka </div>
    <div id="staff7" draggable="true" ondragstart="drag(event)"> Demirkiran </div>
    <div id="staff8" draggable="true" ondragstart="drag(event)"> Garfield </div>
    <div id="staff9" draggable="true" ondragstart="drag(event)"> Guruvadoo </div>
    <div id="staff10" draggable="true" ondragstart="drag(event)"> Hagar </div>
    <div id="staff11" draggable="true" ondragstart="drag(event)"> Jafer </div>
    <div id="staff12" draggable="true" ondragstart="drag(event)"> Kappers </div>
    <div id="staff13" draggable="true" ondragstart="drag(event)"> Kornecki </div>
    <div id="staff14" draggable="true" ondragstart="drag(event)"> Liu </div>
    <div id="staff15" draggable="true" ondragstart="drag(event)"> Pang </div>
    <div id="staff16" draggable="true" ondragstart="drag(event)"> Seker </div>
    <div id="staff17" draggable="true" ondragstart="drag(event)"> Snyder </div>
    <div id="staff18" draggable="true" ondragstart="drag(event)"> Stansbury </div>
    <div id="staff19" draggable="true" ondragstart="drag(event)"> Towhidnejad </div>
    <div id="staff20" draggable="true" ondragstart="drag(event)"> Wilson </div>
    <div id="staff21" draggable="true" ondragstart="drag(event)"> Yang </div>
    <div id="staff22" draggable="true" ondragstart="drag(event)"> Yuan </div>
    <div id="staff23" draggable="true" ondragstart="drag(event)"> Staff </div> -->
	<div id="1" draggable="true" ondragstart="drag(event)"> </div>
	<div id="2" draggable="true" ondragstart="drag(event)"> </div>
	<div id="3" draggable="true" ondragstart="drag(event)"> </div>
	<div id="4" draggable="true" ondragstart="drag(event)"> </div>
	<div id="5" draggable="true" ondragstart="drag(event)"> </div>
	<div id="6" draggable="true" ondragstart="drag(event)"> </div>

</div>

<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)">
    <div id="Title"> Semester XXXX </div>
</div>

</body>
</html>