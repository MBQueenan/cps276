<?php

class Date_Time
{

    private $conn;

    function __construct()
    {

        $servername = "localhost";

        $username = "mbbryson";

        $password = "ffuwvkDQsYX8";

        $dbname = "mbbryson";

        $this->conn = new mysqli($servername, $username, $password, $dbname);

        if ($this->conn->connect_error) {

            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    function checkSubmit($dtm)
    {

        $timestamp = strtotime($dtm['datetime']);

        $note = $dtm['note'];

        $mdt = date('Y-m-d H:i:s', $timestamp);

        $sql = "INSERT INTO tbl_notes (date_time,note) VALUES('$timestamp','$note');";

        if ($this->conn->query($sql)) {

            echo "Added Successfully";
        } else {

            echo "Error " . $sql;
        }
    }

    function getNotes($begin, $end)
    {
        //$begin_date = new DateTime($begin);
        //$end_date = new DateTime($end);
        //$begin_formatted = $begin_date->format('Y-m-d H:i:s');
        //$end_formatted = $end_date->format('Y-m-d H:i:s');  
        //$sql = "SELECT * FROM tbl_notes WHERE CAST(date_time AS DATE) BETWEEN '$begin_formatted' AND '$end_formatted' ORDER BY date_time;";
        
        $sql = "SELECT * FROM tbl_notes WHERE CAST(date_time AS DATE) BETWEEN '$begin' AND '$end' ORDER BY date_time;";
        $result = $this->conn->query($sql);

        $notes = array();

        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {

                $note = array("date_time" => $row['date_time'], "note" => $row['note']);

                array_push($notes, $note);
            }
        }

        return $notes;
    }
}
