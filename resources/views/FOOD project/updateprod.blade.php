<form method="POST" action="{{ route('Updated',$data->id) }}">
    @csrf
     <input type="text" name="fname" placeholder=" product name ..." value="{{ $data->fname }}">
    <br>
    <br>
    <input type="text" name="fcontent" placeholder=" product description ..." value="{{ $data->fcontent }}">
    <br>
    <br>
    <input type="text" name="fprice" placeholder=" product price ..." value="{{ $data->fprice }}">
    <br>
    <br>
    <input type="file" name="fimg" value="{{ $data->fimg }}">
    <br>
    <br>
    <div class="submit">
    <input  type="submit" value="Update">
    </div>
</form>
