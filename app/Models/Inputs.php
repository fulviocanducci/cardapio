<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inputs extends Model
{
    //
    public $table = 'inputs';
    protected $fillable = ['description', 'user_id', 'complement'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
