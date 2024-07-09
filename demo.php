<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dropdown Selection</title>
</head>
<body>
    <h2>Select an Item</h2>
    
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="items">Select an item:</label>
        <select name="item" id="items">
            <option value="item1">Item 1</option>
            <option value="item2">Item 2</option>
            <option value="item3">Item 3</option>
            <option value="item4">Item 4</option>
        </select>
        <br><br>
        <button type="submit" name="submit">Submit</button>
    </form>
    
    <br>
    
    <?php
    // Check if form was submitted
    if(isset($_POST['submit'])) {
        // Retrieve selected item from $_POST
        $selectedItem = $_POST['item'];
        
        // Display selected item
        echo "<h3>You selected: $selectedItem</h3>";
    }
    ?>
    
</body>
</html>
