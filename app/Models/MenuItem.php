<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;
    protected $fillable = ['menu_id','parent_id','title','description','slug','image','url','order'];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
    public function children()
    {
        return $this->hasMany(MenuItem::class, 'parent_id');
    }
}
