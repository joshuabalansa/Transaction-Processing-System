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
        return $this->category;
    }
    public function getPrice() {
        return $this->price;
    }
}
