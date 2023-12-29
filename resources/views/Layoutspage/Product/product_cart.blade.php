<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Your Title</title>
    <style>
        /* Custom CSS for styling */
        .black-bg {
            background-color: #D9D9D9;
            height: 600px;
            color: white;
            /* Text color for better visibility */
        }

        .white-bg {
            background-color: #FFFFFF;
            height: 600px;
        }

        /* Center the container on the page */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .div-text {
            font-family: "Futura PT";
            font-size: 20px;
            font-weight: bold;
            /* line-height: 38px; */
            /* letter-spacing: 0em; */
            margin-top: 10px;
            text-align: center;
            color: #193028;


        }

        .div-text-img img {
            margin-top: 90px;
            margin-left: 30px;
        }


        .para-heading {
            font-family: "Futura PT";
            /* font-size: 20px; */
            /* font-weight: 400; */
            /* line-height: 26px; */
            margin-top: 10px;
            letter-spacing: 0em;
            text-align: center;
            color: #22222280;

        }

        .div-1 {
            color: #193028;
            font-family: "Futura PT";
            font-size: 20px;
            margin-left: 12px;
            margin-top: 10px;
            font-weight: 450;
            line-height: 31px;
            letter-spacing: 0em;
            text-align: left;

        }

        .div-3 {
            font-family: " Futura PT";
            font-size: 14px;
            /* font-weight: 300; */
            /* line-height: 21px; */
            margin-top: 10px;
            margin-bottom: 0;
            letter-spacing: 0em;
            text-align: left;
            color: rgba(34, 34, 34, 1);

        }

        .image-container {
            position: relative;
        }

        .overlay-text {
            position: absolute;
            top: 50%;
            left: 60%;
            transform: translate(-50%, -50%);
            color: #193028;
            /* You can adjust the text color */
            /* You can adjust the font size */
            font-family: "Futura PT";
            font-size: 20px;
            font-weight: 900;

        }

        .btn-add {
            background: #CFB060;
            border: none;
            font-family: "Niveau Grotesk";
            font-size: 12px;
            font-weight: 500;
            line-height: 16px;
            letter-spacing: 0em;
            text-align: left;
            color:
                #FFFFFF;
            margin-left: 15px;

        }

        .group-btn {
            width: 206px;
            height: 80px;
            top: 159px;
            left: 547px;
            padding: 18px, 38px, 18px, 38px;
            gap: 10px;
            background: #193028;
            font-family: "Futura PT";
            font-size: 18px;
            font-weight: 450;
            line-height: 28px;
            letter-spacing: 0em;
            text-align: center;
            color:
                #FFFFFF;
            border: none
        }

        .group-btnnew {
            width: 206px;
            height: 80px;
            top: 159px;
            left: 547px;
            padding: 18px, 38px, 18px, 38px;
            gap: 10px;
            background: rgba(217, 217, 217, 0.3);

            font-family: "Futura PT";
            font-size: 18px;
            font-weight: 450;
            line-height: 28px;
            letter-spacing: 0em;
            text-align: center;
            color:
                rgba(34, 34, 34, 0.3);
            border: none;
            border-right: 1px solid lightgrey
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups"
            style="justify-content: center; align-items: center; display: flex;">
            <div class="btn-group mr-2 my-5 mb-4" role="group" aria-label="First group">
                <button type="button" class="group-btn">hello</button>
                <button type="button" class="group-btnnew">hello</button>
                <button type="button" class="group-btnnew">hello</button>
                <button type="button" class="group-btnnew">hello</button>
            </div>

        </div>

        <div class="row " style=" box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; ">
            <div class="col-md-6 black-bg  div-text-img">
                <!-- Content for the left column -->
                <h3 class="div-text">Bestil prøvepakke</h3>
                <img src="import/assets/img/imageOne.png" alt="product">
                <p class="para-heading">Klik på prøverne til højre for at vælge</p>

            </div>
            <div class="col-md-6 white-bg">
                <!-- Content for the right column -->

                <div class="row justify-content-around">
                    <div class="col-lg-7">
                        <p class="div-1">Hvordan vi du have din pakke?</p>
                    </div>
                    <div class="col-lg-5">
                        <button
                            style="color: rgba(34, 34, 34, 0.7);
                        font-family: Futura PT;
font-size: 16px;
font-weight: 300;
line-height: 21px;
letter-spacing: 0em;
text-align: left; border:none;

">0
                            prøver valgt</button>
                        <button
                            style="font-family: Futura PT;
font-size: 16px;
font-weight: 450;
line-height: 21px;
letter-spacing: 0em;
text-align: left;
color: rgba(255, 255, 255, 0.7); border: none;
 background: #1930284D;
">Tøm
                            kurv</button>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12" style="background: rgba(217, 217, 217, 0.3); ">
                            <div class="row justify-content-between">
                                <div class="col-lg-2">
                                    <div class="row">
                                        <img src="import/assets/img/icon.svg"
                                            style="height: 14px;
                                                                                    margin-top: 13px;
                                                                                    margin-left: 21px;
                                                                                }"
                                            alt="product">

                                        <img src="import/assets/img/imagetwo.png" style="margin-top:-20px;"
                                            alt="product">
                                    </div>

                                </div>
                                <div class="col-lg-7">
                                    <p class="div-3">Natura Soft Sand</p>
                                    <div class="col-lg-6">
                                        <p
                                            style="color: rgba(34, 34, 34, 1);
                                        font-family: Futura PT;
                                                    font-size: 14px;
                                                    letter-spacing: 0em;
                                                    text-align: left;
                                                    font-weight:bold;">
                                            60x60 prøve</p>
                                    </div>

                                </div>
                                <div class="col-lg-2">
                                    <div class="image-container" onclick="handleClick()">
                                        <img src="import/assets/img/ellipse.png" alt="product">
                                        <p class="overlay-text">+</p>
                                    </div>
                                </div>

                            </div>

                        </div>


                    </div>
                    {{-- .....  --}}

                    <div class="row">
                        <div class="col-lg-12 mt-2" style="background: rgba(217, 217, 217, 0.3); ">
                            <div class="row justify-content-between">
                                <div class="col-lg-2">
                                    <div class="row">
                                        <img src="import/assets/img/icon.svg"
                                            style="height: 14px;
                                                                                    margin-top: 13px;
                                                                                    margin-left: 21px;
                                                                                }"
                                            alt="product">

                                        <img src="import/assets/img/imagethree.png" style="margin-top:-20px;"
                                            alt="product">
                                    </div>

                                </div>
                                <div class="col-lg-7">
                                    <p class="div-3">Natura Soft Sand</p>
                                    <div class="col-lg-6">
                                        <p
                                            style="color: rgba(34, 34, 34, 1);
                                        font-family: Futura PT;
                                                    font-size: 14px;
                                                    letter-spacing: 0em;
                                                    text-align: left;
                                                    font-weight:bold;">
                                            60x60 prøve</p>
                                    </div>

                                </div>
                                <div class="col-lg-2">
                                    <div class="image-container">
                                        <img src="import/assets/img/ellipse.png" alt="product">
                                        <p class="overlay-text">+</p>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                    {{-- .....  --}}
                    <div class="row">
                        <div class="col-lg-12 mt-2" style="background: rgba(217, 217, 217, 0.3); ">
                            <div class="row justify-content-between">
                                <div class="col-lg-2">
                                    <div class="row">
                                        <img src="import/assets/img/icon.svg"
                                            style="height: 14px;
                                                                                    margin-top: 13px;
                                                                                    margin-left: 21px;
                                                                                }"
                                            alt="product">

                                        <img src="import/assets/img/imagefour.png" style="margin-top:-20px;"
                                            alt="product">
                                    </div>

                                </div>
                                <div class="col-lg-7">
                                    <p class="div-3">Natura Soft Sand</p>
                                    <div class="col-lg-6">
                                        <p
                                            style="color: rgba(34, 34, 34, 1);
                                        font-family: Futura PT;
                                                    font-size: 14px;
                                                    letter-spacing: 0em;
                                                    text-align: left;
                                                    font-weight:bold;">
                                            60x60 prøve</p>
                                    </div>

                                </div>
                                <div class="col-lg-2">
                                    <div class="image-container">
                                        <img src="import/assets/img/ellipse.png" alt="product">
                                        <p class="overlay-text">+</p>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                    {{-- ......  --}}
                    <div class="row">
                        <div class="col-lg-12 mt-2" style="background: rgba(217, 217, 217, 0.3); ">
                            <div class="row justify-content-between">
                                <div class="col-lg-2">
                                    <div class="row">
                                        <img src="import/assets/img/icon.svg"
                                            style="height: 14px;
                                                                                    margin-top: 13px;
                                                                                    margin-left: 21px;
                                                                                }"
                                            alt="product">

                                        <img src="import/assets/img/imagefive.png" style="margin-top:-20px;"
                                            alt="product">
                                    </div>

                                </div>
                                <div class="col-lg-7">
                                    <p class="div-3">Natura Soft Sand</p>
                                    <div class="col-lg-6">
                                        <p
                                            style="color: rgba(34, 34, 34, 1);
                                        font-family: Futura PT;
                                                    font-size: 14px;
                                                    letter-spacing: 0em;
                                                    text-align: left;
                                                    font-weight:bold;">
                                            60x60 prøve</p>
                                    </div>

                                </div>
                                <div class="col-lg-2">
                                    <div class="image-container">
                                        <img src="import/assets/img/ellipse.png" alt="product">
                                        <p class="overlay-text">+</p>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                    {{-- ......  --}}
                    <div class="row">
                        <div class="col-lg-12 mt-2" style="background: rgba(217, 217, 217, 0.3); ">
                            <div class="row justify-content-between">
                                <div class="col-lg-2">
                                    <div class="row">
                                        <img src="import/assets/img/icon.svg"
                                            style="height: 14px;
                                                                                    margin-top: 13px;
                                                                                    margin-left: 21px;
                                                                                }"
                                            alt="product">

                                        <img src="import/assets/img/imagesix.png" style="margin-top:-20px;"
                                            alt="product">
                                    </div>

                                </div>
                                <div class="col-lg-7">
                                    <p class="div-3">Natura Soft Sand</p>
                                    <div class="col-lg-6">
                                        <p
                                            style="color: rgba(34, 34, 34, 1);
                                        font-family: Futura PT;
                                                    font-size: 14px;
                                                    letter-spacing: 0em;
                                                    text-align: left;
                                                    font-weight:bold;">
                                            60x60 prøve</p>
                                    </div>

                                </div>
                                <div class="col-lg-2">
                                    <div class="image-container">
                                        <img src="import/assets/img/ellipse.png" alt="product">
                                        <p class="overlay-text">+</p>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>

                    <div class="row justify-content-between">

                        <div class="col-lg-8">
                            <p
                                class="font-family: Futura PT;
                                                font-size: 16px;
                                                font-weight: 300;
                                                line-height: 21px;
                                                letter-spacing: 0em;
                                                text-align: left;
                                                color: #222222;

                                                ">
                                Total</p>
                            <p
                                class="font-family: Futura PT;
                                                font-size: 16px;
                                                font-weight: 300;
                                                line-height: 21px;
                                                letter-spacing: 0em;
                                                text-align: left;
                                                color: #222222;



                                                ">
                                Forsendelse: 1 - 4 arbejdsdage</p>
                        </div>


                        <div class="col-lg-4">
                            <p style="padding-left: 110px">180&nbsp;kr </p>

                            <button class="px-4 btn-add">Gratis
                                forsendelse</button>
                        </div>

                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <button
                                style="width: 100%;
                                            height:40px;
                                            top: 928px;
                                            left: 984px;
                                            padding: 18px, 38px, 18px, 38px;
                                            gap: 10px;

                                                     background: #1930284D;
                                             color: #FFFFFF;
                                             font-family: Futura PT;
                                                    font-size: 18px;
                                                    font-weight: 450;

                                                    text-align: center;
                                                    border:none;

                                            ">Tilføj
                                til kurv</button>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS and Popper.js before closing body tag -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function handleClick() {
            debugger
        }
    </script>
</body>

</html>
