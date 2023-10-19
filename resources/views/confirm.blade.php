<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>
<body>


  <main>
    
  
  <div class="contact-form__heading">
        <h2>内容確認</h2>
      </div>
      
      <form class="form" action="/thanks" method="post">
        @csrf

       
        <div class="form__group-title">
            <span class="form__label--item">お名前</span>

            {{ $contact['fullname'] }}

            <input type="hidden" name="fullname" size="60" value="{{ $contact['fullname'] }}"/>

          </div>

          
        <div class="form__group-title">

            <span class="form__label--item">性別</span>

                  {{ $contact['gender'] === '1' ? '男性' : '女性' }}
                  
              <input type="hidden" name="gender" value= "{{ $contact['gender'] }}" >
</div>


            

            <div class="form__group-title">
        <span class="form__label--item">メールアドレス</span>

        {{ $contact['email'] }} 
        <input type="hidden" name="email" size="60" value="{{ $contact['email'] }}" />
</div>


          <div class="form__group-title">
            <span class="form__label--item">郵便番号</span>
    
            {{ $contact['postcode'] }}
            <input type="hidden" name="postcode" size="60" value="{{ $contact['postcode'] }}" />
          </div>



          <div class="form__group-title">
            <span class="form__label--item">住所</span>

           {{ $contact['address'] }}
            <input type="hidden" name="address" size="45" value="{{ $contact['address'] }}"  />
          </div>
          
          <div class="form__group-title">
            <span class="form__label--item">建物名</span>
            {{ $contact['building_name'] }}
          <input type="hidden" name="building_name" size="45" value="{{ $contact['building_name'] }}" />
          </div>
          
          <div class="form__group-title">  
            <span class="form__label--item">ご意見</span>
            <span class="opinion-confirm">{{ $contact['opinion'] }}</span>
        <input type="hidden" name="opinion" size="45" value="{{ $contact['opinion'] }}" />
</div>


          
         
        <div class="form__button">
          <button class="form__button-submit" type="submit">確認</button>
        
      </form>
      </div>

      <div class="retouch">  
      <a href="#" style="color:#000" onclick="history.back(-1);return false;">修正する</a>
</div>
      
  </main>
  <script src="{{ asset('/js/overflow.js') }}"></script>
</body>
</html>