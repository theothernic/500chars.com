<?php
    namespace App\Traits\Models;

    use Illuminate\Database\Eloquent\Concerns\HasUuids;
    use Illuminate\Database\Eloquent\SoftDeletes;

    trait UuidModel
    {
        use HasUuids, SoftDeletes;
        protected $keyType = 'string';
        public $incrementing = false;
    }
