<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Copy to Clipboard Example</title>
</head>
<body>

    <div class="social-sharing d-flex-center mt-2 lh-lg">
        <span class="sharing-lbl fw-600">Share :</span>
        
        <!-- Copy to Clipboard Button -->
        <button class="d-flex-center btn btn-link btn--share copy-to-clipboard" onclick="copyToClipboard()">
            <i class="icon anm anm-copy"></i> Copy Link
        </button>
    </div>

    <script>
        function copyToClipboard() {
            // Get the text you want to copy (replace with your actual URL or content)
            var textToCopy = window.location.href;

            // Create a temporary input element
            var tempInput = document.createElement("input");
            tempInput.setAttribute("value", textToCopy);
            document.body.appendChild(tempInput);

            // Select the text in the input element
            tempInput.select();
            tempInput.setSelectionRange(0, 99999); // For mobile devices

            // Execute the "copy" command
            document.execCommand("copy");

            // Remove the temporary input element
            document.body.removeChild(tempInput);

            // Optionally, provide feedback to the user
            alert("Link copied to clipboard: " + textToCopy);
        }
    </script>

</body>
</html>
