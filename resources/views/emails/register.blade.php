<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<div>
    <p style="margin-bottom: 2rem !important;"> Dear   {!! $array['name'] !!} , </p>

        <p style="margin-bottom: 2rem !important;">
            Thank you for choosing Leva Ja to showcase your classified listing. We are delighted to inform you that your
            submission, titled  “ {!! $array['email'] !!}  ,” has been successfully reviewed and approved!
            <br>
            Your advertisement is now live on our platform and accessible to potential buyers. You can view and manage
            your
            listing here:  <a href="{{ env('APP_SITE') }}">Go to the website</a>.
            If you have any questions or wish to make updates to your listing, feel free to reach out to us at <strong>support@levaja.ao</strong>.
            <br>
            Wishing you great success with your listing! <br>

            Warm regards, The Leva Ja Team
        </p>



    <a href="{{ env('APP_SITE') }}">Go to the website</a>


</div>
</body>
</html>