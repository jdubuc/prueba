<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    use SoftDeletes;
    //use SoftDeletingTrait;
    protected $softDelete = true;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categoria';

    protected $dates = ['deleted_at'];
    
    public $errors;

    public function isValid($data)
    {
        $rules = array(
            'nombre' => 'required|max:255'
        );
     
        
        $validator = Validator::make($data, $rules);
        
        if ($validator->passes())
        {
            return true;
        }
        
        $this->errors = $validator->errors();
        
        return false;
    }
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   
    protected $fillable = array('nombre');
}
