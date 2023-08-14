<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'title',
        'body',
        'category_id'
        ];
    
   /* public function getByLimit(int $limit_count = 10)
    {
       return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
    }
    */
    function getPaginateByLimit(int $limit_count = 5)
    {
        return $this::with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    //Postに対するリレーション
    
    //「１対多」の関係なので単数形に
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
