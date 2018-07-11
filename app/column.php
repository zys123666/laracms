<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class column extends Model
{
    protected $fillable = [
        'column_name', 'ico', 'desc','path','pid'
    ];

    public function article()
    {
        return $this->hasOne('App\Article');
    }
    public static function getColumnLIst($id){
        $res = Column::find($id);
        $count = Column::where('pid',$id)->count();
        $res['child'] = Column::where('pid',$id)->get();
        $res['count'] = $count;
        return $res;
    }
    public static function getColumnByType($position){
        $columns = Column::where('position',$position)->get();
        return $columns;
    }
}
