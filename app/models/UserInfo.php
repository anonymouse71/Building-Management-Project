<?php

class UserInfo extends \Eloquent {
    protected $fillable = [];

    protected $table = 'userinfo';

    protected $guarded = ['id'];

    //user 
    public function user(){
        return $this->belongsTo('User','user_id','id');
    }




    public static $genders = array
    (
        'Male'   =>	'Male',
        'Female' =>	'Female'
    );


    public static $city_corpo = array
    (
        'Yse '   =>	'Yse',
        'No ' =>	'No'
    );

    public static $division = array
    (
        'Dhaka '   =>	'Dhaka',
        'Barisal '   =>	'Barisal',
        'Chittagong '   =>	'Chittagong',
        'Khulna '   =>	'Khulna',
        'Rajshahi '   =>	'Rajshahi',
        'Rangpur '   =>	'Rangpur',
        'Sylhet '   =>	'Sylhet',

    );
}