import Dropzone, { SUCCESS } from "dropzone";

Dropzone.autoDiscover = false;

const dropzone = new Dropzone('#dropzone',{
    dictDefaultMessage:'Da clic para subir fotografía',
    acceptedFiles:'.png,.jpg,.jpeg,.gif',
    addRemoveLinks:true,
    dictRemoveFile:'Borrar fotografía',
    maxFiles:1,
    uploadMultiple:false,
});

dropzone.on('SUCCESS',function(file,response){
alert(response);
});
