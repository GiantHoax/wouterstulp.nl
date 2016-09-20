<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tijd tot vrij</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate css -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    <script language="JavaScript">


        function startCountDown()
        {
            TargetDate = "07/01/2016 5:00 PM";  // this is target time

            var dthen = new Date(TargetDate);   //target time date
            var dnow = new Date();              //current date
            ddiff = new Date(dthen-dnow);       // diffference
            gsecs = Math.floor(ddiff.valueOf()/1000);   //getseconds
            CountBack(gsecs);         //call count down
        }

        function calcage(secs, num1, num2)   //will take seconds and convert to minutes hours days etc
        {
            s = ((Math.floor(secs/num1))%num2).toString();
            if (s.length < 2)
                s = "0" + s;
            return "<b>" + s + "</b>";    //return number (unit)
        }

        function CountBack(secs)
        {
            if (secs < 0) {
                document.getElementById("finished").innerHTML = "Vrij";   //retired message
                return;
            }

            document.getElementById("mymonths").innerHTML = calcage(secs,2592000,100000);  //calculate months
            document.getElementById("mydays").innerHTML = calcage(secs,86400,30);    //calculate days
            document.getElementById("myhours").innerHTML = calcage(secs,3600,24);    //calculate hours
            document.getElementById("mymin").innerHTML = calcage(secs,60,60);        //calculate minutes
            document.getElementById("mysec").innerHTML = calcage(secs,1,60);         //calculate seconds

            setTimeout("CountBack(" + (secs-1) + ")", 990);
        }
    </script>

<body onload="startCountDown()">

<table border="1" bordercolor="#A8A9A0" width="80%" align="center">
    <tr><td align="center"><div id="mymonths"></div> Months</td></tr>
    <tr><td align="center"><div id="mydays"></div> Days</td></tr>
    <tr><td align="center"><div id="myhours"></div> Hours</td></tr>
    <tr><td align="center"><div id="mymin"></div> Minutes</td></tr>
    <tr><td align="center"><div id="mysec"></div> Seconds</td></tr>
    <tr><td align="center"><div id="finished"></div></td></tr>
</table>
</body>
</html>
<div id="countdown"></div>
</body>
</html>