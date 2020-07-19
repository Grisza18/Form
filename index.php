<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <Style>
        body {
            background-color: #eff2fb;
            font-family: roboto;
            font-size: 16px;
            color: #3e3b72;
        }

        #form1 {
            width: 600px;
            height: auto;
            margin-left: auto;
            margin-right: auto;
        }

        table {
            width: 600px;
        }

        .small {
            font-size: 12px;
        }

        .vsmall {
            padding: 0;
            font-size: 10px;
        }

        .title {
            font-weight: bold;
        }

        input::placeholder {
            color: #a3a4c2;
        }

        input:focus {
            outline: none;
        }

        input,
        select {
            color: #3e3b72;
            font-weight: bold;
            width: 250px;
            height: 40px;
            background: transparent;
            border: none;
            border-bottom: 2px solid #793ff6;
        }

        #proceed {
            background-color: #ff3fa6;
            border: none;
            font-size: 16px;
            width: 350px;
            height: 40px;
            color: white;
            font-weight: bold;
            border-radius: 40px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 50px;
            margin-left: 125px;
            margin-right: 125px;
        }

        #proceed:hover {
            background-color: #E00078;
        }

        .error {
            color: red;
            font-weight: bold;
            font-size: 10px;
            opacity: 0;
        }

        input:invalid {
            border-bottom: 2px solid red;
        }

        input:placeholder-shown {
            border-bottom: 2px solid #dce2f2;
        }

        .input:invalid~.error {
            opacity: 1;
        }

    </Style>
</head>

<body>
    <?php
    $fee= 12.50;
    ?>
    <div id=form1>
        <form method="POST" action="thanks.php">
            <table>
                <tr>
                    <td><label class="title">Your quiz details:</label></td>
                    <td><label class="title">Select your quiz topic:</label></td>
                </tr>
                <tr>
                    <td>
                        <lable class="small">Quiz title</lable>
                    </td>
                    <td>
                        <lable class="small">Category</lable>
                    </td>
                </tr>
                <tr>
                    <td><input type="text" name="title" placeholder="Enter quiz title" pattern="[A-Za-z]{5,50}" required></td>
                    <td>
                        <select name="category">
                            <option value="0">Choose category</option>
                            <option value="1">Basic knowladge</option>
                            <option value="2">General knowladge</option>
                            <option value="3">Advanced knowledge</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <lable class="vsmall">The title can't be longer than 50 chars</lable>
                    </td>
                    <td><label class="error">Please select a category</label></td>
                </tr>
                <tr>
                    <td><label class="error">Please provide a name for your quiz</label></td>
                    <td>
                        <lable class="small">Quiz entry fee</lable>
                    </td>
                </tr>
                <tr>
                    <td>
                        <lable class="small">Quiz logo</lable>
                    </td>
                    <td><input type="text" name="fee" min="5" required value="&pound;<?php echo $fee;?>"></td>
                </tr>
                <tr>
                    <td><input type="file" id="filebutton" name="plik" accept="image/png, image/jpeg"></td>
                    <td>
                        <lable class="vsmall">Min. entry fee is &pound;5.00</lable>
                    </td>
                </tr>
                <tr>
                    <td>
                        <lable class="vsmall">.JPG, .PNG only</lable>
                    </td>
                </tr>
            </table>
            <input type="Submit" value="Proceed" id="proceed">
        </form>
    </div>
</body>


</html>
