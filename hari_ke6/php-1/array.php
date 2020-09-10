<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>
<body>
    <h1>Berlatih Array</h1>
        
    <?php 
        echo "<h3> Soal 1 </h3>";
        /* 
            SOAL NO 1
            Kelompokkan nama-nama di bawah ini ke dalam Array.
            Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" 
            Adults: "Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"
        */
        $kids = array ("Mike", "Dustin" , "Will", "Lucas", "Max", "Eleven");
        $adults = array ("Hopper", "Nancy",  "Joyce", "Jonathan", "Murray");
        var_dump($kids);
        
        var_dump($adults);


        echo "<h3> Soal 2</h3>";
        /* 
            SOAL NO 2
            Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
        */
        echo "Cast Stranger Things: ";
        echo "<br>";
        echo "Total Kids: " . count($kids);
        echo "<br>";
        echo "<ol>"; 
        echo "<li> $kids[0] </li>";
        echo "<li> $kids[1] </li>";
        echo "<li> $kids[2] </li>";
        echo "<li> $kids[3] </li>";
        echo "<li> $kids[4] </li>";
        echo "<li> $kids[5] </li>";
        

        echo "</ol>";
        
        echo "Total Adults: " . count($adults);
        echo "<br>";
        echo "<ol>";
        echo "<li> $adults[0] </li>";
        echo "<li> $adults[1] </li>";
        echo "<li> $adults[2] </li>";
        echo "<li> $adults[3] </li>";
        echo "<li> $adults[4] </li>";
       

        echo "</ol>";

        echo "<h3> Soal 3</h3>";
        /*
            SOAL No 3
            Susun data-data berikut ke dalam bentuk Asosiatif Array (Array Multidimensi)
            
            Name: "Will Byers"
            Age: 12,
            Aliases: "Will the Wise"
            Status: "Alive"

            Name: "Mike Wheeler"
            Age: 12,
            Aliases: "Dungeon Master"
            Status: "Alive"

            Name: "Jim Hopper"
            Age: 43,
            Aliases: "Chief Hopper"
            Status: "Deceased"

            Name: "Eleven"
            Age: 12,
            Aliases: "El"
            Status: "Alive"
            
        */
        $data = array (
            array ("name" => "Will Byers", "age" => 12, "aliases" => "Will the Wise", "status" => "Alive"),
            array ("name" => "Mike Wheeler", "age" => 12, "aliases" => "Dungeon Master", "status" => "Alive"),
            array ("name" => "Jim Hopper", "age" => 43, "aliases" => "Chief Hopper", "status" => "Deceased"),
            array ("name" => "Eleven", "age" => 12, "aliases" => "El", "status" => "Alive")
            
        );

        echo "Nama : " . $data[0]['name'] . "<br>";
        echo "Age : " . $data[0]['age'] . "<br>";
        echo "Aliases : " . $data[0]['aliases'] . "<br>";
        echo "Status : " . $data[0]['status'] . "<br>"."<br>";

        echo "Nama : " . $data[1]['name'] . "<br>";
        echo "Age : " . $data[1]['age'] . "<br>";
        echo "Aliases : " . $data[1]['aliases'] . "<br>";
        echo "Status : " . $data[1]['status'] . "<br>"."<br>";

        echo "Nama : " . $data[2]['name'] . "<br>";
        echo "Age : " . $data[2]['age'] . "<br>";
        echo "Aliases : " . $data[2]['aliases'] . "<br>";
        echo "Status : " . $data[2]['status'] . "<br>"."<br>";

        echo "Nama : " . $data[3]['name'] . "<br>";
        echo "Age : " . $data[3]['age'] . "<br>";
        echo "Aliases : " . $data[3]['aliases'] . "<br>";
        echo "Status : " . $data[3]['status'] . "<br>"."<br>";

    ?>
</body>
</html>
