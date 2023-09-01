<?php
    namespace App\Models;

    use App\Traits\Models\UuidModel;
    use App\View\Models\Account\Profile;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

        public function user(): BelongsTo
        {
            $this->belongsTo(User::class);
        }

    }
