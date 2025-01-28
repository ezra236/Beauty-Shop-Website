<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="change.css">
    <title>Admin - Update Content</title>
</head>
<body>
    <h1>Update Home Page Content</h1>
    <form action="update_content.php" method="POST" enctype="multipart/form-data">
        <label for="heading">Heading (H1):</label><br>
        <input type="text" id="heading" name="heading" required><br><br>

        <label for="subheading">Subheading (H4):</label><br>
        <input type="text" id="subheading" name="subheading" required><br><br>

        <label for="description">Description (Paragraph):</label><br>
        <textarea id="description" name="description" rows="4" required></textarea><br><br>

        <label for="image">Upload Image:</label><br>
        <input type="file" id="image" name="image" accept="image/*" required><br><br>

        <button type="submit">Update Content</button>
    </form>


    <h1>Update Promo Content</h1>
    <form action="update_promo_content.php" method="POST" enctype="multipart/form-data">
        <label for="heading">Heading (H1):</label><br>
        <input type="text" id="heading" name="heading" required><br><br>

        <label for="subheading">Subheading (H4):</label><br>
        <input type="text" id="subheading" name="subheading" required><br><br>

        <label for="description">Description (Paragraph):</label><br>
        <textarea id="description" name="description" rows="4" required></textarea><br><br>

        <label for="image1">Upload First Image:</label><br>
        <input type="file" id="image1" name="image1" accept="image/*" required><br><br>

        <label for="image2">Upload Second Image:</label><br>
        <input type="file" id="image2" name="image2" accept="image/*" required><br><br>

        <button type="submit">Update Promo Content</button>
    </form>



    <h1>Change Scroll Item Image</h1>
    <form action="change_imagee.php" method="POST" enctype="multipart/form-data">
        <label for="item-id">Select Item:</label>
        <select name="item_id" id="item-id" required>
            <?php
            // Fetch available scroll items from the database
            $conn = new mysqli("localhost", "root", "", "website_db");
            $sql = "SELECT id, image_name FROM scroll_items";
            $result = $conn->query($sql);

            while ($row = $result->fetch_assoc()) {
                echo '<option value="' . $row['id'] . '">' . htmlspecialchars($row['image_name']) . '</option>';
            }

            $conn->close();
            ?>
        </select>
        <br><br>

        <label for="new-image">Upload New Image:</label>
        <input type="file" name="new_image" id="new-image" accept="image/*" required>
        <br><br>

        <button type="submit">Update Image</button>
    </form>



    <h1>Change Scroll Item Image</h1>
    <form action="change_imagee2.php" method="POST" enctype="multipart/form-data">
        <label for="item-id">Select Item:</label>
        <select name="item_id" id="item-id" required>
            <?php
            // Fetch available scroll items from the database
            $conn = new mysqli("localhost", "root", "", "website_db");
            $sql = "SELECT id, image_name FROM scroll_items2";
            $result = $conn->query($sql);

            while ($row = $result->fetch_assoc()) {
                echo '<option value="' . $row['id'] . '">' . htmlspecialchars($row['image_name']) . '</option>';
            }

            $conn->close();
            ?>
        </select>
        <br><br>

        <label for="new-image">Upload New Image:</label>
        <input type="file" name="new_image" id="new-image" accept="image/*" required>
        <br><br>

        <button type="submit">Update Image</button>
    </form>



    <h1>Update Promo 3 Content</h1>
    <form action="update_contents.php" method="POST" enctype="multipart/form-data">
        <label for="heading">Heading (H1):</label><br>
        <input type="text" id="heading" name="heading" required><br><br>

        <label for="subheading">Subheading (H4):</label><br>
        <input type="text" id="subheading" name="subheading" required><br><br>

        <label for="description">Description (Paragraph):</label><br>
        <textarea id="description" name="description" rows="4" required></textarea><br><br>

        <label for="image">Upload Image:</label><br>
        <input type="file" id="image" name="image" accept="image/*" required><br><br>

        <button type="submit">Update Promo Content</button>
    </form>


    <h1>Change Scroll Item Image</h1>
    <form action="change_imagee4.php" method="POST" enctype="multipart/form-data">
        <label for="item-id">Select Item:</label>
        <select name="item_id" id="item-id" required>
            <?php
            // Fetch available scroll items from the database
            $conn = new mysqli("localhost", "root", "", "website_db");
            $sql = "SELECT id, image_name FROM scroll_items4";
            $result = $conn->query($sql);

            while ($row = $result->fetch_assoc()) {
                echo '<option value="' . $row['id'] . '">' . htmlspecialchars($row['image_name']) . '</option>';
            }

            $conn->close();
            ?>
        </select>
        <br><br>

        <label for="new-image">Upload New Image:</label>
        <input type="file" name="new_image" id="new-image" accept="image/*" required>
        <br><br>

        <button type="submit">Update Image</button>
    </form>



    <h1>Update Promo 4 Content</h1>
    <form action="update_promo4.php" method="POST" enctype="multipart/form-data">
        <label for="heading">Heading (H1):</label><br>
        <input type="text" id="heading" name="heading" required><br><br>

        <label for="subheading">Subheading (H4):</label><br>
        <input type="text" id="subheading" name="subheading" required><br><br>

        <label for="description">Description (Paragraph):</label><br>
        <textarea id="description" name="description" rows="4" required></textarea><br><br>

        <label for="image">Upload Image:</label><br>
        <input type="file" id="image" name="image" accept="image/*" required><br><br>

        <button type="submit">Update Promo Content</button>
    </form>



    <h1>Change Scroll Item Image</h1>
    <form action="change_imagee3.php" method="POST" enctype="multipart/form-data">
        <label for="item-id">Select Item:</label>
        <select name="item_id" id="item-id" required>
            <?php
            // Fetch available scroll items from the database
            $conn = new mysqli("localhost", "root", "", "website_db");
            $sql = "SELECT id, image_name FROM scroll_items3";
            $result = $conn->query($sql);

            while ($row = $result->fetch_assoc()) {
                echo '<option value="' . $row['id'] . '">' . htmlspecialchars($row['image_name']) . '</option>';
            }

            $conn->close();
            ?>
        </select>
        <br><br>

        <label for="new-image">Upload New Image:</label>
        <input type="file" name="new_image" id="new-image" accept="image/*" required>
        <br><br>

        <button type="submit">Update Image</button>
    </form>


    <h1>Update Promo 5 Content</h1>
    <form action="update_promocontent5.php" method="POST" enctype="multipart/form-data">
        <label for="heading">Heading (H1):</label><br>
        <input type="text" id="heading" name="heading" required><br><br>

        <label for="subheading">Subheading (H4):</label><br>
        <input type="text" id="subheading" name="subheading" required><br><br>

        <label for="description">Description (Paragraph):</label><br>
        <textarea id="description" name="description" rows="4" required></textarea><br><br>

        <label for="image">Upload Image:</label><br>
        <input type="file" id="image" name="image" accept="image/*" required><br><br>

        <button type="submit">Update Promo Content</button>
    </form>





    <h1>Update Scroll Content</h1>
    <?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'website_db');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the list of item IDs
$sql = "SELECT id FROM wonderful ORDER BY id ASC";  // Fetch IDs ordered from first added to last added
$result = $conn->query($sql);
?>


<div class="centered-list">
    <ul>
        <?php
        // Display the IDs of all items
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<li>" . $row['id'] . "</li>";
            }
        } else {
            echo "<li>No items found</li>";
        }

        $conn->close();
        ?>
    </ul>
</div>

<form action="change_item.php" method="POST" enctype="multipart/form-data">
    <label for="position">Enter Item Position (1-based):</label>
    <input type="number" id="position" name="position" min="1" required><br><br>

    <label for="image">Upload New Image:</label>
    <input type="file" id="image" name="image" accept="image/*" required><br><br>

    <label for="heading">New Heading (H3):</label>
    <input type="text" id="heading" name="heading" required><br><br>

    <label for="description">New Description:</label>
    <textarea id="description" name="description" required></textarea><br><br>

    <button type="submit">Update Item</button>
</form>




    <h1>Update Detail Content</h1>
    <form action="update_detail.php" method="POST" enctype="multipart/form-data">
        <label for="heading">Heading (H1):</label><br>
        <input type="text" id="heading" name="heading" required><br><br>

        <label for="subheading">Subheading (H2):</label><br>
        <input type="text" id="subheading" name="subheading" required><br><br>

        <label for="description">Description (Paragraph):</label><br>
        <textarea id="description" name="description" rows="4" required></textarea><br><br>

        <label for="image">Upload Image:</label><br>
        <input type="file" id="image" name="image" accept="image/*" required><br><br>

        <button type="submit">Update Detail Content</button>
    </form>
    


    <h1> Update shampoo</h1>
    <form action="change_imagey.php" method="POST" enctype="multipart/form-data">
        <label for="image_id">Select Image to Replace:</label>
        <select name="image_id" id="image_id">
            <!-- Fetch the list of images from the database -->
            <?php
            $conn = new mysqli("localhost", "root", "", "website_db");

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM shampoo";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['id'] . "'>" . $row['image_path'] . "</option>";
                }
            }
            $conn->close();
            ?>
        </select>

        <label for="new_image">Upload New Image:</label>
        <input type="file" name="new_image" id="new_image" required>

        <button type="submit" name="submit">Change Image</button>
    </form>



    <h1>Change Image</h1>

<form action="changel.php" method="post" enctype="multipart/form-data">
    <label for="image">Select image:</label>
    <input type="file" name="image" id="image" required><br><br>
    <input type="submit" value="Upload Image" name="submit">
</form>


</body>
</html>