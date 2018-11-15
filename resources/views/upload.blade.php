<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>upload</title>
</head>
<body>
<form action="import" method="post" enctype="multipart/form-data">
    <label>Upoload file : </label><br>
    <input type="file" name="file"/><br>
    <input type="hidden" value="{{csrf_token()}}" name="_token"/>
    <input type="submit" value="Upload"/>
</form>
</body>
</html>