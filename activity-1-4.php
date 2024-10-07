<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson: Building Tables in HTML</title>
    <meta name="description" content="Lesson on building tables in HTML">
    <meta name="author" content="Teacher"> 

    <!-- favicon - shows in the browser tab -->
    <link rel="shortcut icon" href="https://icsprogramming.ca/images/favicon.jpg" />

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100&family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet">

    <!-- styles - internal (not linked) -->
    <style>
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            color: #333333;
            text-align: center;
            font-family: "Roboto";
            background: url("https://media.cntraveler.com/photos/5eb18e42fc043ed5d9779733/16:9/w_4288,h_2412,c_limit/BlackForest-Germany-GettyImages-147180370.jpg");
            background-size: cover;
            background-attachment: fixed;
        }

        * {
            box-sizing: border-box;
        }

        #container {
            position: relative;
            display: inline-block;
            margin-top: 20px;
            width: 80%;
            padding: 20px;
            background: rgba(255,255,255,0.7);
            text-align: center;
        }

        /* style links */
        a:link, a:visited, a:active {
            color: #294C5F;
            text-decoration: none; /* Remove underlines from links */
            transition: all 0.3s ease;
        }
        a:hover {
            color: #AECDE1;
        }

        table.schedule-table , .schedule-table td, .schedule-table th {
          border: 2px solid #333;
          border-collapse: collapse;
          padding: 20px;
        }
        
        #headersize {
            font-size: 1.7em;
            height: 150px;
        }
        .head{
            font-weight: bold;
        }

    </style>
</head>
<body>
  <div id="container">

    <table align="center" class="schedule-table" width="800" height="550">
        <span style="font-size: 1.3em; display: block; margin-bottom: 10px; font-weight: 600;">Level 3-70%</span>
        <tr>
            <th colspan="6" id="headersize">Example Schedule</th>
        </tr>
        <tr>
            <th class="head" height="50"></td>
            <th class="head" height="50">Monday</th>
            <th class="head" height="50">Tuesday</th>
            <th class="head" height="50">Wednesday</th>
            <th class="head" height="50">Thursday</th>
            <th class="head" height="50">Friday</th>
            
        </tr>
        <tr>
            <td height="50">1:00</td>
            <td height="50" colspan="2" style="background: #ff28ff; color: #fff">BLOCK A</td>
            <td height="50" style="background: #ff530c; color: #fff">BLOCK B</td>
            <td height="50" colspan="2" style="background: #ff28ff; color: #fff">BLOCK A</td>
        </tr>
        <tr>
            <td height="50">1:30</td>
            <td height="50" colspan="5" style="background: #ffef00; color: black;">BLOCK C</td>
            
        </tr>
        <tr>
            <td height="50">2:00</td>
            <td height="50" style="background: #00e4ff" colspan="3">BLOCK D</td>
            <td height="50" colspan="2" style="background: white;">FREE</td>
        </tr>
        <tr>
            <td height="50">2:30</td>
            <td height="50" colspan="5" style="background: white;">FREE</td>
            
        </tr>
        <tr>
            <td height="50">3:00</td>
            <td height="50" style="background: #0c42e1; color: white;">BLOCK E</td>
            <td height="50" colspan="4" style="background: #266c29; color: white;">BLOCK F</td>
            
        </tr>
    </table>

<!-- TABLE 2 FOR LEVEL 4 BELOW -->

    <table align="center" class="schedule-table" width="800" height="550">
        <span style="font-size: 1.3em; display: block; margin-bottom: 20px; margin-top: 20px; font-weight: 600;">Level 4-100%</span>
        
        <!-- row 1 -->

        <tr>
            <th colspan="6" id="headersize">Example Schedule</th>
        </tr>

        <!-- row 2 -->
        
        <tr>
            <td class="head" height="50"></td>
            <td class="head" height="50">Monday</td>
            <td class="head" height="50">Tuesday</td>
            <td class="head" height="50">Wednesday</td>
            <td class="head" height="50">Thursday</td>
            <td class="head" height="50">Friday</td>
            
        </tr>

        <!-- row 3 -->

        <tr>
            <td height="50">1:00</td>
            <td rowspan="2" height="50" style="background: #ff28ff; color: #fff">BLOCK A</td>
            <td></td>
            <td rowspan="2" height="50" style="background: #ff28ff; color: #fff">BLOCK A</td>
            <td height="50" rowspan="8" style="background: #ff530c; color: #fff">BLOCK B</td>
            <td rowspan="2" height="50" style="background: #ff28ff; color: #fff">BLOCK A</td>
            
        </tr>

        <!-- row 4 -->

        <tr>
            <td height="50">1:30</td>
            <td height="50" rowspan="2" style="background: #ffef00; color: black;">BLOCK C</td>
            
        </tr>
        <!-- row 5 -->
        <tr>
            <td height="50">2:00</td>
            <td height="50" rowspan="3" style="background: #00e4ff">BLOCK D</td>
            <td height="50" rowspan="3" style="background: #00e4ff">BLOCK D</td>
            <td height="50" rowspan="3" style="background: #00e4ff">BLOCK D</td>
            
        </tr>
        <!-- row 6 -->
        <tr>
            <td height="50">2:30</td>
            
            
        </tr>
        <!-- row 7 -->
        <tr>
            <td height="50">3:00</td>
            <td height="50" rowspan="3" style="background: #0c42e1; color: white;">BLOCK E</td>
            
            
        </tr>
        <!-- row 8 -->
        <tr>
            <td height="50">3:30</td>
            <td height="50" rowspan="3" style="background: #266c29; color: #fff">BLOCK F</td>
            <td height="50" rowspan="3" style="background: #266c29; color: #fff">BLOCK F</td>
            <td height="50" rowspan="3" style="background: #266c29; color: #fff">BLOCK F</td>
            
        </tr>
        <!-- row 9 -->
        <tr>
            <td height="50">4:00</td>
            
            
        </tr>
        <!-- row 10 -->
        <tr>
            <td height="50">4:30</td>
            
            
        </tr>
    </table>

  </div>

  <!-- turn work in widget -->
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/marking-rubric/turn-work-in.inc.php"; ?>
</body>
</html>
