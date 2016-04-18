<?php 

/**
 * Global flash function  
 *
 * @param String $title
 * @param String $message
 *
 * @return flash 
 */
function flash($title = null,$message = null)
{
	//tmp
	$flash = app('App\Http\Flash');

	if(func_num_args() == 0){
		return $flash;
	}

	return $flash->info($title,$message); 
}