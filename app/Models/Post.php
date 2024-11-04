<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
   use HasFactory;
   protected $fillable = ['judul', 'author_id', 'body'];

   public function author(): BelongsTo{
      return $this->belongsTo(User::class);
   }

}

