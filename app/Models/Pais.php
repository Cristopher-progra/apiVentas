<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Pais extends Model
{
    use HasFactory;
    protected $table = 'pais'; // Nombre de la tabla
    protected $fillable = ['id', 'nombre']; // Campos de la tabla
}