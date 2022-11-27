<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container ">
        <div class="row">
            <div class="col ">
                <form class="form mt-5 " method="POST" action="{{route ('contact-send')}}">
                    @csrf
                    <header>
                        <h2>İletişim Formu</h2>
                    </header>
                    <div class="mb-3 mt-3">
                        <label  class="form-label">Ad Soyad </label>
                        <input type="text" class="form-control" required name="name" placeholder="Ad Soyad Giriniz">
                    </div>

                    <div class="mb-3">
                        <label  class="form-label">Email </label>
                        <input type="email" required class="form-control" id="email"
                        name="email"
                            placeholder="Email@example.com">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Konu</label>
                        <input type="text" class="form-control" required id="subject"
                        name="subject" placeholder="Konuyu Belirtiniz">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Detay</label>
                        <textarea class="form-control " required id="message" name="message" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-primary m-3">Gönder</button>
                </form>
            </div>
        </div>
    </div>
</body>
<style>
    body{
        background-color: azure
    }
    .form{
        border: 2px solid gray;
        border-radius: 5px;
    }

    h2 {
        text-align: center;
        color:cornsilk
    }
    div {
        margin-right: 10px;
        margin-left: 10px;
    }
    header{
        background-color:saddlebrown;
    }

</style>

</html>
