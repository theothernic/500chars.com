<?php
    namespace App\Models;


    use App\Traits\Models\UlidModel;
    use Illuminate\Database\Eloquent\Model;

    class Post extends Model
    {
        use UlidModel;

        protected $fillable = [
            'account_id',
            'body'
        ];
    }
