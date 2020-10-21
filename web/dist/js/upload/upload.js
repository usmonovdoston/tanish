$("body").delegate("input.upload-image", "change", function(){
    let ext = this.value.split('.').pop();
    let _this = $(this);
    let field_name = $(this).attr('data-field');
    if(ext=='jpeg'||ext=='jpg'||ext=='gif'||ext=='bmp'||ext=='png'){
        let parent = _this.parent();
        let list = this.files;
        let check_base_64 = this.hasAttribute('data-base64');
        if(this.hasAttribute('multiple') && this.files.length > 1){
            for(let file of list){
                let fr = new FileReader();
                fr.addEventListener("load", function (e) {
                    parent.css("background-image","url(" + fr.result + ")");
                    _this.parents('.floatLeft').after('<div class="form-group floatLeft field-'+field_name+'"><label class="upload-label" style="background-image:url(\'' + e.target.result + '\')"><input type="file" class="upload-image" name="'+$(this).attr('name')+'"><span class="btn btn-app btn-danger btn-xs udalit"><i class="ace-icon fa fa-trash-o bigger-200"></i></span></label></div>');
                }, false);
                fr.readAsDataURL(file);
            }
        }else {
            if (this.files[0]) {
                let fr = new FileReader();
                fr.addEventListener("load", function () {
                    parent.css("background-image", "url(" + fr.result + ")");
                    if(check_base_64){
                        let image_input = parent.find('input[name="image[]"]');
                        if(image_input.length==0){
                            parent.append("<input type='hidden' name='image[]'>");
                            image_input = parent.find('input[name="image[]"]');
                        }else{
                            alert('sdsd')
                        }
                        image_input.val(fr.result);
                    }
                }, false);
                fr.readAsDataURL(this.files[0]);
                /*b.children("input[name='"+$(this).attr('udalit')+"[]']").attr('name','remove[]');*/
            }
        }
    }else{
        alert('This not image!');
    }
});
$('body').delegate('.addInput', 'click', function(e){
    e.preventDefault();
    let input_list = $(this).parent().find('.upload-label');
    let check_base_64 = this.hasAttribute('data-base64');
    let base64 = (check_base_64 && $(this).attr('data-base64')=='true')?'data-base64="true"':"";
    let check_multiple = this.hasAttribute('data-multiple');
    let multiple = (check_multiple && $(this).attr('data-multiple')=='true')?'multiple="true"':"";
    if(input_list.length < 5) {
        $(this).before('<div class="form-group floatLeft field-' + $(this).attr('data-field') + '"><label class="upload-label"><input type="file" class="upload-image" name="' + $(this).attr('model') + '" accept="' + $(this).attr('data-accept') + '" data-field="' + $(this).attr('data-field') + '" ' + multiple + ' '+base64+'><span class="btn btn-app btn-danger btn-xs udalit"><i class="ace-icon fa fa-trash-o bigger-200"></i></span></label></div>');
    }
});
$('body').delegate('.udalit', 'click', function(e){
    e.preventDefault();
    let t = $(this);
    if($("label.upload-label .udalit").length!=0){
        if(this.hasAttribute('data-id')){
            $.ajax({
                url: t.attr('data-url'),
                type: 'GET',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    id: t.attr('data-id'),
                    base: t.attr('data-base')
                },
            })
            .done(function(list) {
                if(list==1){
                    t.parents('label').parent().remove();
                }
            })
            .fail(function() {
                alert("Errorr");
            });
        }
        else {
            $(this).parents('label').parent().remove();
        }
    }
    else{
        $(this).css("background","lime");
    }
});
// $("label.upload-label .udalit").eq(0).remove();
function remove(url,id,base='image'){
    let response = 0;
    $.ajax({
        url: url,
        type: 'GET',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            id: id,
            base: base
        },
    })
    .done(function(list) {
        return list;
    })
    .fail(function() {
        alert("Errorr");
    });
    return response;
}