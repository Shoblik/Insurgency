<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simon's Insurgency Server</title>
    <meta name="description" content="Simon Hoblik's Dedicated Insurgency Server">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/style.css?ver=1.0" />
    <script src="./js/main.js?ver=1.0"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;800&display=swap" rel="stylesheet"></head>
<body>
    <main>
        <h1>Insurgency Server</h1>
        <div class="main-content">
            <div class="button-container">
                <button class="standard-btn start-server" onclick="window.open('/actions/startInsurgency.php', '_self')">Start Server</button>
                <button class="standard-btn stop-server" onclick="window.open('/actions/shutdownInsurgency.php', '_self')">Shutdown Server</button>
            </div>
        </div>
    </main>
</body>
</html>
