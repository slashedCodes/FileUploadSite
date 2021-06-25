<html lang="en">
<head>
    <title>Your file uploaded!</title>
</head>
<body>

    <style>

        .tooltip {
            position: relative;
            display: inline-block;
        }

        .tooltip .tooltiptext {
            visibility: hidden;
            width: 140px;
            background-color: #555;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px;
            position: absolute;
            z-index: 1;
            bottom: 150%;
            left: 50%;
            margin-left: -75px;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .tooltip .tooltiptext::after {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: #555 transparent transparent transparent;
        }

        .tooltip:hover .tooltiptext {
            visibility: visible;
            opacity: 1;
        }

        html,body {
            margin: 0;
            padding: 0;
        }

        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            min-height: 100vh;
            background-color: #272727;
        }

        button {
            display: inline-block;
            background-color: #2a4158;
            color: #eeeeee;
            text-align: center;
            font-size: unset;
            padding: 10px;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
            -o-transition: all 0.5s;
            transition: all 0.5s;
            cursor: pointer;
            appearance: flat;
            border:  none;
            outline: none;
            border-radius: 5px;
        }

        button:hover {
            background-color: #213345;
        }

        p {
            color: white;
        }

        input {
            padding: 10px;
            border: 1px solid gray;
            outline: none;
            color: white;
            background-color: transparent;
            border-radius: 4px;
        }

        @font-face {
            font-family: GBold;
            src: url(GBold.otf) format('opentype');
        }

        div {
            font-family: GBold;
        }

        * {
            font-family: GBold !important;
        }

    </style>

    <?php
        session_start();

        $site = 'localhost';

        function pre_r($array){
            echo '<pre>';
            print_r($array);
            echo '<pre>';
        }
    ?>
    
    <p>Your file uploaded with succsess!</p>

    <br>

    <input type="text" value="<?= $site.'Files/'.$_SESSION['FArray']['name']; ?>" id="TB"/>
    <div class="tooltip">
        <br>
        <button onclick="CT()" onmouseout="outFunc()">
        <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
        Copy text
        </button>

        <br>
    </div>

    <script>
        function CT() {
        var copyText = document.getElementById("TB");
        copyText.select();
        copyText.setSelectionRange(0, 99999);
        document.execCommand("copy");
        var tooltip = document.getElementById("myTooltip");
        tooltip.innerHTML = "Copied Text";
        }

        function outFunc() {
        var tooltip = document.getElementById("myTooltip");
        tooltip.innerHTML = "Copy to clipboard";
        }
    </script>  
</body>
</html>