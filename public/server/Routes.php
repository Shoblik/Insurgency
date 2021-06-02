<?php

include('./Controllers/Server.php');


Class Routes {
    public $data = [
        'success' => true,
        'errors' => [],
    ];

    public function parsePost() {
        if ($_GET['startServer']) {
            $Server = new Server();
            $this->data = $Server->startServer($this->data);
        }

        return $this->data;
    }

    public function parseGet() {
        if ($_GET['checkIfServerIsRunning']) {
            $Server = new Server();
            $this->data = $Server->checkIfRunning($this->data);
        } else if ($_GET['shutDownServer']) {
            $Server = new Server();
            $this->data = $Server->shutdownServer($this->data);
        } else if ($_GET['startServer']) {
            // just for testing
            $Server = new Server();
            $this->data = $Server->startServer($this->data);
        }

        return $this->data;
    }
}

$Routes = new Routes();

if (empty($_POST)) {
    $data = $Routes->parseGet();
} else {
    $data = $Routes->parsePost();
}

echo json_encode($data);

