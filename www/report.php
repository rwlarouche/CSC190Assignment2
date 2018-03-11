<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
    margin-top: 6px;
}

button:hover {
    background-color: #45a049;
}

p {
    color: red;
}
.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}
</style>
</head>
<body>

<h2>URGENT: Help the ISA </h2>
<p>Help the International Security Agency (ISA) hunt down Dr. Evil's team! If you've seen them, please let us know where!</p>

<div class="container">
  <form>
    <div class="row">
      <div class="col-25">
        <label for="nname">Nick Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="nname" name="nickname" placeholder="Nick name">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="location">Location of Dr. Evil</label>
      </div>
      <div class="col-75">
        <input type="text" id="loc" name="loc" placeholder="Location">
      </div>
    </div>
    <div class="row">
      <button type="button" align="right" onclick="logReport()">Report</button>
    </div>
  </form>
</div>
<p id="response"></p>
<a href="list.php">Click to view reports!</a>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstap/3.3.7/js/bootstrap.min.js"></script>
<script>
function logReport() {
	// nickname: this.nname.value is the value of the nick name field
	// location: this.loc.value is the value of the location field
	var nname=this.nname.value;
	var loc = this.loc.value;	

	// If nickname and location fields are not empty
	if(nname!="" && loc!="")
	{
		$.post("servlets/data_ops.php",
		{
			op: "insertPost",
			nname: nname,
			msg: loc,
		},
		function(data, status){
			if(data=="success"){
				alert("SUCCESS: Report submitted! Thank you!");
			}else{
				alert("ERROR: Unable to process report! Please try again!");
			}
		});
	}
	if(nname=="" && loc=="")
	{
		alert("ERROR: Cannot submit empty report.");
	}
	if(nname=="" && loc!="")
	{
		alert("ERROR: Name needed for report." );
	}
	if(nname!="" && loc=="")
	{
		alert("ERROR: Location needed for report.");
	}
} // logReport
</script>
</html>
