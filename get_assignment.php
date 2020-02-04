<?php
    //Created by Spencer Archibald

    // get the data from the form
    $first_name = filter_input(INPUT_GET,'first_name');
    $last_name = filter_input(INPUT_GET,'last_name');
    $age = filter_input(INPUT_GET,'age');

    //Combine first and last name to get full name
    $full_name = $first_name . ' ' . $last_name;

    $my_name_is_message = 'Hello, my name is ' . $full_name . '.';

    //Calculate what message to display if the user is or is not 18 or older
    if($age < 18) {
        $message = 'I am not old enough to vote in the United States.';
    } else {
        $message = 'I am old enough to vote in the United States.';
    }

    //Message includes age of user and $message
    $age_message = 'I am ' . $age . ' years old and ' . $message;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Get Assignment</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <span><?php echo htmlspecialchars($my_name_is_message); ?></span><br>

        <span><?php echo htmlspecialchars($age_message); ?></span><br>

    </main>
</body>
</html>