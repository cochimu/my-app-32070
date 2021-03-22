<div class="form-style-5">
    <form action="{{ route('games.store') }}" enctype="multipart/form-data" method="POST">
      @csrf

      <fieldset>

        <div class="form-group">
          <label for="subject">
            ボードゲーム名
          </label>
          <input
            id="name"
            type="text"
            name="name"
            value="{{old('name')}}"
            class="form-control"
          >
        </div>

        <div class="form-group">
          <label for="describe">
            ルール
          </label>
          <textarea
            id="describe"
            name="describe"
            value="{{old('describe')}}"
            class="form-control"
            rows="8"
          >
          </textarea>
        </div>

        <div class="form-group">
          <label for="subject">
            プレイ時間
          </label>
          <input
            type="number"
            name="play_time"
            value="{{old('play_time')}}"
            class="form-control"
          >
        </div>

        <div class="form-group">
          <label for="subject">
            最小プレイ人数
          </label>
          <input
            type="number"
            name="players_minimum"
            value="{{old('players_minimum')}}"
            class="form-control"
          >
        </div>

        <div class="form-group">
          <label for="subject">
            最大プレイ人数
          </label>
          <input
            type="text"
            name="players_max"
            value="{{old('players_max')}}"
            class="form-control"
          >
        </div>

        <div class="form-group" style="margin-bottom: 15px">
          <label for="image">
            画像
          </label>
          <input
            id="image"
            type='file'
            name="image"
            accept="image/png, image/jpeg"
            class="form-control-file"
          >
        </div>

        <input type="submit" value="登録" />
  
      </fieldset>
    </form>
</div>

<style type="text/css">
    .form-style-5{
      max-width: 500px;
      padding: 10px 20px;
      background: #f4f7f8;
      margin: 10px auto;
      padding: 20px;
      background: #f4f7f8;
      border-radius: 8px;
      font-family: 'ヒラギノ角ゴシック','Hiragino Sans','Meiryo UI',sans-serif;
    }
    .form-style-5 fieldset{
      border: none;
    }
    .form-style-5 legend {
      font-size: 1.4em;
      margin-bottom: 10px;
    }
    .form-style-5 label {
      display: block;
      margin-bottom: 8px;
    }
    .form-style-5 input[type="text"],
    .form-style-5 input[type="date"],
    .form-style-5 input[type="datetime"],
    .form-style-5 input[type="email"],
    .form-style-5 input[type="number"],
    .form-style-5 input[type="search"],
    .form-style-5 input[type="time"],
    .form-style-5 input[type="url"],
    .form-style-5 textarea,
    .form-style-5 select {
      font-family: 'ヒラギノ角ゴシック','Hiragino Sans','Meiryo UI',sans-serif;
      background: rgba(255,255,255,.1);
      border: none;
      border-radius: 4px;
      font-size: 15px;
      margin: 0;
      outline: 0;
      padding: 10px;
      width: 100%;
      box-sizing: border-box; 
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box; 
      background-color: #e8eeef;
      color:#8a97a0;
      -webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
      box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
      margin-bottom: 30px;
    }
    .form-style-5 input[type="text"]:focus,
    .form-style-5 input[type="date"]:focus,
    .form-style-5 input[type="datetime"]:focus,
    .form-style-5 input[type="email"]:focus,
    .form-style-5 input[type="number"]:focus,
    .form-style-5 input[type="search"]:focus,
    .form-style-5 input[type="time"]:focus,
    .form-style-5 input[type="url"]:focus,
    .form-style-5 textarea:focus,
    .form-style-5 select:focus{
      background: #d2d9dd;
    }
    .form-style-5 select{
      -webkit-appearance: menulist-button;
      height:35px;
    }
    .form-style-5 .number {
      background: #1abc9c;
      color: #fff;
      height: 30px;
      width: 30px;
      display: inline-block;
      font-size: 0.8em;
      margin-right: 4px;
      line-height: 30px;
      text-align: center;
      text-shadow: 0 1px 0 rgba(255,255,255,0.2);
      border-radius: 15px 15px 15px 0px;
    }
    
    .form-style-5 input[type="submit"],
    .form-style-5 input[type="button"]
    {
      position: relative;
      display: block;
      padding: 19px 39px 18px 39px;
      color: #FFF;
      margin: 0 auto;
      background: #1abc9c;
      font-size: 18px;
      text-align: center;
      font-style: normal;
      width: 100%;
      border: 1px solid #16a085;
      border-width: 1px 1px 3px;
      margin-bottom: 10px;
    }
    .form-style-5 input[type="submit"]:hover,
    .form-style-5 input[type="button"]:hover
    {
      background: #109177;
    }
</style>