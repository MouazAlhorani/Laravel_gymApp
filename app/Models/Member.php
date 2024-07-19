<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Member extends Model

{    
    public $id;
    public $name;
    public $email;
    public $phone_number;
    public $gender;
    public $age;
    public $hieght;
    public $wieght;
    public $coach;
    public $nutritionist;
public $date;
public $img;

    public $req;
    public function __construct(
    $img,
    $date,
    $id,
    $name,
    $email,
    $phone_number,
    $gender=null,
    $age=null,
    $wieght=null,
    $hieght=null,
    $coach=null,
    $nutritionist=null,
    $req) {
        $this->img=$img;
        $this->date=$date;
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->phone_number=$phone_number;
        $this->gender=$gender;
        $this->age=$age;
        $this->wieght=$wieght;
        $this->hieght=$hieght;
        $this->coach=$coach;
        $this->nutritionist=$nutritionist;
        $this->req=$req;
    }


    
}
