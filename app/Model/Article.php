<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Model\Tags;


class Article extends Model
{
    protected $table = 'article';
    
    protected $fillable = ['title', 'content', 'tag', 'user_id'];
    
    /**
     * The max tags total is 3 for now
     * 
     * @param string $val
     */
    public function setTagAttribute($val)
    {
//        factory('App\Model\Article')->create();
        $num = rand(1, 4);
        $str = '';
        for($i = 0; $i < $num; $i++) {
            $str .= rand(1, count(Tags::all('id')->toArray()) - 1) . ',';
        }
        $str = trim($str, ',');
        $this->attributes['tag'] = $str;
    }
    
    /**
     * One article for a author
     * 
     * @param string $val
     */
    public function setUserIdAttribute($val)
    {
//        factory('App\Model\Article')->make();
        $users = User::all('id')->toArray();
        $this->attributes['user_id'] = implode(',', $users[array_rand($users, 1)]);
    }
    
    public function setCreateAtAttribute()
    {
        $str = $this->getChars() . ' years ' . $this->getChars() . ' months ' . $this->getChars() . ' days';
        $this->attributes['created_at'] = date('Y-m-d H:i:s', strtotime($str, time()));
    }
    
    public function setUpdatedAtAttribute()
    {
        $str = $this->getChars() . ' years ' . $this->getChars() . ' months ' . $this->getChars() . ' days';
        $this->attributes['updated_at'] = date('Y-m-d H:i:s', strtotime($str, time()));
    }
    
    public function getChars()
    {
        return $char = rand(0, 1) ? '-' : '+';
    }
    
}
