$(document).ready(function () {

    // LOAD FRONT END DATA
    menu_title = '<a href="OrgCreatePost.php">Thiết lập thông báo</a>'
    $('#function-navigation-bar-title').html(menu_title)

    homepage = '<a href="index.php">Trang chủ</a>'
    $('#homepage-path').html(homepage)

    subpage = '<a href="OrgCreatePost.php">Văn bản</a>'
    $('#subpage-path').html(subpage)

    selected_function = '<a href="OrgCreatePost.php">Thiết lập thông báo</a>'
    $('#selected-function-path').html(selected_function)
    // END LOAD FRONT END DATA

    document.getElementById('input-browse-text').addEventListener('change', function() {


        var GetFile = new FileReader();
      
         GetFile .onload=function(){
              
              // DO Somthing
        document.getElementById('output').value= GetFile.result;
      
      
      }
          
          GetFile.readAsText(this.files[0]);
    })

    $('#btn-confirm-create-post').click(function () {
        orgid = $('.orgid').attr('id')
        date = $('#post-date').val()
        serial = $('#serial').val()
        title = $('#title').val()
        browsetext = $('#output').val()
        browseimage = $('#input-browse-image').val()

        alert(browsetext);
        alert(browseimage);

        // alert (serial);
        // alert (orgid);
        // alert (title);
        // alert (date);

        if (date == ''){
            alert("Bạn chưa chọn ngày đăng thông báo!");
            return;
        }

        if (serial == ''){
            alert('Bạn chưa nhập số hiệu thông báo!');
            return;
        }

        if (title == ''){
            alert('Bạn chưa nhập tiêu đề thông báo!');
            return;
        }

        // if ((browsetext == '') && (browseimage == '')){
        //     alert ("Bạn phải tải lên tệp nội dụng hoặc hình ảnh!");
        //     return;
        // }

        $.ajax({
            cache: false,
            url: 'HandlePostManagement.php',
            type: 'POST',
            data: { orgid: orgid, date: date, serial: serial, title: title, browsetext: browsetext, browseimage: browseimage },
            success: function (result) {
                if (result.substring(0, 5) == 'ERROR') {    //EXCEPTION
                    alert(result)
                    return
                }
                PopupConfirm('Thiết lập thông báo thành công!')
                $('input').val('');
            },
            error: function (error) {
            }
        })
    })

})

var PopupConfirm = function (message) {
    $('.form-message').html(message)
    $('#form-popup-confirm').css('display', 'grid')
    $('#gradient-bg-faded').css('display', 'block')
    $('#form-popup-confirm').find('.btn-confirm').click(function () {
        $('#form-popup-confirm').css('display', 'none')
        $('#gradient-bg-faded').css('display', 'none')
    })
}