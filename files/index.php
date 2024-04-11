<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Space+Grotesk:wght@300..700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../styles/form.css" />
    <title>Signup-form</title>
    <script src="../js/formValidation.js" defer></script>
  </head>
  <body>
    <form action="signup.php" method="POST">
      <h1>Signup Form</h1>
      <section id="personal-details">
        <h2>Personal Details</h2>
        <ul>
          <li>
            <label for="fn">Full Name</label>
            <input
              type="text"
              id="fn"
              name="full-name"
              required
              maxlength="20"
            />
          </li>

          <li>
            <label for="dob">Date of Birth</label>
            <input type="date" id="dob" name="date-of-birth" />
          </li>

          <li id="gender-box">
            <label for="m-sex"
              ><input type="radio" id="m-sex" name="sex" checked value="M"/> Male</label
            >
            <br />
            <label for="f-sex"
              ><input type="radio" id="f-sex" name="sex" value="F"/> Female</label
            >
          </li>
        </ul>
      </section>

      <section id="account-creation">
        <h2>Account Creation</h2>
        <ul>
          <li>
            <label for="dn">Display Name</label>
            <input type="text" id="dn"  name="display-name" />
          </li>

          <li>
            <label for="user-email">Email Address</label>
            <input type="email" id="user-email" name="user-email">
          </li>
          <li>
            <label for="pass1">Password</label>
            <input type="password" id="pass1"  name="password" />
          </li>

          <li>
            <label for="pass2">Confirm Password</label>
            <input type="password" id="pass2"  />
          </li>
        </ul>
      </section>

      <section id="submission">
        <button type="button" onclick="validityCheck()">Create Account</button>
        <p>Already have an account? <a href="login.php">Login</a></p>
      </section>
    </form>
  </body>
</html>
