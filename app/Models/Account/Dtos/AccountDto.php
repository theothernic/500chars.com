<?php
    namespace App\Models\Account\Dtos;

    use Theothernic\Datamodels\Dto\Dto;

    class AccountDto extends Dto
    {
        public string $id = '';
        public string $key = '';
        public string $name = '';
        public string $location = '';
        public string $description = '';
        public string $website = '';
    }
