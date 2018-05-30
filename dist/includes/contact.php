<?php

require('database.php');

// SENT MESSAGE
$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

if(isset($post['submit'])) {

  $name = $post['name'];
  $email = $post['email'];
  $body = $post['message'];

  $database->query('INSERT INTO messages(name, email, body) VALUES(:name, :email, :body)');
  $database->bind(':name', $name);
  $database->bind(':email', $email);
  $database->bind(':body', $body);
  if($database->execute()) {
    echo '<div style="width:90%;padding:30px;margin:30px auto; border:1px solid green;border-radius:5px;text-align:center;>"';
    echo '<h3>Message has been sent. Thank you!</h3>';
    echo '<a href="../index.html"><p>Return to Main Page</p></a>';
    echo '</div>';
  } else {
    echo '<h3 style="color:red;">Something went wrong! Please try again.</h3>';
    echo '<a href="../index.html">Return to Main Page</a>';
  }
}
