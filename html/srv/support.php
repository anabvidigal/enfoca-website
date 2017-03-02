<?php
include('./models/SupportModel.php');

use \models\SupportModel;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['Support'])) {
        $model = new SupportModel($_POST['Support']);

        //header('Content-Type: application/json');
        if($model->isValid()) {
            // Email message, change it whatever you wish
            $subject = "Quero um chatbot!";

            // Your e-mail address here.
            // This is where you're going to receive support messages sent through the page
            $to = 'contato@goenfoca.com.br';

            // From
            $headers = "From: {$model->email}";

            // Body
            $body = "\nName: {$model->fullname}\nEmail: {$model->email}\n\n\n{$model->message}\n\n";

            // Send mail
            //mail($to, $subject, $body, $headers);

            // Results
            echo json_encode([
                "result" => true,
                "message" => "Message sent successfully"
            ]);
        } else {
            echo json_encode([
                "result" => false,
                "message" => "Errors found",
                "errors" => $model->errors
            ]);
        }
    }
}
