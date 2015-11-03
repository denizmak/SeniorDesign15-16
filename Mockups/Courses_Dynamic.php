<!DOCTYPE HTML>
<html>
<head>
<style>
#Title {
	width: 30%;
	margin: 0 auto;
}
#div1 {	
	float:left;
	width:250px;
	height:250px; 
	margin:5px;
	border:3px solid blue;
}
#div2 {	
	float:left;
	width:250px;
	height:250px; 
	margin:5px;
	border:3px solid green;
}
#div3 {	
	float:left;
	width:250px;
	height:250px; 
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

function addCourse(){
	var x,y,CourseID;
	x=document.getElementById("form1") ;
	y=x.elements["CourseID"].value;
	document.getElementById(i).innerHTML=y;
	i++;
}


</script>
</head>
<body>

<div id="div0">
<form id="form1"> Enter Course ID: <input name="CourseID" type="varchar" size="5">
<input type="button" value="Submit" onclick="addCourse()"/>
</form>
</div>

<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
	<div id="Title"> Courses </div>
	<div id="course1" draggable="true" ondragstart="drag(event)"> CS332 </div>
	<div id="course2" draggable="true" ondragstart="drag(event)"> CS220 </div>
	<div id="course3" draggable="true" ondragstart="drag(event)"> CS223 </div>
	<div id="1" draggable="true" ondragstart="drag(event)"> </div>
	<div id="2" draggable="true" ondragstart="drag(event)"> </div>
	<div id="3" draggable="true" ondragstart="drag(event)"> </div>
	<div id="4" draggable="true" ondragstart="drag(event)"> </div>
	<div id="5" draggable="true" ondragstart="drag(event)"> </div>
	<div id="6" draggable="true" ondragstart="drag(event)"> </div>
</div>

<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"><div id="Title"> Fall </div></div>

<div id="div3" ondrop="drop(event)" ondragover="allowDrop(event)"><div id="Title"> Spring </div></div>

</body>
</html>