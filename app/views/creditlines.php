<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        @import url(//fonts.googleapis.com/css?family=Lato:300,400,700);

        body {
            margin:0;
            font-family:'Lato', sans-serif;
            text-align:center;
            color: #999;
        }

        .welcome {
           width: 400px;
           height: 400px;
           position: absolute;
           left: 50%;
           top: 50%; 
           margin-left: -200px;
           margin-top: -200px;
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
<div class="header">
<?php echo Auth::user()->username; ?> är inloggad.<br />
<?php echo HTML::link('logout', 'Logout'); ?>

</div>
    <div class="welcome">
Du kan direkt överföra <br /><br />
<?php
foreach ($creditlines as $cl)
{
	if($cl->privatperson) 
	echo "<b>", $cl->amount, " ", $cl->description, "</b> till ", $cl->name, " <br />";
}?>

<br /><br />Du kan också överföra <br /><br />

<?php
//echo var_dump($creditlines2);

foreach ($creditlines2 as $cl)
{
if($cl->myleast)
	echo "<b>", $cl->myleast, " ", $cl->description, "</b> till ", $cl->name, " via ",
	DB::table('users')->where('id', '=', $cl->viaid)->first()->name, " (", $cl->viaamount, " ", $cl->description, ")",
	"<br />";
}
?>
    </div>
</body>
</html>
