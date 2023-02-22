<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Chat App | Mehrad Software</title>
    <link rel="stylesheet" href="{{ asset('/app/style.css') }}">
</head>
<body>
    
<div class="wrapper">
    <section class="form signup">
        <header>Realtime Chat App</header>
        <form action="#">
            <div class="error-text">This is a error message!</div>
            <div class="name-details">
                <div class="field input">
                    <label>First Name</label>
                    <input type="text" placeholder="First Name">
                </div>
                <div class="field input">
                    <label>Last Name</label>
                    <input type="text" placeholder="Last Name">
                </div>
                <div class="field input">
                    <label>Email Address</label>
                    <input type="text" placeholder="Email Address">
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="text" placeholder="Password">
                </div>
                <div class="field image">
                    <label>Select Image</label>
                    <input type="file">
                </div>
                <div class="field button">
                    <input type="submit" value="Continue to chat">
                </div>
                <div class="link">Already signed up? <a href="#">Login now</a></div>
            </div>
        </form>
    </section>
</div>

</body>
</html>