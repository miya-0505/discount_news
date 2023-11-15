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
