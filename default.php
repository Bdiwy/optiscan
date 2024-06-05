<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ahmed Bdiwy</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }
        header {
            background-color: #007BFF;
            color: white;
            padding: 1.5rem 0;
            text-align: center;
        }
        main {
            padding: 2rem;
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }
        h2 {
            color: #007BFF;
        }
        .profile-pic {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-top: 1rem;
        }
        .button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 0.7rem 1.5rem;
            font-size: 1rem;
            margin-top: 1rem;
            cursor: pointer;
            border-radius: 5px;
        }
        .button:hover {
            background-color: #0056b3;
        }
        #contactInfo {
            display: none;
            margin-top: 1rem;
            font-size: 1.1rem;
        }
        footer {
            margin-top: 2rem;
            font-size: 0.9rem;
        }
        footer a {
            color: #007BFF;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Ahmed Bdiwy's Page</h1>
    </header>
    <main>
        <img src="https://media.licdn.com/dms/image/D4D03AQEi8nJYaqk2PQ/profile-displayphoto-shrink_800_800/0/1713613869159?e=1722470400&v=beta&t=IeHeJc76PRqo0KLV32WJm38_EiUwQuX_HfXkh_Fxv4A" alt="Ahmed Bdiwy" class="profile-pic">
        <section id="about">
            <h2>About Ahmed Bdiwy</h2>
            <p>Hello! My name is Ahmed Bdiwy. I'm a web developer with a passion for creating interactive and user-friendly web applications.</p>
        </section>
        <section id="contact">
            <h2>Contact Me</h2>
            <button class="button" id="contactButton">Show Contact Info</button>
            <p id="contactInfo">Email: ahmed@example.com</p>
        </section>
    </main>
    <footer>
        <p>Find me on GitHub: <a href="https://github.com/Bdiwy" target="_blank">https://github.com/Bdiwy</a></p>
    </footer>
    <script>
        document.getElementById('contactButton').addEventListener('click', function() {
            var contactInfo = document.getElementById('contactInfo');
            if (contactInfo.style.display === 'none') {
                contactInfo.style.display = 'block';
            } else {
                contactInfo.style.display = 'none';
            }
        });
    </script>
</body>
</html>
