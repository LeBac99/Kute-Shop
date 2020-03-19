<?php 
 function showErrors($errors,$name){
 	if($errors->has($name)){
 		return '
 			<div class="alert alert-danger" role="alert">
								<strong>'.$errors->first($name).'</strong>
			</div>

 		';
 	}
 }

 function getCategory($mang, $parent,$shift,$id_select){
 	
 	foreach($mang as $value)
 	{
 		if($value['parent_id']==$parent){
 			if($value['id']==$id_select){
 				echo "<option value = ".$value['id']." selected>".$shift.$value['name']."</option>";
 			}
 			else {
 				echo "<option value = ".$value['id'].">".$shift.$value['name']."</option>";
 			}
 			getCategory($mang,$value['id'],$shift."---|",$id_select);
 		}
 	}

 }
