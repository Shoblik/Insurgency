$(document).ready(function() {
    server.init();
})

var server = {
    modOpen: false,

    init: function() {
        server.checkIfServerRunning();
    },

    checkIfServerRunning() {
        $.ajax({
            url: '/server/Routes.php?checkIfServerIsRunning=true',
            type: 'GET',
            dataType: 'JSON',
            beforeSend: function() {
                server.serverLoadStart();
            },
            complete: function() {
                server.serverLoadEnd();
            },
            success: function(response) {
                if (response.success) {
                    server.showServerStatus(response);
                } else {
                    alert('Something went wrong, call Simon | ref 111');
                }
            },
            error: function(response) {
                alert('Something went wrong, call Simon | ref 222');
            }
        });
    },

    showServerStatus: function(response) {
        if (response.serverRunning) {
            $('#status h2').text('Up');
        } else {
            $('#status h2').text('Down');
        }
    },

    startServer: function() {
        $.ajax({
            url: '/server/Routes.php?startServer=true',
            type: 'POST',
            dataType: 'JSON',
            data: {
                'modIds': $('#modIds').val(),
                'mutators': $('#mutators').val()
            },
            beforeSend: function() {
                server.serverLoadStart();
            },
            complete: function() {
                server.serverLoadEnd();
            },
            success: function(response) {
                if (response.success) {
                    server.checkIfServerRunning();
                } else {
                    alert('Something went wrong, call Simon | ref 111');
                }
            },
            error: function(response) {
                alert('Something went wrong, call Simon | ref 222');
            }
        });
    },

    stopServer: function() {
        $.ajax({
            url: '/server/Routes.php?shutDownServer=true',
            type: 'GET',
            dataType: 'JSON',
            beforeSend: function() {
                server.serverLoadStart();
            },
            complete: function() {
                server.serverLoadEnd();
            },
            success: function(response) {
                if (response.success) {
                    server.showServerStatus(response);
                } else {
                    alert('Something went wrong, call Simon | ref 111');
                }
            },
            error: function(response) {
                alert('Something went wrong, call Simon | ref 222');
            }
        });
    },

    restartServer: function() {
      server.stopServer();
      server.startServer();
      return;
    },

    serverLoadStart: function() {
        $('#status h2').css('opacity', 0);
        $('#status .spinner').css('display', 'block');
    },

    serverLoadEnd: function() {
        $('#status h2').css('opacity', 1);
        $('#status .spinner').css('display', 'none');
    },

    toggleMods: function() {
        if (server.modOpen) {
            // close
            $('#mods').slideUp('fast');
            server.modOpen = false;
        } else {
            // open
            $('#mods').slideDown('fast');
            server.modOpen = true;
        }
    }
}