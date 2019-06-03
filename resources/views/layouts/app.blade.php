<!DOCTYPE html>
<html>
  <head>
    <title>Pictweet</title>
    <link href="css/tweet.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">

    <!-- <script type="text/javascript">

    window.onload = function(){
      document.getElementById("header-form__btn").onclick = function() {
        document.getElementById("header").classList.toggle("big-header");
        document.getElementById("contents").classList.toggle("open_form");
        document.getElementById("header").appendChild(html);

        const div1 = document.getElementById("tweet-forms");

        if(div1.style.display == "block"){
          div1.style.display ="none";
        }else{
          div1.style.display ="block";
        }

      }
    };
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
     $(function() {
        // アップロードするファイルを選択
        $('input[type=file]').change(function() {
          var file = $(this).prop('files')[0];

          // 画像以外は処理を停止
          if (! file.type.match('image.*')) {
            // クリア
            $(this).val('');
            $('.graph-preview').html('');
            return;
          }

          // 画像表示
          var reader = new FileReader();
          reader.onload = function() {
            var img_src = $('<img>').attr('src', reader.result);
            $('.graph-preview').html(img_src);
          }
          reader.readAsDataURL(file);
        });
      }); 
    </script> -->

  </head>

  <body>
    <header id="header">
      <div class="header__bar row">
        <h1 class="grid-6"><a href="/">PictureBot</a></h1>
        <div class="grid-6 header-form">
          <form action="/create" method="post" enctype="multipart/form-data" class="form">
            {{csrf_field()}}
              <div class="text-box__top">
                <input type="text" class="text-box__writting" name="title" placeholder="picture title">
              </div>
              <div class="text-box__bottom">
                <label for="text-box__file" class="btn">graph</label>
                <input type="file" id="text-box__file" name="image_url">
                <input type="submit" value="投稿" id="text-box__btn" class="btn">
              </div>
          </form>
        </div>
      </div>
      <!-- <form action="/create" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div id="tweet-forms" class="row">
          <div class="text-box">
            <input type="text" class="text-box__writting" name="title">
            <label for="text-box__file">graph</label>
            <input type="file" id="text-box__file" name="image_url">
            <input type="submit" value="送信" class="btn">
          </div>
          <div class="graph-preview">
          </div>
        </div>
      </form> -->
      @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
    </header>

      @yield('content')

    <footer>
      <p>
         PictureBot
      </p>
    </footer>
  </body>
</html>