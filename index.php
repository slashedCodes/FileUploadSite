<html>
    <head>
        <title>File Upload</title>
    </head>
    <body>

    <style>

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

        input[type=submit] {
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

        input[type=submit]:hover {
            background-color: #213345;
        }

        .FButton::-webkit-file-upload-button {
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
            font-family: GBold;
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
            if (isset($_FILES['uploadedfile'])){
                move_uploaded_file($_FILES['uploadedfile']['tmp_name'], 'Files/'.$_FILES['uploadedfile']['name']); 

                session_start();
                $_SESSION['FArray'] = $_FILES['uploadedfile'];

                header('Location: post.php');
            }
        ?>

        <p>File Upload<p>

        <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" name="uploadedfile" class="FButton" >
            <input type="submit" value="Upload File">
            
        </form>

        

    </body>
</html>