<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GYM extends Model
{
private static $counter = 0;
public $id;
public $name;
public $email;
public $password;
public $address;
public $logo;
public $phone_number;
public $land_number;
public $description;
public $wh_women;
public $wh_men;
public $dS_price;
public $threeDS_price;
public function __construct($name,$email,$password=null,
$address=null,
$logo=null,
$phone_number=null,
$land_number=null,
$description=null,
$wh_men=null,
$wh_women=null,
$dS_price=null,
$threeDS_price=null) {
    self::$counter++; 
    $this->id = self::$counter;
    $this->name = $name;
    $this->email = $email;
    $this->password=$password;
    $this->address=$address;
    $this->logo=$logo;
    $this->phone_number=$phone_number;
    $this->land_number=$land_number;
    $this->description=$description;
    $this->wh_men=$wh_men;
    $this->wh_women=$wh_women;
    $this->dS_price=$dS_price;
    $this->threeDS_price=$threeDS_price;
}
}
