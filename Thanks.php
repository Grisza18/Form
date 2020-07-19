<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>thanks</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: roboto;
            background-color: #eff2fb;
            color: #3e3b72;
        }

        #contener {
            width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        h3 {
            width: 600px;
            text-align: center;
        }

        #image {
            height: 75px;
            width: 100px;
            background-color: white;
            float: left;
            border-radius: 20px 0px 0px 20px;
        }

        #title {
            font-size: 10px;
            width: 299px;
            height: 75px;
            background-color: white;
            float: left;
        }

        #category {
            font-size: 10px;
            float: right;
            width: 200px;
            height: 75px;
            background-color: #fbfbfb;
            border-radius: 0px 20px 20px 0px;
            line-height: 75px;
            text-align: center;
        }

        label {
            font-weight: bold;
            font-size: 16px;
        }

        #fee {
            color: #ff3fa6;
        }

        a {
            font-weight: bold;
            text-align: center;
            padding: 10px 80px;
            width: 300px;
            height: 40px;
            background-color: #ff3fa6;
            color: white;
            border: none;
            margin-left: 150px;
            margin-right: 150px;
            border-radius: 40px;
        }

        img {
            margin: 12.5px 25px 12.5px 25px;
            border-radius: 10px;
        }

        P {
            margin: 18.3px 0px;
        }

        #center {
            margin-bottom: 150px;
        }

        a:link {
            text-decoration: none;
        }

        a:hover {
            background-color: #E00078;
        }

    </style>
</head>

<body>
    <div id="contener">
        <h3>Quiz created, thank you</h3>
        <div id="image"><img src="logo.jpg" alt="Logo" width="50px" height="50px"></div>
        <div id="center">
            <div id="title">
                <p><label><?php echo $_POST['title'];?></label><br>
                    Entry Fee: <label id="fee"><?php echo $_POST['fee'];?></label></p>
            </div>
            <div id="category">
                Quiz category: <b><?php
    if($_POST['category'] == 0){
        echo"";
    }else if($_POST['category'] == 1){
        echo"Basic knowladge";
    }else if($_POST['category'] == 2){
        echo"General knowladge";
    }else{
        echo"Advanced knowledge";
    }
        ?></b>
            </div>
        </div>
        <a href="index.php">Create another one!</a>
    </div>
</body>

</html>
