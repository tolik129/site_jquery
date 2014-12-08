$(function(){
    new AjaxUpload($('#upload'),{
        action: 'php/ipload.php',
        name: 'uploadfile',
        onSubmit: function(file, ext){
            if(!(ext && /^(ipg|png|jpeg|gif)$/.test(ext)))
            {
                $('#status').text('mogno zagrygat file ipg, png');
                return false;
            }
            $('#status').text('Zagruzka...');
        },
        onComplete: function(response){
            $('#status').text('');
            if (response != null){
                $('#files').html('<img src="upload/temp/' + response + '" alt="">');
                $('#upload').text('Izmenit');
            }
            else{
                $('#files').text('File ne zagrugen');
            }
        }
    });
});