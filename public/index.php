<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simon's Insurgency Server</title>
    <meta name="description" content="Simon Hoblik's Dedicated Insurgency Server">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/style.css?ver=1.0" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="./js/main.js?ver=1.0"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;800&display=swap" rel="stylesheet"></head>
<body>
    <sidebar>
        <div class="item-container">
            <div>
                <p>Server Options</p>
            </div>
            <div onclick="server.startServer();">
                <p>Start</p>
            </div>
            <div onclick="server.stopServer();">
                <p>Stop</p>
            </div>
            <div onclick="server.checkIfServerRunning();">
                <p>Check Server Status</p>
            </div>
        </div>
    </sidebar>
    <main>
        <h1>Insurgency Server</h1>
        <h2>Status: <span class="status" id="status">Up</span></h2>
    </main>
</body>
</html>
