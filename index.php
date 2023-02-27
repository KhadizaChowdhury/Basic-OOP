<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML, Basic OOP, and SuperGlobal Variables in PHP</title>
</head>
<body>
    <!-- Task 1: HTML Basics
Create an HTML form that allows users to input their name and email address. The form should have two fields: one for name and one for email. Use appropriate HTML tags to structure the form. -->
    <form method="post" action="/task_3.php">
        <h1>Task 1</h1>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>