<?php
namespace models;

include __DIR__ . '/../components/Model.php';
use components\Model;

class TrialModel extends Model {

    public function rules () {
        return [
            ["firstName,lastName,email,company,phone", ["required"]],
            ["email", ["email"]]
        ];
    }
}
