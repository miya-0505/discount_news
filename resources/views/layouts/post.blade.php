<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>アプリケーション名</title>
    </head>
    <body class="content">
        <main>
            <div class="create-items">
            <div class="form">
              <form action="/items" method="POST">
                @csrf
                // 送信されるデータを保護する
                
                <div class="input-form">
                  <label for="name">Name</label>
                  <input name="name">
                </div>
                <div class="input-form">
                  <label for="description">Description</label>
                  <textarea name="description"></textarea>
                </div>
                <div class="input-form">
                  <label for="price">Price</label>
                  <input name="price">
                </div>
                <div class="input-form">
                  <input type="submit" value="Submit">
                </div>
              </form>
            </div>
          </div>
          
          <table>
            <tr>
              <th>Item Id</th>
              <th>Name</th>
              <th>Description</th>
              <th>Price</th>
              <td></td>
            </tr>
            @foreach($items as $item)
              <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->description}}</td>
                <td>{{$item->price}}</td>
                <td><a href="/items/{{$item->id}}">Details</a></td>
                <td><a href="/items/{{$item->id}}/edit">Edit</a></td>
              </tr>
            @endforeach
          </table>
          
          <a href="/items">Back to index</a>
        </main>
    </body>
</html>
