<?php

class Contact extends Eloquent  {

	protected $table = "contacts";

	protected $fillable = array('name', 'fiscal_number', 'user_id');

    public function row(){
        $row =  '<tr>';
        $row .= '<td>' . $this->id . '</td>';
        $row .= '<td>' . $this->name . '</td>';
        $row .= '<td>' . $this->fiscal_number . '</td>';
        $row .=  '<tr>';

        return $row;
    }

	public function User(){
        return $this->belongsTo('User', 'user_id');
    }

	protected $rules = array(   'name'                  	=> 'required',
                                'fiscal_number'             => 'required',
                                'user_id' 					=> 'required');

    
}

?>







