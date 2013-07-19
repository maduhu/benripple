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
           width: 500px;
           height: 500px;
           position: absolute;
           left: 50%;
           top: 50%; 
           margin-left: -250px;
           margin-top: -250px;
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
<?php echo HTML::link('logout', 'Logout'); ?><br />
<?php echo HTML::link('creditlines', 'Kreditlinjer'); ?>
<?php echo HTML::link('/trust/1/unit/1/amount/100', '/trust/1/unit/1/amount/100'); ?>
<?php echo HTML::link('/trust/2/unit/1/amount/100', '/trust/2/unit/1/amount/100'); ?>

</div>
    <div class="welcome">
<?php
$priv = User::where('id', Auth::user()->id)->select('privatperson')->get()->first();

if($priv['privatperson']){
echo 'Du kan överföra <br /><br />';}
else {
echo 'Du kan utfärda till de som litar på valutan<br /><br />';}


foreach ($creditlines as $cl)
{
	//if($cl->privatperson) 
	if($cl->damoney > 0)
	echo "<b>", $cl->damoney, " ", $cl->description, "</b> till ", $cl->name, " <br />";
	//var_dump($cl);
}?>


<?php


if($priv['privatperson']){
	echo "<br /><br />Du kan också överföra <br /><br />"; 
	foreach ($creditlines2 as $cl)
	{
//var_dump($cl);
	if($cl->myleast > 0)
		echo "<b>", $cl->myleast, " ", $cl->description, "</b> till ", $cl->name, " via ",
		DB::table('users')->where('id', '=', $cl->viaid)
			->first()->name, " (", $cl->viaamount, " ", $cl->description, ")",
		"<br />";
	}
}
?>
    </div>
</body>
</html>
