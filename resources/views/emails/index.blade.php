<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<div>
    <p style="margin-bottom: 2rem !important;"> Dear   {!! $array['name'] !!} , </p>
    @if($array['status']=='approved')
        <p style="margin-bottom: 2rem !important;">
            Thank you for choosing Leva Ja to showcase your classified listing. We are delighted to inform you that your
            submission, titled  “ {!! $array['item'] !!}  ,” has been successfully reviewed and approved!
            <br>
            Your advertisement is now live on our platform and accessible to potential buyers. You can view and manage
            your
            listing here:  <a href="{{ env('APP_SITE') }}/my-listing/test-product">Go to the website</a>.
            If you have any questions or wish to make updates to your listing, feel free to reach out to us at <strong>support@levaja.ao</strong>.
            <br>
            Wishing you great success with your listing! <br>

            Warm regards, The Leva Ja Team
        </p>

    @else

        <p>


            Thank you for submitting your classified listing, titled “ {!! $array['item'] !!} ,” to Leva Ja.
            After careful review, we regret to inform you that your submission does not meet our current posting
            guidelines and cannot be approved at this time.<br>

            If you need any assistance or clarification, do not hesitate to contact us at
            <strong>support@levaja.ao </strong>. We're here to help!
            Thank you for understanding, and we look forward to seeing your updated listing soon.<br>
            Best regards, The Leva Ja Team<br>
            Feel free to tweak these as needed. Let me know if you'd like further assistance, like <br> incorporating
            your branding tone or refining these further!
        </p>



    @endif

    <a href="{{ env('APP_SITE') }}/my-listing/test-product">Go to the website</a>


</div>
</body>
</html>