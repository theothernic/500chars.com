<?php
    namespace App\Traits\Models;

    use Illuminate\Database\Eloquent\Concerns\HasUlids;
    use Illuminate\Database\Eloquent\SoftDeletes;

    trait UlidModel
    {
        use HasUlids, SoftDeletes;
        protected $keyType = 'string';
        public $incrementing = false;
    }
