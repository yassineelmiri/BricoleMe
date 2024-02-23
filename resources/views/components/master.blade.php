<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">

<!-- Mirrored from shreethemes.in/jobstack/layouts/candidate-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Feb 2024 23:23:50 GMT -->

<head>
    <meta charset="UTF-8">
    <title>Jobstack - Job Portal Tailwind CSS Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Job Listing Landing Template" name="description">
    <meta content="Job, CV, Career, Resume, Job Portal, Create Job, Post job, tailwind Css" name="keywords">
    <meta name="author" content="Shreethemes">
    <meta name="website" content="https://shreethemes.in/">
    <meta name="email" content="support@shreethemes.in">
    <meta name="version" content="1.4.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Css -->
    <!-- Main Css -->
    <link href="assets/libs/%40iconscout/unicons/css/line.css" type="text/css" rel="stylesheet">
    <link href="assets/libs/%40mdi/font/css/materialdesignicons.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/tailwind.min.css" rel="stylesheet" type="text/css">

</head>

<body>
    <nav id="topnav" class="defaultscroll is-sticky">
        @include('partials.nav')
    </nav>
    <div>
        @include('partials.flashbag')
        {{ $slot }}
    </div>
    @include('partials.footer')
</body>

</html>
