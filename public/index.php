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
<!--    <sidebar>-->
<!--        <div class="item-container">-->
<!--            <div>-->
<!--                <p>Server Options</p>-->
<!--            </div>-->
<!--            <div onclick="server.startServer();">-->
<!--                <p>Start</p>-->
<!--            </div>-->
<!--            <div onclick="server.stopServer();">-->
<!--                <p>Stop</p>-->
<!--            </div>-->
<!--            <div onclick="server.checkIfServerRunning();">-->
<!--                <p>Check Server Status</p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </sidebar>-->
    <main>
        <div class="head-container">
            <h1>Insurgency Server</h1>
            <h2>Status:</h2>
            <div class="status" id="status">
                <h2></h2>
                <img class="spinner" src="./img/spinner.gif" alt="" />
            </div>
        </div>
        <div class="content">
            <div class="item-container">
                <div>
                    <p>Server Options</p>
                </div>
                <div onclick="server.startServer();">
                    <p>Start Server</p>
                </div>
                <div onclick="server.stopServer();">
                    <p>Stop Server</p>
                </div>
                <div onclick="server.restartServer();">
                    <p>Restart Server</p>
                </div>
                <div onclick="server.checkIfServerRunning();">
                    <p>Check Server</p>
                </div>
                <div onclick="server.toggleMods();">
                    <p>Mods</p>
                </div>
            </div>
        </div>
        <div id="mods" class="mods">
            <div class="mod-container">
                <div class="mod-item">
                    <p>Mod IDs: (Comma separated, no spaces)</p>
                    <input id="modIds" type="text" class="standard-input" name="modIds" />
                </div>
                <div class="mod-item">
                    <p>Mutators: (Comma separated, no spaces)</p>
                    <input id="mutators" type="text" class="standard-input" name="mutators" value="AllYouCanEat" />
                </div>
            </div>
        </div>
    </main>
</body>
</html>
