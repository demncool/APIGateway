<?php

    
    namespace App\Models; 

    use Illuminate\Database\Eloquent\Model;

    class User extends Model{
        
        // name of table
         protected $table = 'tbluser';
        // column sa table
         protected $fillable = [
            'username', 'password'
         ];

        
        public $timestamps = false;
        
        protected $hidden = [
            'password',
        ];
    }

    
