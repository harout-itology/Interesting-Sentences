<?php

    // get the DB connection
    require_once('connect.php');

    // data table name
    $table = 'interesting_sentences';

    // block the request if the keyword is missing
    if (!isset($_POST['keyword']) || !$_POST['keyword']) {
        die('Keyword not provided.');
    }

    // get the keyword
    $param_keyword = "%{$_POST['keyword']}%";

    // query on the DB with a sorting
    $sql = "SELECT * FROM $table WHERE sentence LIKE ? ORDER BY LENGTH(sentence)";

    // prepare the SQL statement
    $stmt = $conn->prepare($sql);

    // block the request on Prepare Statement error
    if (!$stmt) {
        die('Error preparing statement.');
    }

    // bind the parameter
    $stmt->bind_param("s", $param_keyword);

    // execute the statement
    if (!$stmt->execute()) {
        die('Error executing statement.');
    }

    // get the result set
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        die('No results found.');
    }

    // create the table
    echo '<table class="table">';

    // add the colors
    $row_color = ['green', 'yellow', 'blue'];
    $i = 0;

    // fetch the data
    while($row = $result->fetch_assoc()) {
        echo '<tr class="' . $row_color[$i++ % 3] . '"><td>' . $row['sentence'] . '</td></tr>';
    }
    echo '</table>';

    // close the statement and the connection
    $stmt->close();
    $conn->close();
