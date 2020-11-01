<center>
    <div class="write_post">
      <style type="text/css">
        #cancel_photo_preview {
          display: block;
          background: transparent;
          border: none;
          color: #ffffff;
          font-size: 21px;
          transition: color 0.3s;
          text-shadow: 1px 1px 8px rgb(0, 0, 0);
        }

        #photo_preview label {
          position: absolute;
          margin: 0;
          padding: 0;
          background: rgba(0, 0, 0, 0.46);
          left: 0;
          right: 0;
          top: 0;
          bottom: 0;
        }
      </style>
      <div class="post" style="text-align:left;direction: ltr">
        <table class="WritePostUserI">
          <tbody>
            <tr>
              <td style="width:50px;">
                <div class="username_OF_postImg"><img src="includes/upload/<?= $hasil['profile'];?>"></div>
              </td>
              <td style="padding: 10px 0px">
                <a><?= $hasil['fullname'];?></a><br>
                <span class="username_OF_postTime"><?= $hasil['username'];?></span>
              </td>
            </tr>
          </tbody>
        </table>
        <form id="postingToDB" action="includes\home_post.php" method="post" enctype="multipart/form-data"
          style="margin: 0;">
          <div id="w_text" class="wpost_tabcontent" style="display:block;padding: 0px">
            <textarea dir="auto" id="lang_rtl_ltr" class="post_textbox"
              placeholder="Share , post your ideas with our community" name="post_textbox"
              style="height:95px;overflow-y:hidden;text-align:left;"></textarea>
          </div>
          <div id="w_photo" class="wpost_tabcontent">
            <label>
              <input type="file" name="w_photo" accept="image/png, image/jpeg, image/jpeg"
                onchange="photoPreview(this);" style="display: none">
              <div id="photo_preview"
                style="margin-top: 10px;order: 1px solid rgba(0, 0, 0, 0.1);overflow: hidden;width: 100px;height: 100px;display:none;position: relative;">
                <label style="color: white">
                  <button type="reset" name="reset" id="cancel_photo_preview" style="display: none"><span
                      class="fa fa-times"></span></button>

                </label>
                <img id="photo_preview_src" src="#" alt="your image" style="height:100%;cursor: pointer;">
              </div>


              <div id="photo_preview_box"
                style="cursor: pointer;display:block;width:100px;height:100px;border:2px dashed rgba(78, 178, 255, 0.8);text-align:center;">
                <span class="fa fa-image"
                  style="    margin: 35%;font-size: 30px;color: rgba(78, 178, 255, 0.8);"></span>
              </div>
            </label>
          </div>
          
          <div>
            <ul class="wpost_tab">
              <li id="wt_text" style="float:left;">
                <button class="wpost_tablinks" onclick="wpost_tabs(event, 'w_text')"><span
                    style="color: cornflowerblue;margin: 0px 5px;" class="fa fa-pencil"></span> Write..</button>
              </li>
              <li id="wt_photo" style="float:left;">
                <button class="wpost_tablinks" onclick="wpost_tabs(event, 'w_photo')"><span
                    style="color: #4CAF50;margin: 0px 5px;" class="fa fa-camera"></span> Photo</button>
              </li>

              <li style="float:right;">
                <input class="default_flat_btn" type="submit" name="post_now" value="Post now"
                  style="margin: 5px;padding: 8px 10px;">
              </li>
              <li style="float:right;">
                <select id="p_privacy" style="margin: 5px; padding: 0px 10px; max-width: 110px; height: 35px;"
                  name="w_privacy">
                  <option selected="">Public</option>
                  <option>Followers</option>
                  <option> Only me</option>
                </select>
              </li>
            </ul>
          </div>
        </form>
        
      </div>
      <div id="getingNP"></div>
      

      <script type="text/javascript">
        function wpost_tabs(e, tabName) {
          e.preventDefault();
          switch (tabName) {
            case "w_text":
              $('#w_text').show();
              $('.post_textbox').focus();
              $('#w_photo').slideUp();
              $('#w_title').slideUp();
              break;
            case "w_photo":
              $('#w_photo').slideToggle(300);
              break;
            case "w_title":
              $('#w_title').slideToggle(300);
              break;
          }
        }

        $('#your_title').maxlength();
        function photoPreview(input) {
          if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
              $('#photo_preview_src').attr('src', e.target.result);
              $('#photo_preview_box').css({ "display": "none" });
              $('#photo_preview').css({ "display": "block" });
              $('#cancel_photo_preview').css({ "display": "block" });
            }

            reader.readAsDataURL(input.files[0]);
          } else {
            $('#photo_preview_box').css({ "display": "block" });
            $('#photo_preview').css({ "display": "none" });
            $('#cancel_photo_preview').css({ "display": "none" });
          }
        }
        $(document).ready(function () {
          $('#cancel_photo_preview').hide();
          $('#cancel_photo_preview').click(function () {
            $('#photo_preview').hide();
            $('#cancel_photo_preview').hide();
            $('#photo_preview_box').show();
          });
        });
        $('.post_textbox').each(function () {
          this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;text-align:' + "left;");
        }).on('input', function () {
          this.style.height = 'auto';
          this.style.height = (this.scrollHeight) + 'px';
        });
      </script>
    </div>
  </center>