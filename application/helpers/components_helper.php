<?php

function active($menu)
{
    $ci=get_instance();
    if($ci->uri->segment(2)==$menu){
        echo "active";
    }
}
function InsertValue($Name)
{
    $ci=get_instance();
    return $ci->input->post($Name,true);
}

function UploadImage($PictureName,$Path,$GetParam){

    $ci=get_instance();
    $settings['upload_path']='assets/upload/'.$Path.'/';
    $settings['allowed_types']=$GetParam;
    $ci->upload->initialize($settings);
    if($ci->upload->do_upload($PictureName)){
        $image=$ci->upload->data();
        return $settings['upload_path'].$image['file_name'];
        
    }

}

function Alertifys($type,$icon,$title,$desc=null){ 
    $ci=get_instance();
    $Message='<div class="alert alert-'.$type.' inverse alert-dismissible fade show" role="alert"><i class="icon-'.$icon.'"></i>
    <p><b> '.$title.' </b>'.$desc.'</p>
    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close" data-bs-original-title="" title=""></button>
  </div>';
  $ci->session->set_flashdata('MessageFlash',$Message);
}

function AlertifysSee(){
    $ci=get_instance();
    echo $ci->session->flashdata('MessageFlash');
}

function TrunBack(){
return redirect($_SERVER['HTTP_REFERER']);
}

?>