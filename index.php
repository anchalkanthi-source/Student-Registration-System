
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="container">

        <h1>Student Registration Form</h1>
        <p>Please fill in your details below.</p>

        <form id="registrationForm" action="process.php" method="POST">

            <label>Full Name</label>
            <input type="text" name="fullname" id="fullname"
                   placeholder="Enter your full name" required>

            <label>Email Address</label>
            <input type="email" name="email" id="email"
                   placeholder="Enter your email" required>

            <label>Phone Number</label>
            <input type="tel" name="phone" id="phone"
                   placeholder="Enter 10-digit phone number"
                   pattern="[0-9]{10}"
                   maxlength="10"
                   minlength="10"
                   required>

            <label>Date of Birth</label>
            <input type="date" name="dob" id="dob"
                   max="<?php echo date('Y-m-d'); ?>" required>

            <label>Gender</label>
            <select name="gender" id="gender" required>
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>

            <label>Course</label>
            <select name="course" id="course" required>
                <option value="">Select Course</option>
                <option value="Computer Science">Computer Science</option>
                <option value="Information Science">Information Science</option>
                <option value="Electronics">Electronics</option>
                <option value="Mechanical">Mechanical</option>
            </select>

            <label>Address</label>
            <textarea name="address" id="address"
                      placeholder="Enter your address" required></textarea>

            <button type="submit">Submit Registration</button>

        </form>

    </div>
    <!-- jQuery Library -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- JavaScript File -->
    <script src="js/script.js"></script>
</body>
</html>
