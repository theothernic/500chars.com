<?php
    namespace App\Models\User\Dtos;

    use Theothernic\Datamodels\Dto\Dto;

    class UserDto extends Dto
    {
        public string $id = '';
        public string $name = '';
        public string $email = '';
        public string $created_at = '';
        public string $updated_at = '';
    }
