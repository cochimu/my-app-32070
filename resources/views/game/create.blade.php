<div class="container mt-4">
  <div class="border p-4">
    <h1 class="h4 mb-4 font-weight-bold">新規作成</h1>

    {{-- <form action="{{ route('game.store') }}" enctype="multipart/form-data" method="POST"> --}}
      @csrf

      <fieldset class="mb-4">

        <div class="form-group">
          <label for="subject">
            名前
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

        <div class="form-group">
          <label for="image">
            商品画像
          </label>
          <input
            id="image"
            type='file'
            name="image"
            accept="image/png, image/jpeg"
            class="form-control-file"
          >
        </div>

        <button type="submit" class="btn btn-primary">
          投稿する
        </button>
  
      </fieldset>
    </form>
  </div>
</div>