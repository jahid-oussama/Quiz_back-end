<?php
require 'classes/database.php';

if (isset($_POST['qst'])) getQuestions();
if (isset($_POST['correction'])) getcorrection();

function getcorrection(){
    $query = "SELECT * FROM `answers` WHERE type = 1;";
    $DB = new Database();
    $conn = $DB->connect();

    $stmt = $conn->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($result);
}





function getQuestions()
{

    $query = "SELECT * FROM questions";
    $DB = new Database();
    $conn = $DB->connect();

    $stmt = $conn->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $data = array();
    foreach ($result as $row) {
        $data[] = $row;
    }



    $query = "SELECT * FROM answers";
    $DB = new Database();
    $conn = $DB->connect();
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $options = array();
    foreach ($result as $row) {
        $options[] = $row;
    }

    // echo "<pre>";
    // print_r($options);
    // echo "</pre>";
    // die;



    for ($i = 0; $i < sizeof($options); $i++) {
        for ($j = 0; $j < sizeof($data); $j++) {
            if ($options[$i]['q_id'] == $data[$j]['id']) {
                $data[$j]['answer'][] = $options[$i]['answer'];
            }
        }
    }

    //  echo "<pre>";
    //     print_r($data);
    //     echo "</pre>";
    //     die;




    echo json_encode($data);
    // echo json_encode(utf8ize($data));
}
