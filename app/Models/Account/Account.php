<?php
    namespace App\Models\Account;

    use App\Models\Account\Dtos\AccountDto;
    use App\Models\User\User;
    use App\Traits\Models\UuidModel;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;

    class Account extends Model
    {
        use UuidModel;

        protected $fillable = [
            'key',
            'name',
            'location',
            'description',
            'website'
        ];

        public function user(): BelongsTo
        {
            return $this->belongsTo(User::class);
        }

        public function asDto(): AccountDto
        {
            return new AccountDto($this->getAttributes());
        }


    }
