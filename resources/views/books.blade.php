<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"/>
    <link rel="stylesheet" href="css/mdb.min.css" />
    <title>Books</title>
  </head>
  <body>
    <div class="container">
      </div>
      <table class="table table-sm">
        <thead class="table-dark">
          <tr>
            <th scope="col">Images</th>
            <th scope="col">Name</th>
            <th scope="col">Author</th>
            <th scope="col">Number</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($books as $key => $book)
            <tr>
              <th scope="row">{{$book->images}}</th>
              <th scope="col">{{$book->name}}</th>
              <th scope="col">{{$book->author}}</th>
              <th scope="col">{{$book->isbn_number}}</th>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </body>
      <script type="text/javascript" src="js/mdb.min.js"></script>
</html>
