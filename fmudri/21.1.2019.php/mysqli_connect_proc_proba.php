<?php

include './mysqli_connection_proc.php';
//fetch assoc
$query = 'SELECT * FROM stud LIMIT 10';
if ($result = mysqli_query($link, $query)) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['mbrStud'] . ' ' . $row['imeStud'] . ' ' . $row['prezStud'];
    }
    echo "<br><hr>";
    echo 'broj redova:' . mysqli_num_rows($result);
} else {
    echo 'upit nije izvrsen';
    echo mysqli_error($link);
}
//fetch row
$query = 'SELECT * FROM stud LIMIT 10';
if ($result = mysqli_query($link, $query)) {
    while ($row = mysqli_fetch_row($result)) {
        echo $row[0] . ' ' . $row[1] . ' ' . $row[2];
    }
    echo "<br><hr>";
    echo 'broj redova:' . mysqli_num_rows($result);
} else {
    echo 'upit nije izvrsen';
    echo mysqli_error($link);
}


//fetch array
$query = 'SELECT * FROM stud LIMIT 10';
if ($result = mysqli_query($link, $query)) {
    while ($row = mysqli_fetch_array($result)) {
        echo $row[0] . ' ' . $row['imeStud'] . ' ' . $row[2];
    }
    echo "<br><hr>";
    echo 'broj redova:' . mysqli_num_rows($result);
} else {
    echo 'upit nije izvrsen';
    echo mysqli_error($link);
}

//fetch object
$query = 'SELECT * FROM stud LIMIT 10';
if ($result = mysqli_query($link, $query)) {
    while ($row = mysqli_fetch_object($result)) {
        var_dump($row);
        echo $row->mbrStud . ' ' . $row->imeStud . ' ' . $row->prezStud;
    }
    echo "<br><hr>";
    echo 'broj redova:' . mysqli_num_rows($result);
} else {
    echo 'upit nije izvrsen';
    echo mysqli_error($link);
}