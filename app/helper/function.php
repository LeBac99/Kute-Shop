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
 function checkgiaodien($mang,$parent,$count){
 	foreach($mang as $value){
 		if($value['id']==$parent){
 			$count++;
 			if($value['parent_id']==0){
 				return $count;
 			}
 			return checkgiaodien($mang,$value['parent_id'],$count);
 		}
 	}
 }
 function getchil($mang,$parent)
{
	foreach($mang as $value){
		if($value['parent_id']==$parent){
			echo 
				'<p>'.$value["name"].'<br> <a href="admin/Category/editCategory/'.$value["id"].'"  type="button" class="btn btn-warning">Sửa</a>
	                  <a href="admin/Category/deleteCategory/'.$value["id"].'" onclick="return Dellcate()"  type="button" class="btn btn-danger">Xóa</a> 
                 
                </p>';
		}
	
	}
}
