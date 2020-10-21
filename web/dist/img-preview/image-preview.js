$(function(){
    let body = $('body');
    body.delegate('.imgPreview','click',function(){
        if($('#imgPreviewModal').length<=0){
            body.append('<div id="imgPreviewModal" class="modalPreview">\n' +
                '\n' +
                '        <span class="closePreview">&times;</span>\n' +
                '\n' +
                '        <img class="modal-contentPreview" alt="img" id="img01">\n' +
                '\n' +
                '        <div id="caption"></div>\n' +
                '    </div>');
        }
        $('#imgPreviewModal').show();
        $('#img01').attr('src',$(this).attr('src'));
    });

    body.delegate('.closePreview','click',function(){
        $('#imgPreviewModal').hide();
    });
    body.delegate('#imgPreviewModal','click',function(e){
        if(e.target.id == 'imgPreviewModal'){
            $('#imgPreviewModal').hide();
        }
    });
});