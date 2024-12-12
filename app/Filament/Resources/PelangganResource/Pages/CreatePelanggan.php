<?php

namespace App\Filament\Resources\PelangganResource\Pages;

use App\Filament\Resources\PelangganResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePelanggan extends CreateRecord
{
    protected static string $resource = PelangganResource::class;
    protected function getRedirectUrl(): string
    {
        // Redirect ke halaman index setelah berhasil menambahkan data
        return $this->getResource()::getUrl('index');
    }
}
