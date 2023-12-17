<?php
include 'db.php';

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve and validate form data
    $coverImageUrl = $_POST['cover_image_url'];
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $description = $_POST['description'];
    $phoneNumber = $_POST['phone_number'];
    $location = $_POST['location'];
    $type = $_POST['type'];
    $service1Url = $_POST['service1_url'];
    $service1Description = $_POST['service1_description'];
    $service2Url = $_POST['service2_url'];
    $service2Description = $_POST['service2_description'];
    $service3Url = $_POST['service3_url'];
    $service3Description = $_POST['service3_description'];
    $contactDescription = $_POST['contact_description'];
    $linkedinUrl = $_POST['linkedin_url'];
    $facebookUrl = $_POST['facebook_url'];
    $twitterUrl = $_POST['twitter_url'];
    $instagramUrl = $_POST['instagram_url'];

   
    if (empty($coverImageUrl)) {
        $errors[] = "Cover Image URL is required.";
    }

    if (empty($title)) {
        $errors[] = "Title is required.";
    }



   
    if (empty($errors)) {
        $sql = "INSERT INTO companies (cover_image_url, title, subtitle, description, phone_number, location, type, service1_url, service1_description, service2_url, service2_description, service3_url, service3_description, contact_description, linkedin_url, facebook_url, twitter_url, instagram_url) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$coverImageUrl, $title, $subtitle, $description, $phoneNumber, $location, $type, $service1Url, $service1Description, $service2Url, $service2Description, $service3Url, $service3Description, $contactDescription, $linkedinUrl, $facebookUrl, $twitterUrl, $instagramUrl]);

        
        header('Location: page3.php?id=' . $pdo->lastInsertId());
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post" action="">
       
        <?php if (!empty($errors)): ?>
            <div style="color: red;">
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <label for="cover_image_url">Cover Image URL:</label>
        <input type="text" name="cover_image_url" id="cover_image_url" required>

        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required>

        <label for="subtitle">Subtitle:</label>
        <input type="text" name="subtitle" id="subtitle">

        <label for="description">Description:</label>
        <textarea name="description" id="description"></textarea>

        <label for="phone_number">Phone Number:</label>
        <input type="text" name="phone_number" id="phone_number">

        <label for="location">Location:</label>
        <input type="text" name="location" id="location">

        <label for="type">Type:</label>
        <input type="text" name="type" id="type">

        <label for="service1_url">Service 1 URL:</label>
        <input type="text" name="service1_url" id="service1_url">

        <label for="service1_description">Service 1 Description:</label>
        <textarea name="service1_description" id="service1_description"></textarea>

        <label for="service2_url">Service 2 URL:</label>
        <input type="text" name="service2_url" id="service2_url">

        <label for="service2_description">Service 2 Description:</label>
        <textarea name="service2_description" id="service2_description"></textarea>

        <label for="service3_url">Service 3 URL:</label>
        <input type="text" name="service3_url" id="service3_url">

        <label for="service3_description">Service 3 Description:</label>
        <textarea name="service3_description" id="service3_description"></textarea>

        <label for="contact_description">Contact Description:</label>
        <textarea name="contact_description" id="contact_description"></textarea>

        <label for="linkedin_url">LinkedIn URL:</label>
        <input type="text" name="linkedin_url" id="linkedin_url">

        <label for="facebook_url">Facebook URL:</label>
        <input type="text" name="facebook_url" id="facebook_url">

        <label for="twitter_url">Twitter URL:</label>
        <input type="text" name="twitter_url" id="twitter_url">

        <label for="instagram_url">Instagram URL:</label>
        <input type="text" name="instagram_url" id="instagram_url">

        <button type="submit">Submit</button>
    </form>
</body>
</html>
