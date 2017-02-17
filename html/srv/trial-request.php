<?php
include('./models/TrialModel.php');

use \models\TrialModel;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['TrialForm'])) {
        $model = new TrialModel($_POST['TrialForm']);

        header('Content-Type: application/json');
        if($model->isValid()) {
            // Email message, change it whatever you wish
            $subject = "[Your App] Trial Request Form";
            $message = "[Message to trial approval equipment]";

            // Your e-mail address here.
            // This is where you're going to receive support messages sent through the page
            $to = 'your@email.here';

            // From
            $headers = "From: {$model->email}";

            // Body
            $body = "\nName: {$model->firstName} {$model->lastName}\nEmail: {$model->email}\nCompany:{$model->company}\nPhone:{$model->phone}\n\n\n{$message}\n\n";

            // Send mail
            //mail($to, $subject, $body, $headers);

            // Results
            echo json_encode([
                "result" => true,
                "message" => "Your trial request has been processed"
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
