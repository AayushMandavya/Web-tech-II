<html>
    <head>
        <title>Assignment 2</title>
</head>

<body>
    <?php

        function evaluate($name,$attendance,$rating,$hygene)
        {
            if($hygene<50 or $attendance<80 or $rating<3)
            {
                echo $name. "You are fired from Rojan Kirana Pasal";
            }else{
                echo "Not Fired for now";
            }
        }

    evaluate("Kusal Karki",20,3,70);

    function evaluatenew($name,$attendance,$rating,$hygene)
    {
        if(($attendance<80 and $hygene<50) or ($hygene<50 and $rating<2)){
            echo $name. "You are fired from Rojan Kirana Pasal";
        }else{
            echo "Not Fired for now";
        }
        }
    evaluatenew("Aayush",50,1,60);
    ?>
    </body>
    </html>
    