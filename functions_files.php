<?php
function files_list ($directory) {
	$nb_file = 0;
	if($dossier = opendir($directory))
		{
			while(false !== ($file = readdir($dossier)))	
			{
			
				if($file != '.' && $file != '..')
				{
					$file_name[$nb_file] = $file;
					$nb_file++; 
				} 
			}
			 
			closedir($dossier);
			 
		}
		return $file_name;
}
function files_delete ($file) {
	unlink($file);
}
function files_read ($files) {
	//work to do
}