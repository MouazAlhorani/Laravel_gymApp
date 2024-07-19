<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
private static $counter = 0;
public $id;
public $name;
public $email;
public $phone_number;
public $gender;
public $age;
public $wh_train;
public $price;
public $members;
public $req;
public $date;
public $img;


public function __construct(
$id,
$date,
$img,
$name,
$email,
$phone_number,
$gender=null,
$age=null,
$wh_train=null,
$price=null,
array $members=null,
$req) {
    $this->date=$date;
    $this->img=$img;
    $this->id = $id;
    $this->name = $name;
    $this->email = $email;
    $this->phone_number=$phone_number;
    $this->gender=$gender;
    $this->age=$age;
    $this->wh_train=$wh_train;
    $this->price=$price;
    $this->members=$members;
    $this->req=$req;
}
}
