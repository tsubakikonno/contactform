<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    

</head>
<body>


  <main>
    
  
  <div class="contact-form__heading">
        <h2>お問い合わせ</h2>
      </div>
      
      <form class="h-adr" action="/confirm" method="post">
        @csrf

        
        

        <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span style = color:red;>　※</span>
  
         <input type="text" size="30" name = "familyname" value="{{ old('familyname') }}" id = "familyname" class="txt">
        <input type="text" size="30" name = "givenname" value="{{ old('givenname')}}" id = "givenname" class="txt"><br>
        <span class="example">例)山田　　　　　　　　　例)太郎</span>
          </div>

            <div class="form__error">
            @error('familyname')
  {{ $message }} 
@enderror
</div>
<div class="form__error">
            @error('givenname')
  {{ $message }} 
@enderror
</div>

      




        <div class="form__group-title">
            <span class="form__label--item">性別</span>
            　　<span style = color:red;>※</span><input type="radio" name="gender" value='2' @if( old('gender') === '2' )selected @endif>女性
            <input type="radio" name="gender" value='1' @if( old('gender') === '1' )selected @endif  checked>男性

</div>


            

          <div class="form__group-title">
          <span class="form__label--item">メールアドレス</span>
          <span style = color:red;>※</span>
          <input type="email" name="email" size="60" value="{{ old('email') }}" class="txt">
          <span class="example">例)test@example.com</span>
          </div>
        <div class="form__error">

@error('email')
  {{ $message }} 
@enderror
</div>

          <div class="form__group-title">
            <span class="p-country-name" style="display:none;">Japan</span>
            <span class="form__label--item">郵便番号</span>
            <span style = color:red;>　※</span>
            〒<input type="text" name="postcode" size="45" value="{{ old('postcode') }}" id="demo" class="p-postal-code" />
          <span class="example">例)123-4567</span>
          </div>

          <div class="form__error"> 
          @error('postcode')
  {{ $message }} 
@enderror
</div>

          <div class="form__group-title">
            　<span class="form__label--item">住所</span>
            <span style = color:red;>　※</span>
            <input type="text" name="address" size="45" value="{{ old('address') }}" class="p-region p-locality p-street-address p-extended-address"/>
            <span class="example">例)東京都渋谷区千駄ヶ谷1-2-3</span>
          </div>
          
          <div class="form__error">
            @error('address')
  {{ $message }} 
@enderror
</div>

            


          <div class="form__group-title">
            <span class="form__label--item">建物名</span>
            <span style = color:red;>　　</span>
          <input type="text" name="building_name" size="45" value="{{ old('building_name') }}" class="txt"  />
          <span class="example">例)千駄ヶ谷マンション101</span>
          </div>
          <div class="form__error">
          @error('building_name')
  {{ $message }} 
@enderror
</div>



          <div class="form__group-title">
           
 <span class="form__label--item">ご意見</span>
 <span style = color:red;>※　</span>
<textarea  class="textarea" rows="10" cols="60" name="opinion">{{ old('opinion') }}</textarea>
</div>

 <div class="form__error">
  @error('opinion')
        {{ $message }} 
        @enderror
    </div>

      
         

          <button class="form__button-submit" type="submit">確認</button>

      </form>

      




      
  </main>
  
  <script src="{{ asset('/js/overflow.js') }}"></script>
</body>
</html>


