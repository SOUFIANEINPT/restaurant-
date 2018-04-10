<?php

namespace App;
use App\Facture;
use App\Categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Tabel extends Model
{
    protected $fillable = [
        'name', 'Nombrechaire', 'picture','menu_id','categories_id',
    ];

    public function categorie()
    {
        return $this->hasOne('App\Categorie');
    }
    public function menu()
    {
        return $this->hasOne('App\Menu');
    }
    public function tableresrve()
    {
 $sql='SELECT tabels.name,tabels.Nombrechaire,tabels.picture,resrvations.dateFin FROM tabels JOIN resrvations ON 
  tabels.id=resrvations.table_id WHERE resrvations.experation=false OR resrvations.type=2' ;
       return DB::select($sql);
    }
    public static function tableNoResrve()
    {
        $sql='SELECT * FROM tabels WHERE id  NOT IN  (SELECT table_id FROM resrvations WHERE experation=false)';
       return DB::select($sql);
    }
}
