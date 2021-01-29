<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Send Email Php Mailer</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h4>Send</h4>
            <form action="" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter your name">
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Enter your email">
                </div>

                <div class="form-group">
                    <label for="">Subject</label>
                    <input type="text" class="form-control" name="subject" placeholder="Enter your subject">
                </div>
                <div class="form-group">
                    <textarea name="message", cols="4" rows="4" class="form-control">

                    </textarea>
                </div>
                <button type="submit" class="btn btn-block btn-success">Send mail</button>
            </form>
        </div>
    </div>
</body>
</html>
