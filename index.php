<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Generator</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <script src="./script.js" defer></script>
</head>
<body>
    <header>
        <h1 style="margin: 0; text-align: center">Image Generator</h1>
    </header>
    <div class="container">
        <form class="query-form">
            <input placeholder="Enter query..." class="query-inp">
            <button class="blue-btn-pushable" role="button">
                <span class="blue-btn-shadow"></span>
                <span class="blue-btn-edge"></span>
                <span class="blue-btn-front text">
                    Generate
                </span>
            </button>
        </form>
        <p class="display-none" id="info-text">Generating...</p>
    </div>
</body>
</html>