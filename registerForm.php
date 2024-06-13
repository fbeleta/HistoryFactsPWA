<!DOCTYPE html>
<html lang="hr">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function validateForm() {
            var isValid = true;
            var name = document.forms["registrationForm"]["name"];
            var surname = document.forms["registrationForm"]["surname"];
            var username = document.forms["registrationForm"]["username"];
            var email = document.forms["registrationForm"]["email"];
            var password = document.forms["registrationForm"]["password"];
            var confirmPassword = document.forms["registrationForm"]["confirmPassword"];
            var errorElements = document.getElementsByClassName('error');
            
            while(errorElements[0]) {
                errorElements[0].parentNode.removeChild(errorElements[0]);
            }

            if (username.value == "") {
                isValid = false;
                var error = document.createElement('div');
                error.className = 'error';
                error.innerText = 'Korisničko ime je obavezno.';
                username.classList.add('input-error');
                username.parentNode.insertBefore(error, username.nextSibling);
                document.getElementById("username").style.border = "1px solid red";
            } else {
                username.classList.remove('input-error');
                document.getElementById("username").style = '';
                document.getElementById("username").style.border = "2px solid green";
            }

            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (email.value == "" || !emailPattern.test(email.value)) {
                isValid = false;
                var error = document.createElement('div');
                error.className = 'error';
                error.innerText = 'Unesite ispravnu email adresu.';
                email.classList.add('input-error');
                email.parentNode.insertBefore(error, email.nextSibling);
                document.getElementById("email").style.border = "1px solid red";
            } else {
                document.getElementById("email").style = '';
                email.classList.remove('input-error');
                document.getElementById("email").style.border = "2px solid green";
            }

            if (password.value == "") {
                isValid = false;
                var error = document.createElement('div');
                error.className = 'error';
                error.innerText = 'Lozinka je obavezna.';
                password.classList.add('input-error');
                password.parentNode.insertBefore(error, password.nextSibling);
                document.getElementById("password").style.border = "1px solid red";
            } else {
                password.classList.remove('input-error');
                document.getElementById("password").style = '';
                document.getElementById("password").style.border = "2px solid green";
            }

            if (name.value == "") {
                isValid = false;
                var error = document.createElement('div');
                error.className = 'error';
                error.innerText = 'Ime je obavezno.';
                name.classList.add('input-error');
                name.parentNode.insertBefore(error, name.nextSibling);
                document.getElementById("name").style.border = "1px solid red";
            } else {
                document.getElementById("name").style = '';
                document.getElementById("name").style.border = "2px solid green";
                password.classList.remove('input-error');
            }
            if (surname.value == "") {
                isValid = false;
                var error = document.createElement('div');
                error.className = 'error';
                error.innerText = 'Prezime je obavezno.';
                surname.classList.add('input-error');
                surname.parentNode.insertBefore(error, surname.nextSibling);
                document.getElementById("surname").style.border = "1px solid red";
            } else {
                password.classList.remove('input-error');
                document.getElementById("surname").style = '';
                document.getElementById("surname").style.border = "2px solid green";
            }

            if (confirmPassword.value == "" || password.value != confirmPassword.value) {
                isValid = false;
                var error = document.createElement('div');
                error.className = 'error';
                error.innerText = 'Lozinke se ne podudaraju.';
                confirmPassword.classList.add('input-error');
                confirmPassword.parentNode.insertBefore(error, confirmPassword.nextSibling);
                document.getElementById("confirmPassword").style.border = "1px solid red";
            } else {
                confirmPassword.classList.remove('input-error');
                document.getElementById("confirmPassword").style = '';
                document.getElementById("confirmPassword").style.border = "2px solid green";

            }

            return isValid;
        }
    </script>
</head>
<body>
    <header>
    <?php 
            include('header.php')
        ?>
    </header>
    <main>
        <form name="registrationForm" action="register.php" onsubmit="return validateForm()" method="post">
            <label for="name">Ime:</label>
            <input type="text" id="name" name="name">
            <label for="surname">Prezime:</label>
            <input type="text" id="surname" name="surname">
            <label for="username">Korisničko ime:</label>
            <input type="text" id="username" name="username">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email">
            <label for="password">Lozinka:</label>
            <input type="password" id="password" name="password">
            <label for="confirmPassword">Potvrdi lozinku:</label>
            <input type="password" id="confirmPassword" name="confirmPassword"><br><br>
            <button type="submit">Registriraj se</button>
        </form>
    </main>
    <footer>
    <?php 
            include('footer.php')
        ?>
    </footer>
</body>
</html>
