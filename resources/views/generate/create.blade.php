<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/generate.css') }}">
    <title>Generate Certificate</title>
</head>
<body>
    <div class="form">
      <div class="title">E-Certificate</div>
      <div class="subtitle">Generate Certificate</div>
      <form action="{{ url('/generate') }}" method="post">
        @csrf
        <div class="input-container ic1">
          <input id="name" class="input" name="name" type="text" placeholder=" " required />
          <div class="cut"></div>
          <label for="name" class="placeholder">Full Name</label>
        </div>
        <div class="input-container ic2">
          <input id="school" class="input" name="school" type="text" placeholder=" " required/>
          <div class="cut"></div>
          <label for="school" class="placeholder">School</label>
        </div>
        <div class="input-container ic2">
          <input id="email" class="input" type="text" name="email" placeholder=" " required/>
          <div class="cut cut-short"></div>
          <label for="email" class="placeholder">Email</label>
        </div>
        <button type="submit" class="submit">Generate</button>
      </form>
    </div>

    @if($src = Session::get('src'))
        <img src="{{ asset('images/sertifikat/'.$src) }}" alt="">
    @endif


    <script src="{{ asset('js/vanilla-toast.min.js') }}"></script>
    @if($message = Session::get('success'))
    <script>
        vt.success("{{ $message }}", {
            // title: "Title",
            position: "top-right",
        })
    </script>
    @endif

    @if($message = Session::get('error'))
    <script>
        vt.error("{{ $message }}", {
            // title: "Title",
            position: "top-right",
        })
    </script>
    @endif

</body>
</html>