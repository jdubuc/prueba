<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class detalle_compra extends Model
{
    use SoftDeletes;
    //use SoftDeletingTrait;
    protected $softDelete = true;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'detalle_compra';

    protected $dates = ['deleted_at'];
    
    public $errors;

    public function isValid($data)
    {
        $rules = array(
            'nombre' => 'required',
            'precio' => 'required|max:255',
            'compra_id' => 'min:1',
            'categoria_id' => 'min:1'

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
   
    protected $fillable = array('cantidad','producto','compra_id','categoria_id');
}
