<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $fillable = ['tag'];

    public function setTagAttribute($val)
    {
        $tags = ['PHP', 'JavaScript', 'Jquery', 'Angular', 'MySQL', 'PostgreSQL', 'Yii2', 'Bootstrap', 'Mithris', 'CSS'];
        $this->attributes['tag'] = $tags[rand(0, count($tags) - 1)];
    }
    
    public function setCreateAtAttribute($val)
    {
        
        $this->attributes['create_at'] = date('Y-m-d H:i:s');
    }
    
    public function setUpdatedAtAttribute($val)
    {
        
        $this->attributes['updated_at'] = date('Y-m-d H:i:s');
    }
}
