<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'category',
        'price'
    ];

    public function getName() {
        $name = ucfirst($this->name);
        return $name;
    }
    public function getDescription() {
        return $this->description;
    }
    public function getCategory() {

        $category = "";
        switch($this->category) {
            case 1:
                $category = "Street Foods";
                break;

            case 2:
                $category = "Burger and sandwitches";
                break;

            case 3:
                $category = "Cold Drinks";
                break;

            case 4:
                $category = "Hot Drinks";
                break;

            case 5:
                $category = "Premuim Coffee";
                break;

            case 6:
                $category = "Fruit Shakes";
                break;

            case 0:
                $category = "Fruit Shakes";
                break;

            default:
            break;
        }
       return $category;
    }
    public function getPrice() {
        return $this->price;
    }
}
