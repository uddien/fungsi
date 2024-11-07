<!DOCTYPE html>
<html>
    
<head>
    <title>
        Klik Manggil
    </title>
</head>

<body style="text-align:center;">
    
    <h1 style="color:green;">
        LurForLur
    </h1>
    
    <h4>
        Manggil fungsi PHP dengan ngeklik tombolnya
    </h4>
    
    <?php
        if(array_key_exists('button1', $_POST)) {
            button1();
        }
        else if(array_key_exists('button2', $_POST)) {
            button2();
        }
        function button1() {
            echo "Tombol 1 yang dipilih";
        }
        function button2() {
            echo "Tombol 2 yang dipilih";
        }
    ?>

    <form method="post">
        <input type="submit" name="button1"
                class="button" value="Button1" />
        
        <input type="submit" name="button2"
                class="button" value="Button2" />
    </form>
</body>

</html>
