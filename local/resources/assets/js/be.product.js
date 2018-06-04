integratedCKEDITOR('content-post',height=800);
$('#btnBrowseMore').click(function () {
    window.KCFinder = {
        callBackMultiple: function (files) {
            window.KCFinder = null;
            var listImage = "";
            // textarea.value = "";
            for (var i = 0; i < files.length; i++)
                listImage += "<div class='col-md-3 text-center one-image'>" +
                    "<img src='" + files[i] + "' id='showHinh' class='image-choose' alt='' style=''>" +
                    "<input type='hidden' name='image-choose[]' value='" + files[i] + "'>" +
                    "<span data='" + i + "' class='remove-image'>X</span>" +
                    "</div>"


            $('#add-image').append(listImage);
            $('.remove-image').click(function () {
                $(this).parent().remove();
            });
        }
    };
    window.open('http://localhost:8080/maybomnuoc/js/kcfinder/browse.php?type=images',
        'kcfinder_multiple', 'status=0, toolbar=0, location=0, menubar=0, ' +
        'directories=0, resizable=1, scrollbars=0, width=800, height=600'
    );
});
if ($('#btnBrowseImage1').length) {
    var button1 = document.getElementById('btnBrowseImage1');
    button1.onclick = function () {
        selectFileWithKCFinder('pathImage1','showHinh1');
        $('#clear-image-1').show();
        $('#clear-image-1').css('display','block');
    }
}
if ($('#btnBrowseImage2').length) {
    var button2 = document.getElementById('btnBrowseImage2');
    button2.onclick = function () {
        selectFileWithKCFinder('pathImage2','showHinh2');
        $('#clear-image-2').show();
        $('#clear-image-2').css('display','block');
    }
}
$('#clear-image-1').click(function(){
    $('#pathImage1').val('');
    $('#showHinh1').attr('src','');
    $('#clear-image-1').hide();
});
$('#clear-image-2').click(function(){
    $('#pathImage2').val('');
    $('#showHinh2').attr('src','');
    $('#clear-image-2').hide();
});
$('.ulti-copy').click(function(){
    var selected = [];
    $('input[type=checkbox][name=id\\[\\]]').each(function() {
        if ($(this).is(":checked")) {
            selected.push($(this).val());
        }
    });
    if(selected.length!=0)
    {
        $('input[name=listID]').val(selected);
        alert('Đã lưu sản phẩm');
    }
    else{
        alert('Mời bạn chọn sản phẩm');
    }
    console.log(selected);
    // alert(id[0]);
});

