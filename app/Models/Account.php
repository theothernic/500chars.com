<?php
    namespace App\Models;

    use App\Traits\Models\UuidModel;
    use Illuminate\Database\Eloquent\Model;

    class Account extends Model
    {
        use UuidModel;

        protected $fillable = [
            'key',
            'name',
            'loc',
            'description',
            'website'
        ];
    }
