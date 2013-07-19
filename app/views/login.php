<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel PHP Framework</title>
    <style>
        @import url(//fonts.googleapis.com/css?family=Lato:300,400,700);

        body {
            margin:0;
            font-family:'Lato', sans-serif;
            text-align:center;
            color: #999;
        }

        .welcome {
           width: 300px;
           height: 300px;
           position: absolute;
           left: 50%;
           top: 50%; 
           margin-left: -150px;
           margin-top: -150px;
        }

        a, a:visited {
            color:#FF5949;
            text-decoration:none;
        }

        a:hover {
            text-decoration:underline;
        }

        ul li {
            display:inline;
            margin:0 1.2em;
        }

        p {
            margin:2em 0;
            color:#555;
        }
    </style>
</head>
<body>
    <div class="welcome">
        Hej!
	<div class="container">
 
<form class="form-signin form-horizontal" method="post" action="/login">
<h2 class="">Var vänlig och logga in</h2>
<div class="control-group ">
<label class="control-label" for="uname">Username:</label>
<div class="controls">
<input type="text" id="uname" name="uname" placeholder="Username" value="">
</div>
</div>
<div class="control-group ">
<label class="control-label" for="password">Password:</label>
<div class="controls">
<input type="password" id="password" name="password" placeholder="Password" value="">
</div>
</div>
<button class="btn btn-large btn-primary" type="submit">Sign in</button>
</form>
</div> <!-- /container -->
    </div>
</body>
</html>


