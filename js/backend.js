function getBaseURL(){var e=location.href,t=e.substring(0,e.indexOf("/",14));if(-1!=t.indexOf("http://localhost")){var e=location.href,n=location.pathname,a=e.indexOf(n),i=e.indexOf("/",a+1);return e.substr(0,i)+"/"}return t+"/"}function selectFileWithKCFinder(e,t){window.KCFinder={callBack:function(n){document.getElementById(e).value=n,$("#"+t).show(),$("#"+t).fadeIn("fast").attr("src",n),window.KCFinder=null}},window.open(getBaseURL()+"js/kcfinder/browse.php?type=images","kcfinder_textbox","status=0, toolbar=0, location=0, menubar=0, directories=0, resizable=1, scrollbars=0, width=800, height=600"),""==$("#"+e).val()?$("#"+t).hide():$("#"+t).show()}function integratedCKEDITOR(e,t){if($("#"+e).length){CKEDITOR.replace(e,{height:t,language:"vi",format_tags:"p;h1;h2;h3;pre",filebrowserBrowseUrl:"http://localhost:8080/maybomnuoc/js/kcfinder/browse.php?type=files",filebrowserImageBrowseUrl:"http://localhost:8080/maybomnuoc/js/kcfinder/browse.php?type=images",filebrowserFlashBrowseUrl:"http://localhost:8080/maybomnuoc/js/kcfinder/browse.php?type=flash",filebrowserUploadUrl:"http://localhost:8080/maybomnuoc/js/kcfinder/upload.php?type=files",filebrowserImageUploadUrl:"http://localhost:8080/maybomnuoc/js/kcfinder/upload.php?type=images",filebrowserFlashUploadUrl:"http://localhost:8080/maybomnuoc/js/kcfinder/upload.php?type=flash",extraAllowedContent:"div"}).on("instanceReady",function(){this.dataProcessor.writer.selfClosingEnd=">";var e=CKEDITOR.dtd;for(var t in CKEDITOR.tools.extend({},e.$nonBodyContent,e.$block,e.$listItem,e.$tableContent))this.dataProcessor.writer.setRules(t,{indent:!0,breakBeforeOpen:!0,breakAfterOpen:!0,breakBeforeClose:!0,breakAfterClose:!0})})}}function integrateSearch(e,t){$("#"+e).click(function(){""!=$("#txtSearch").val().trim()&&$("#txtSearch").val().trim().replace(/ +(?= )/g,"")!=$("input[name='hdKeyword']").val()&&$("#"+t).submit()})}function isEmpty(e){return""!==e&&void 0!==e&&e.length>0&&null!==e}function loadDataFormWhenSelectTreeMenu(e){$("input[name=state]").val("edit"),$("form#frmCreateThuNghiem").attr("action",getBaseURL()+"sml_admin/menu-update/"+e.id),$("input[name=_method]").val("PATCH"),$("input[name=name]").val(e.name),$("input[name=parentId]").val(e.parent_id),$("input[name=mainId]").val(e.id),$("input[name=level]").val(e.level),$("input[name=order]").val(e.order),$("button#deleteMenu").show(),$(".test_info_right h3.title").html("Cập Nhật Menu: "+e.name),1===e.isActive?$("input[name=menu_is_active]").prop("checked",!0):$("input[name=menu_is_active]").prop("checked",!1),1===e.type?($("#menu_state_page_category").hide(),$("#menu_state_page_single").show(),$("input[name=state_menu_category]").prop("checked",!1),$("select[name=page_id]").children("option").removeAttr("selected"),$("select[name=page_id]").children("option[value="+e.content_id+"]").attr("selected","selected")):($("#menu_state_page_category").show(),$("#menu_state_page_single").hide(),$("input[name=state_menu_category]").prop("checked",!0),$("select[name=category_id]").children("option").removeAttr("selected"),$("select[name=category_id]").children("option[value="+e.content_id+"]").attr("selected","selected"))}function resetForm(){$("input[name=state]").val("insert"),$("form#frmCreateThuNghiem").attr("action",getBaseURL()+"sml_admin/menu-create"),$("input[name=_method]").val("POST"),$("input[name=name]").val(""),$(".test_info_right h3.title").html("Tạo Mới Menu"),$("input[name=parentId]").val(""),$("input[name=mainId]").val(""),$("input[name=level]").val(""),$("input[name=order]").val(""),$("#menu_state_page_category").hide(),$("#menu_state_page_single").show(),$("input[name=menu_is_active]").prop("checked",!1),$("input[name=state_menu_category]").prop("checked",!1),$("select[name=page_id]").children("option").removeAttr("selected"),$("select[name=page_id]").children("option[value=0]").attr("selected","selected"),$("select[name=category_id]").children("option").removeAttr("selected"),$("select[name=category_id]").children("option").first().attr("selected","selected")}function loadTreeMenu(){$.ajax({type:"GET",url:getBaseURL()+"sml_admin/load-tree",dataType:"json",success:function(e){var t=$("#tree").tree({uiLibrary:"bootstrap4",dataSource:e,primaryKey:"id",dragAndDrop:!0});t.bind("select",{key:e},function(e,t,n){$.ajax({type:"GET",url:getBaseURL()+"sml_admin/find/"+n,dataType:"json",success:function(e){loadDataFormWhenSelectTreeMenu(e)}})}),t.on("nodeDrop",function(e,t,n,a){console.log(a),null==n&&(n=0),$.ajax({type:"GET",url:getBaseURL()+"sml_admin/updateNodeFamily/"+t+"/"+n,dataType:"json",success:function(e){}})})},error:function(e){}})}var token=$('meta[name="csrf-token"]').attr("content");if(integratedCKEDITOR("description-page",height=200),integratedCKEDITOR("description-page-introduce",height=200),$("#btnBrowseImage").length){var button1=document.getElementById("btnBrowseImage");button1.onclick=function(){selectFileWithKCFinder("pathImage","showHinh")}}if($(".ulti-copy").click(function(){var e=[];$("input[type=checkbox][name=id\\[\\]]").each(function(){$(this).is(":checked")&&e.push($(this).val())}),0!=e.length?($("input[name=listID]").val(e),alert("Đã lưu sản phẩm")):alert("Mời bạn chọn sản phẩm"),console.log(e)}),$(".ulti-paste").click(function(){$("input[name=listID]").val()?$("#formPaste").submit():alert("Bạn chưa Sao Chép Hoặc Chưa chọn sản phẩm")}),integratedCKEDITOR("content-page",height=800),integratedCKEDITOR("description-post",height=200),integratedCKEDITOR("content-post",height=800),$("#btnBrowseImagePost").length){var button1=document.getElementById("btnBrowseImagePost");button1.onclick=function(){selectFileWithKCFinder("pathImagePost","showHinhPost")}}if(loadTreeMenu(),$("#select_state_menu_category").is(":checked")?($("#menu_state_page_category").show(),$("#menu_state_page_single").hide()):($("#menu_state_page_category").hide(),$("#menu_state_page_single").show()),$("#select_state_menu_category").change(function(){$("#select_state_menu_category").is(":checked")?($("#menu_state_page_category").show(),$("#menu_state_page_single").hide()):($("#menu_state_page_category").hide(),$("#menu_state_page_single").show())}),$("#test_info_state_menu").change(function(){switch($(this).val()){case"1":$("#menu_state_page").show();break;case"2":$("#menu_state_page").hide()}}),$("#sumbitFormThuNghiem").click(function(){$("#frmCreateThuNghiem").submit()}),$("button#addMoreMenu").click(function(){$("button#deleteMenu").hide(),resetForm()}),$("button#addSubMenu").click(function(){$("button#deleteMenu").hide();var e=$("input[name=mainId]").val(),t=$("input[name=name]").val(),n=$("input[name=level]").val();resetForm(),$(".test_info_right h3.title").html("Thêm Menu Con Cho: "+t),$("input[name=parentId]").val(e),$("input[name=level]").val(n)}),$("button#deleteMenu").click(function(){var e=$("input[name=mainId]").val();$("form#frmCreateThuNghiem").attr("action",getBaseURL()+"sml_admin/menu-delete/"+e),$("input[name=_method]").val("Delete"),$("#frmCreateThuNghiem").submit()}),integratedCKEDITOR("content-post",height=800),$("#btnBrowseMore").click(function(){window.KCFinder={callBackMultiple:function(e){window.KCFinder=null;for(var t="",n=0;n<e.length;n++)t+="<div class='col-md-3 text-center one-image'><img src='"+e[n]+"' id='showHinh' class='image-choose' alt='' style=''><input type='hidden' name='image-choose[]' value='"+e[n]+"'><span data='"+n+"' class='remove-image'>X</span></div>";$("#add-image").append(t),$(".remove-image").click(function(){$(this).parent().remove()})}},window.open("http://localhost:8080/maybomnuoc/js/kcfinder/browse.php?type=images","kcfinder_multiple","status=0, toolbar=0, location=0, menubar=0, directories=0, resizable=1, scrollbars=0, width=800, height=600")}),$("#btnBrowseImage1").length){var button1=document.getElementById("btnBrowseImage1");button1.onclick=function(){selectFileWithKCFinder("pathImage1","showHinh1"),$("#clear-image-1").show(),$("#clear-image-1").css("display","block")}}if($("#btnBrowseImage2").length){var button2=document.getElementById("btnBrowseImage2");button2.onclick=function(){selectFileWithKCFinder("pathImage2","showHinh2"),$("#clear-image-2").show(),$("#clear-image-2").css("display","block")}}if($("#clear-image-1").click(function(){$("#pathImage1").val(""),$("#showHinh1").attr("src",""),$("#clear-image-1").hide()}),$("#clear-image-2").click(function(){$("#pathImage2").val(""),$("#showHinh2").attr("src",""),$("#clear-image-2").hide()}),$(".ulti-copy").click(function(){var e=[];$("input[type=checkbox][name=id\\[\\]]").each(function(){$(this).is(":checked")&&e.push($(this).val())}),0!=e.length?($("input[name=listID]").val(e),alert("Đã lưu sản phẩm")):alert("Mời bạn chọn sản phẩm"),console.log(e)}),integratedCKEDITOR("description-content",height=200),integratedCKEDITOR("description-signatures",height=200),$("#btnBrowseImageMobile").length){var button1=document.getElementById("btnBrowseImageMobile");button1.onclick=function(){selectFileWithKCFinder("pathImageMobile","showHinhMobile")}}