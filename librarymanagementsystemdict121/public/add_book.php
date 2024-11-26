<!DOCTYPE html> 
<html> 
<head> 
    <title>Add Book - Library Management System</title> 
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
</head> 
<body class="centered"> 
    <div class="addbook-container"> 
        <h2>Add Book</h2> 
        <!-- Form to add a new book --> 
        <form method="POST" action="add_book.php"> 
            <label for="title">Title:</label> 
            <input type="text" id="title" name="title" required><br> 
            <label for="author">Author:</label> 
            <input type="text" id="author" name="author" required><br> 
            <label  for="isbn">ISBN:</label>  
            <input  type="text" id="isbn" name="isbn" required><br>  
            <label  for="publication_year">Publication Year:</label>  
            <input  type="number" id="publication_year"  name="publication_year" required><br>  
            <label for="available_copies">Available Copies:</label>  
            <input type="number" id="available_copies"  name="available_copies" required><br>  
            <button type="submit">Add Book</button>  
        </form>  
        <div id="addBookMessage">  
            <!-- PHP code to display message will be added later -->  
        </div>  
        <!-- Link to go back to home page -->  
        <a href="index.php" class="button">Back to Home</a>  
    </div>  
</body>  
</html>  