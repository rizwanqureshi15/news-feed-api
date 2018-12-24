<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>News API</title>
  </head>
  <body>
    <div class="container">

      <div class="card">
        <div class="card-header">

          <form class="form-inline" method="POST" action="/filter-by">
            @csrf
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Filter By Author</label>
            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="author">
              <option value="">All</option>
              <option value="bbc-news">BBC News</option>
              <option value="bbc-sport">BBC Sport</option>
            </select>

            <button type="submit" class="btn btn-primary my-1">Submit</button>
          </form>
        </div>

        

        <div class="card-body">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Author</th>
              </tr>
            </thead>
            <tbody>
              @foreach($articles as $key =>$article)
              <tr>
                <th scope="row">{{ $key + 1 }}</th>
                <td>{{ $article->title }}</td>
                <td>{{ $article->description }}</td>
                <td>{{ $article->author }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

      
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>