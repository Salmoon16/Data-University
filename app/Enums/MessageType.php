<?php

namespace App\Enums;

enum MessageType: string
{
    case CREATED = 'Berhasil  Menambahkan';
    case UPDATED = 'Berhasil  Memperbarui';
    case DELETED = 'Berhasil  Mengahpus';
    case ERROR = 'Terjadi Kesalahan, Silahkan Coba Lagi Nanti';

    public function message(string $entity = '', ?string $error = null): string

    {
        if ($this == MessageType::ERROR && $error) {
            return "{$this->value} {$error} {$error}";
        }

        return "{$this->value} {$entity}";
    }
}
