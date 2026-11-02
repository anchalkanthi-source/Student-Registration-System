
<?php

// Check form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get student details
    $name = trim($_POST['fullname'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $dob = trim($_POST['dob'] ?? '');
    $gender = trim($_POST['gender'] ?? '');
    $course = trim($_POST['course'] ?? '');
    $address = trim($_POST['address'] ?? '');

    // Validate submitted information
    if (
        $name === '' ||
        !filter_var($email, FILTER_VALIDATE_EMAIL) ||
        !preg_match('/^[0-9]{10}$/', $phone) ||
        $dob === '' ||
        $gender === '' ||
        $course === '' ||
        $address === ''
    ) {
        die("Invalid or incomplete submission. Please go back and try again.");
    }

    // Generate registration ID
    $registrationID = "REG-" . strtoupper(bin2hex(random_bytes(4)));

    // Secure output function
    function clean($data) {
        return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    }

} else {
    die("Please submit the registration form first.");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registration Successful</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="container success-container">

        <!-- Success Icon -->
        <div class="success-icon">✓</div>

        <h1>Registration Successful!</h1>

        <p>Your details have been submitted successfully.</p>

        <!-- Registration ID -->
        <div class="registration-id">
            <span>Registration ID</span>
            <h2><?php echo clean($registrationID); ?></h2>
        </div>

        <!-- Student Details -->
        <h2>Student Details</h2>

        <div class="details">

            <p><strong>Full Name:</strong> <?php echo clean($name); ?></p>

            <p><strong>Email:</strong> <?php echo clean($email); ?></p>

            <p><strong>Phone:</strong> <?php echo clean($phone); ?></p>

            <p><strong>Date of Birth:</strong> <?php echo clean($dob); ?></p>

            <p><strong>Gender:</strong> <?php echo clean($gender); ?></p>

            <p><strong>Course:</strong> <?php echo clean($course); ?></p>

            <p><strong>Address:</strong> <?php echo clean($address); ?></p>

        </div>

        <!-- Action Buttons -->
        <div class="action-buttons">

            <button type="button" class="print-button"
                    onclick="window.print()">
                Print Details
            </button>

            <a href="index.php" class="home-button">
                Back to Home
            </a>

        </div>

        <footer class="page-footer">
            © 2026 Student Registration System
        </footer>

    </div>

</body>
</html>
