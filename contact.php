<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Contact</title>
</head>

<body>
    <!-- Navbar-Section -->
    <div class="navbar-section">
        <nav class="navbar navbar-expand-lg navbar-light bg-light px-3">
            <a href="index.html" class="navbar-brand">Pane Ribarski</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- Social-media-section -->
    <div class="social-media-section">
        <div class="social-media fs-4 d-flex text-center align-items-center justify-content-center  m-2 ">
            <a href="https://www.facebook.com/Ribarskii" target="_blank"><i
                    class="fab fa-facebook text-primary fa-2x ml-2 px-2"></i></a>
            <a href="https://www.instagram.com/paneribarski/" target="_blank"><i
                    class="fab fa-instagram text-danger fa-2x ml-2 px-2"></i></a>
            <a href="https://www.linkedin.com/in/pane-ribarski-3536ba24a/" target="_blank"><i
                    class="fab fa-linkedin text-primary fa-2x px-2"></i></a>
        </div>
    </div>
    <div class="content-section container p-3 bg-info">
        <div class="row">
            <div class="col-md-12">
                <img src="https://i.postimg.cc/bJ8zBMMC/Pane-Ribarski.jpg" alt=""
                    class="img-fluid rounded-circle smaller-image">
            </div>
            <div class="col-md-12 p-1">
                <h2 class="textcentar">Hello, I'm Pane Ribarski</h2>
                <p class="textcentar">Welcome to my personal website.</p>

            </div>
        </div>
    </div>
    <!-- Contact -->
    <div class="contact-container">
    <h2 class="text-center p-2">Contact me</h2>
    <form action="sendEmail.php" method="post" onsubmit="return message()" class="w-100">
        <div class="form-row">
            <div class="form-group col-md-12 p-2">
                <label for="name">First Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter your first name" id="name">
            </div>
            <div class="form-group col-md-12  p-2">
    <label for="lastName">Last Name</label>
    <input type="text" class="form-control" name="lastName" placeholder="Enter your last name" id="lastName">
</div>

            <div class="form-group col-md-12">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter your email" id="email">
            </div>
            <div class="form-group col-md-12  p-2">
                <label for="phoneNumber">Phone Number</label>
                <input type="tel" class="form-control" name="phoneNumber" placeholder="Enter your phone number"
                    id="phoneNumber">
            </div>
            <div class="form-group col-md-12  p-2">
                <label for="location">Location</label>
                <select class="form-control" name="location" id="location">
                    <option value="" disabled selected>Select your location</option>
                </select>
            </div>
            <div class="form-group col-md-12  p-2">
                <label for="msg">Message</label>
                <textarea class="form-control" name="msg" placeholder="Enter your message" id="msg"></textarea>
            </div>
        </div>

        <div class="text-center p-2">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
<!-- Success and danger message -->
    <div id="Success" class="alert alert-success" role="alert" style="display: none;">
        <p>Message successfully sent!</p>
    </div>
    <div id="Danger" class="alert alert-danger" role="alert" style="display: none;">
        <p>Fill in all your data so that you can successfully send the message!.</p>
    </div>
</div>




    <!-- Footer -->
    <footer class="bg-info text-dark p-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto text-center">
                Last update on 17 Jan. 11:47 p.m.
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>
