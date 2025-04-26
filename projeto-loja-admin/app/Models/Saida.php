<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Saida extends Model
{
    protected $fillable = [
        'id',
        'produto_id',
        'qtde_saida',
        'valor_saida',
        'subtotal_saida',
        'data_saida'];

        public function produto(){
            return $this->belongsTo(Produto::class);
        }

        public static function filtro($filtro, $paginas=0){
            $retorno = self::query();

            if($filtro->produto_id){
                $retorno->where("produto_id", $filtro->produto_id);
            }

            if($filtro->data1){
                if($filtro->data2){
                    $retorno->where("data_saida",">=", $filtro->data1)->where("data_saida","<=", $filtro->data2);
                }else{
                    $retorno->where("data_saida", $filtro->data1);
                }
            }
            if($paginas>0){
                $retorno = $retorno->paginate($paginas);
            }else{
                $retorno = $retorno->get();
            }

            return $retorno;

        }
}
