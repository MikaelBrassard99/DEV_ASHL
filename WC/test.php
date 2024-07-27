<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <style>
        div {
            width: 25%;
            height: 25%;
            float: left;
            text-align: center;
        }

        #A_hidden {
            display: none;
        }

        #A:hover #A_hidden {
            display: block;
            background: red;
            position: absolute;
            top: 0;
            left: 0;
        }
    </style>
</head>

<body>
    <div id="A">
        <div>1</div>
        <div id="A_hidden">dgdfgdfgdfgsd</div>
    </div>
</body>

</html>