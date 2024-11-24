<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && 
    isset($_SERVER['CONTENT_TYPE']) && strpos($_SERVER['CONTENT_TYPE'], 'application/json') !== false) {
    
    $input = json_decode(file_get_contents('php://input'), true);

    if (isset($input['code'])) {
        $code = $input['code'];

        if ($code === '1234') {
            $response = array('message' => 'The code is correct');
        } else {
            $response = array('error' => 'Invalid request');
        }

        header('Content-Type: application/json');
        echo json_encode($response);
    } else {
        header('Content-Type: application/json');
        echo json_encode(array('error' => 'No code provided'));
    }
} else {
    header('Content-Type: application/json');
    echo json_encode(array('error' => 'Invalid request'));
}
?>
