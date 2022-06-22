<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <body>
        <form action={{route('upload')}} method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file" >
            <button type="submit">上傳</button>
        </form>
    </body>
</html>
