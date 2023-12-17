<?php


include 'db.php';


$companyId = isset($_GET['id']) ? $_GET['id'] : 0;


$sql = "SELECT * FROM companies WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$companyId]);
$company = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$company) {
   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   
    <link rel="stylesheet" href="style.css">
  
</head>
<body>
    <div class="container">
        <?php if ($company): ?>
            <h1><?php echo htmlspecialchars($company['title']); ?></h1>
            <p><?php echo htmlspecialchars($company['subtitle']); ?></p>
            <img src="<?php echo htmlspecialchars($company['cover_image_url']); ?>" alt="Company Cover Image">

            <h2>About Us</h2>
            <p><?php echo htmlspecialchars($company['description']); ?></p>

            <h2>Contact Information</h2>
            <p><strong>Phone:</strong> <?php echo htmlspecialchars($company['phone_number']); ?></p>
            <p><strong>Location:</strong> <?php echo htmlspecialchars($company['location']); ?></p>

            <h2>Services</h2>
            <ul>
                <li><a href="<?php echo htmlspecialchars($company['service1_url']); ?>"><?php echo htmlspecialchars($company['service1_description']); ?></a></li>
                <li><a href="<?php echo htmlspecialchars($company['service2_url']); ?>"><?php echo htmlspecialchars($company['service2_description']); ?></a></li>
                <li><a href="<?php echo htmlspecialchars($company['service3_url']); ?>"><?php echo htmlspecialchars($company['service3_description']); ?></a></li>
            </ul>

            <h2>Social Media</h2>
            <ul>
                <li><a href="<?php echo htmlspecialchars($company['linkedin_url']); ?>">LinkedIn</a></li>
                <li><a href="<?php echo htmlspecialchars($company['facebook_url']); ?>">Facebook</a></li>
                <li><a href="<?php echo htmlspecialchars($company['twitter_url']); ?>">Twitter</a></li>
                <li><a href="<?php echo htmlspecialchars($company['instagram_url']); ?>">Instagram</a></li>
            </ul>
        <?php else: ?>
            <p>Company not found.</p>
        <?php endif; ?>
    </div>
</body>
</html>
