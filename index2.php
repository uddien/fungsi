<!DOCTYPE html>
<html>
    
<head>
    <title>
        Manggil Juga
    </title>
</head>

<body style="text-align:center;">
    
    <h1 style="color:green;">
        LurforLur
    </h1>
    
    <h4>
        Manggil fungsi PHP dengan ngeklik tombolnya
    </h4>

    <?php
    
        if(isset($_POST['button1'])) {
            echo "This is Button1 that is selected";
        }
        if(isset($_POST['button2'])) {
            echo "This is Button2 that is selected";
        }
    ?>
    
    <form method="post">
        <input type="submit" name="button1"
                value="Button1"/>
        
        <input type="submit" name="button2"
                value="Button2"/>
    </form>
</body>

</html>
