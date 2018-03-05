<html>
<head>
	<link rel="stylesheet" href="stylesheets/list.css">
</head>

<body onload="populateFeed()"></body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container bootstrap snippets">
    <div class="col-md-7 col-md-offset-2">
        <div class="panel panel-body">
    		<div class="timeline" id="timeline">
		<!-- Begin Timeline -->
    			<!-- Timeline header -->
    			<div class="timeline-header">
    				<div class="timeline-header-title bg-success">Now</div>
    			</div>
    			<!-- Report body -->
    			
    		</div>
    		<!-- End Timeline -->
    	</div>
    </div>
</div>
<script>
	// Generate html structure for new report
	function genControl(nname, msg, ts)
	{
		var newCtrl = $("<div class='timeline-entry'><div class='timeline-stat'><div class='timeline-icon'><img src='https://bootdey.com/img/Content/avatar/avatar1.png' alt='Profile picture'></div><div class='timeline-time' id='ts'></div></div><div class='timeline-label'><h4 id='nname'></h4><p id='msg'></p></div></div>");
		newCtrl.find('#nname').html(nname);
		newCtrl.find('#msg').html(msg);
		newCtrl.find('#ts').html(ts);
		return newCtrl;
	}

	// Display posts on webpage by adding each report to html body
	function displayPosts(arrReports)
	{
		// For each report in reports array
		for (var i=0; i<arrPosts.length; i++)
		{
			var post = arrReport[i];
			var nname = post["nname"];
			var msg = post["msg"];
			var ts = post["ts"];
			
			//Create html structure for report
			var newCtrl = genControl(nname, msg, ts);
			// Append to existing feed structure
			$('#timeline').append(newCtrl);
		}
	}

	// Retrieve posts from database/server
	function retrievePosts()
	{
		$.post("servlets/data_ops.php",
		{
			op: "getPosts"
		},
		function(data, status)
		{
			var arrPosts = JSON.parse(data);
			displayPosts(arrPosts);
		});
	}

	// Periodically update page with new reports (if any)
	setInterval(retrievePosts,10000);
</script>
