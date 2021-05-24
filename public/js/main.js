$(document).ready(function() {
    server.init();
})

var server = {
    init: function() {
        server.checkIfServerRunning();
    },

    checkIfServerRunning() {
        $.ajax({
            url: '/server/Routes.php?checkIfServerIsRunning=true',
            type: 'GET',
            dataType: 'JSON',
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
            $('#status').text('Up');
        } else {
            $('#status').text('Down');
        }
    },

    startServer: function() {
        $.ajax({
            url: '/server/Routes.php?startServer=true',
            type: 'GET',
            dataType: 'JSON',
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

    stopServer: function() {
        $.ajax({
            url: '/server/Routes.php?shutDownServer=true',
            type: 'GET',
            dataType: 'JSON',
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
    }

}