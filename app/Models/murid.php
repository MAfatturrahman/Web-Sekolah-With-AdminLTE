<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class murid extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    use HasFactory;

    protected $fillabel = [
        'spp_id', 'nama', 'umur', 'kelas', 'tanggal_lahir', 'nis', 'jk', 'jurusan'
    ];

    public function spp()
    {
        $this->hasOne(spp::class);
    }
}
