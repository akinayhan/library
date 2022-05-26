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
      <div class="row mt-4">
        <div class="col-md-8">
          <table class="table table-sm">
            <thead class="table-dark">
              <tr>
                <th scope="col">Images</th>
                <th scope="col">Name</th>
                <th scope="col">Author</th>
                <th scope="col">Number</th>
                <th scope="col">Transactions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($books as $key => $book)
                <tr>
                  <th scope="row">{{$book->images}}</th>
                  <th scope="col">{{$book->name}}</th>
                  <th scope="col">{{$book->author}}</th>
                  <th scope="col">{{$book->isbn_number}}</th>
                  <th>
                    <a href="{{route('book_delete',['id'=>$book->id]) }}" class="btn btn-sm btn-danger">Delete</a>
                  </th>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="col-md-4">
          <form method="POST" action="{{url('book/store')}}">
            {{csrf_field()}}
            <div class="form-outline mb-4">
              <input type="text" id="name" name="name" class="form-control" />
              <label class="form-label" for="form1Example1">Book Name</label>
            </div>
            <div class="form-outline mb-4">
              <input type="text" id="author" name="author" class="form-control" />
              <label class="form-label" for="form1Example1">Author</label>
            </div>
            <div class="form-outline mb-4">
              <input type="text" id="isbn_number" name="isbn_number" class="form-control" />
              <label class="form-label" for="form1Example1">ISBN Number</label>
            </div>
            <div class="form-outline mb-4">
              <input type="text" id="images" name="images" class="form-control" />
              <label class="form-label" for="form1Example1">Images</label>
            </div>
            <input type="submit" name="save" value="save" class="btn btn-info btn-block">
          </form>
        </div>
      </div>

    </div>
  </body>
      <script type="text/javascript" src="js/mdb.min.js"></script>
</html>
