<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $table = 'reservas';

    protected $fillable = [
        'id_cliente',
        'id_veiculos',
        'data_retirada',
        'data_devolucao_prevista',
        'qtd_dias',
        'valor_total',
        'status'
    ];
}
