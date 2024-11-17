<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin:0;
            padding:0;
        }

        body{
            background-image: linear-gradient(to top, #00c6fb 0%, #005bea 100%);
            height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container{
            height: 300px;
            width: 32%;
            background-color:white;
            border-radius: 20px;
            display:block;
        }
        .container1{
            margin: 5px 0 5px 0;
            padding:10px;
        }

        .container h1, p {
            text-align: center;
        }
        input[type="text"]{
            width:97%;
            height: 36px;
            margin-top: 15px;
            font-size: 14px;
            padding-left:10px;
        }

        input[type="submit"]{
            width:100%;
            height: 36px;
            margin-top: 15px;
            font-size: 20px;
            border: 0;
            border-radius: 20px;
            color: white;
            cursor: pointer;
            background-image: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        input[type="submit"]:hover {
            background-image: linear-gradient(10deg, #667eea 0%, #764ba2 100%);
        }

        .container2{
            text-transform: uppercase;
            margin-bottom:20px;
        }
        .container2 p{
            padding:5px;
        }
    </style>
</head>
<body>
<?php 
        $inputMessage = $md4Hash = $md5Hash = "";

        if(isset($_GET['ipText'])) {
            $inputMessage = $_GET['ipText'];

            $md4Hash = "MD4: ".hash('md4',$inputMessage,false);
            $md5Hash = "MD5: ".hash('md5', $inputMessage, false);
            
        }
    
    
    ?>

    <div class="container">
        <div class="container1">
            <h1>Cryptographic Hash Functions</h1>
            <p>Enter the message below and click the Generate Hash button to view hash value of message obtained by using different algorithms</p>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
             <input type="text" name="ipText" value="<?php echo $inputMessage; ?>">
             <input type="submit" value="Generate Hash">
        </form>

        </div>
        <div class="container2">

            <div class="result">
                <p><?php echo $md4Hash; ?></p>
                <p><?php echo $md5Hash; ?></p>
                
            </div>
       
        </div>
    </div>

    
    
</body>
</html>