<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'endereco', 'observacao', 'telefone'];

    public function rules()
    {
        return [
            'nome' => 'required|min:3|max:100',
            'endereco' => 'required|min:3|max:100',
            'observacao' => 'max:200',
            'telefone' => 'required'
        ];
    }
}
