<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/manage.css') }}" />
</head>
<body>

<div class="manage-form__heading">
        <h2>管理システム </h2>
      </div>
      <form class="search-form" action="search" method="post">
        @csrf
      <div class="search_detail">
      <table frame ="box" class = "search-box" >

          <td class="title">名前　 <input type="text" name="fullname" value="{{ old('fullname') }}" class="txt"></td> 

        <td class="title">性別　<input type="radio" name="gender" value="" selected checked class="radio-button"> 全て
          <input type="radio" name="gender" value="2" class="radio-button">女性
              <input type="radio" name="gender" value="1" class="radio-button">男性
     </td>
        <tr><td class="title">登録日 <input type="date" name="start" value = "{{ $start }}" class="txt" >　～　<input type="date" name="end" value="{{ $end }}" class="txt">　</td></tr>

        <tr><td class="title">メールアドレス <input type="text" name="email" value="{{ old('email') }}" class="txt"></td></tr>

        <tr><td><button class="search__button-submit" type="submit">検索</button></td></tr>
        <tr><td><input type="reset" class="reset"  value = "reset"></td></tr>

</form> 
</div>
          </table>
          <table>
           
          <div class="pagination">{!! $contacts->links('pagination::default') !!}</div>
      <tr class = "results">
      <td class = "results_name">ID</td>
      <td class = "results_name">お名前</td>
      <td class = "results_name">性別</td>
      <td class = "results_name">メールアドレス</td>
      <td class = "results_name">ご意見</td></tr>
      @foreach ($contacts as $contact)
<tr>
<td class = "results_name2">{{ $contact['id'] }}</td>
<td class = "results_name2">{{ $contact['fullname'] }}</td>
<td class = "results_name2">{{ $contact['gender'] === 1 ? '男性' : '女性' }}</td>
<td class = "results_name2">{{ $contact['email'] }}</td>
<td clas s= "results_name2"><p class="ellipsis">{{ $contact['opinion'] }}</p></td>

<form action="/delete" method="post">
  @csrf
<td><button class="delete__button-submit" type="submit">削除</button></td></tr>
<input type="hidden" name="id" value="{{ $contact['id'] }}">

   @endforeach
 
</form>


</table>  



@isset($contact)

{{ $contacts->firstItem() }}〜{{ $contacts->lastItem() }}件

@endisset


<script src="{{ asset('/js/overflow.js') }}"></script>
</body>
</html>