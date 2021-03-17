<?php
class DB
{
    protected $con;
    private $info = [
        'status' => false,
        'message' => 'No server connection yet.'
    ];

    public function __construct($servername, $username, $password, $dbname) {
        $this->con = mysqli_connect($servername, $username, $password, $dbname);
        if (mysqli_connect_errno()) {
            $this->info['status'] = false;
            $this->info['message'] = "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        else {
            $this->info['status'] = true;
            $this->info['message'] = 'Server connected';
        }
        return $this;
    }

    public function __destruct() {
        $this->con->close();
    }

    public function getStatus() {
        return $this->info['status'];
    }

    public function getMessage() {
        return $this->info['message'];
    }

    public function runQuery(string $sql) {
        if ($this->info['status']) {
            $result = $this->con->query($sql);
            if ($result === true) {
                $this->info['status'] = true;
                $this->info['message'] = "Returned result: " . $result;
            }
            else {
                $this->info['status'] = false;
                $this->info['message'] = 'Request failed with message: ' . $this->con->error;
            }
        }
        
        return $this->info['message'];
    }
}