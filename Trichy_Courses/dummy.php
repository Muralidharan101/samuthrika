<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sticky Form Button</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            overflow-x: hidden;
        }

        #sticky-button {
            position: fixed;
            top: 50%;
            right: 0;
            transform: translateY(-50%);
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            cursor: pointer;
            border: none;
            border-radius: 5px 0 0 5px;
            font-size: 16px;
            transition: right 0.3s ease;
        }

        #sticky-button:hover {
            right: 10px;
        }

        #form-container {
            display: none;
            position: fixed;
            top: 50%;
            right: 0;
            transform: translateY(-50%);
            background-color: #f2f2f2;
            padding: 20px;
            box-shadow: -2px 0 5px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            max-width: 300px;
            width: 100%;
        }

        #close-form {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }

        /* Add media query for responsiveness */
        /* @media screen and (max-width: 768px) {
            #sticky-button {
                display: block;
            }

            #form-container {
                width: 100%;
                left: 0;
                right: unset;
                border-radius: 0;
            }
        } */
    </style>
</head>

<body>
    <button id="sticky-button">Open Form</button>
    <div id="form-container">
        <span id="close-form">X</span>
        <form>
            <!-- Your form content goes here -->
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
            <br>
            <input type="submit" value="Submit">
        </form>
    </div>

    <script>
        var stickyButton = document.getElementById('sticky-button');
        var formContainer = document.getElementById('form-container');
        var closeForm = document.getElementById('close-form');

        stickyButton.addEventListener('click', function () {
            formContainer.style.display = 'block';
        });

        closeForm.addEventListener('click', function () {
            formContainer.style.display = 'none';
        });

        stickyButton.addEventListener('mouseenter', function () {
            stickyButton.style.right = '10px';
        });

        stickyButton.addEventListener('mouseleave', function () {
            stickyButton.style.right = '0';
        });
    </script>
</body>

</html>
