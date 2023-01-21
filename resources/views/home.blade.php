@extends("layout.master")
@section('content')
<!-----------------------------------------------------------start the code of carousel-------------------------------------------------------------------------------------->
<section class="slider">
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <!-- <img src="images/bansal1.png" class="d-block w-100" alt="..." style="height:500px;"> -->
      <div class="d-block w-100" style="background-image:url('images/bansal1.png'); height:500px; background-repeat:no-repeat; background-size:100% 100%;" ></div>
    </div>
    <div class="carousel-item">
    <div class="d-block w-100 text-light" style="background-image:url('images/bansal1.png'); height:500px; background-repeat:no-repeat; background-size:100% 100%;" >
    <div class="rgba text-center pt-5">
        <h2>Bansel Institute In India</h2>
        <p>Bansel Institute In India. Bansel Institute In India. Bansel Institute In India</p>
    </div>
</div>
    </div>
    <div class="carousel-item">
    <div class="d-block w-100" style="background-image:url('images/bansal1.png'); height:500px; background-repeat:no-repeat; background-size:100% 100%;" ></div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>

<!---------------------------------------------------------------------------end of header------------------------------------------------------------------------------------------->

<!------------------------------------------------------------------------start the code of section-------------------------------------------------------------------------------->
<section class="mt-5">
    <div class="container mb-5">
        <div class="row">
            <div id="aboutDiv" class="col-md-6 text-justify  animate__animated ">
                <div class="section-title">
                    <h2>about </h2>
                    <p class="text-info"> ABOUT US</p>
                </div>
                <h3 class="mt-4 text-info">Welcome to Montessory Institute</h3>

                <p style="font-style:italic;padding-top:8px;">
                    Bansal Institute of Engineering & Technology is managed by Bansal Educational Trust founded in the
                    year 2007 and registered under the Societies Registration Act of 1860 with an aim of providing
                    quality technical education.
                </p>

                <p>
                    <i class="fa fa-check-circle text-success"></i> &nbsp; The Institute is affiliated to AKTU, Lucknow
                    and
                    approved by AICTE,.Ministry of HRD, Govt of India.
                </p>

                <p>
                    <i class="fa fa-check-circle text-success"></i> &nbsp; The Institute is located on the main 120ft.
                    NH-24, Sitapur road and is situated at a distance of only 1 Kms from AKTU and behind the well known
                    Sewa Hospital and the Brij Ki Rasoi.

                </p>
                <button class="btn greenBtn">Learn more....</button>
            </div>

            <div class="col-md-6">
                <img src="images/collage1.jpg" alt="about" id="imageDiv"
                    class="img-fluid img-thumbnail ml-3 animate__animated">
            </div>

        </div>
    </div>
</section>

<!----------------------------------------------------------start the code of counts section----------------------------------------------------------------------------------->

<section id="counts" class="counts bg-light">
    <div class="container">
        <div class="row counters">

            <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up">1232</span>
                <p> Leave Application</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up">64</span>
                <p> Approved</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up">42</span>
                <p>Pending</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up">15</span>
                <p> DisApproved</p>
            </div>

        </div>
    </div>
</section>

<!------------------------------------------------------------------end the code of counts section---------------------------------------------------------------------------->



<!------------------------------------------------------------------start the code of  card in section------------------------------------------------------------------------->

<section class="mt-5 mb-5">
    <div class="container">
        <!--------------------------------------------------------------------------start all cards-------------------------------------------------------------------------------------------->
        <div class="row">

            <!-------------------------------------------------------------------------------start first card--------------------------------------------------------------------------------------->
            <div id="Whychoose" class="col-md-4 animate__animated">
                <div class="card" style="background:skyblue">
                    <div class="card-body p-4 text-white">
                        <h1 class="mt-3">Why Choose Motessory ?</h1>
                        <p>
                            The campus houses world class educational facilities in terms of spacious modern class
                            rooms, state of the art laboratories and computer centre,24 hrs internet connectivity, well
                            equipped library with modern books, professionally managed canteen.
                        </p>

                        <button class="btn btn-outline-success greenBtn mt-4 mb-3 mx-auto">
                            Learn More.....
                        </button>
                    </div>
                </div>
            </div>
            <!-----------------------------------------------------------------------------end first card----------------------------------------------------------------------------------------->

            <!--------------------------------------------------------------------------start second card--------------------------------------------------------------------------------------->
            <div id="threeblock" class="col-md-8  animate__animated">
                <div class="container-fluid text-center">
                    <div class="row">

                        <!------------------------------------------------------------------------start second1 card-------------------------------------------------------------------------------------->

                        <div class="col-md-4">
                            <div class="card pt-4">
                                <div class="card-body text-center">
                                    <i class="fa fa-university fa-2x circle-icon" style="color:skyblue"></i>
                                    <h3 class="font-weight-bold mb-3">Affiliated to CITY's</h3>

                                    <p style="padding-bottom: 45px;">
                                        The Institute is affiliated to AKTU, Lucknow and approved by AICTE, Ministry of
                                        HRD, Govt of India.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <!-------------------------------------------------------------------------end second1 card--------------------------------------------------------------------------------------->
                        <!---------------------------------------------------------------------------start second2 card------------------------------------------------------------------------------------>

                        <div class="col-md-4">
                            <div class="card pt-4">
                                <div class="card-body text-center">
                                    <i class="fa fa-cube fa-2x circle-icon" style="color:skyblue"></i>
                                    <h3 class="font-weight-bold mb-3">Educational facilities</h3>
                                    <p style="padding-bottom: 67px;">
                                        Spacious modern class rooms, state of the art laboratories and computer center.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!---------------------------------------------------------------------------------end second2 card-------------------------------------------------------------------------------->
                        <!---------------------------------------------------------------------------------start second3 card------------------------------------------------------------------------------>

                        <div class="col-md-4">
                            <div class="card pt-4">
                                <div class="card-body text-center">
                                    <i class="fa fa-internet-explorer fa-2x circle-icon" style="color:skyblue"></i>
                                    <h3 class="font-weight-bold mb-3">Internet Connectivity</h3>
                                    <p style="padding-bottom: 18px;">
                                        24 hrs internet connectivity, well equipped library with modern books,
                                        professionally managed canteen.well equipped library with.
                                    </p>

                                </div>
                            </div>
                        </div>

                        <!---------------------------------------------------------------------end second3 card----------------------------------------------------------------------------------------->

                    </div>
                </div>
            </div>
            <!----------------------------------------------------------------------------------end all cards------------------------------------------------------------------------------------>

        </div>
</section>

<!----------------------------------------------------------------------------end the code of  card in section---------------------------------------------------------------->

<!-----------------------------------------------------------------------start the  code of facility in section---------------------------------------------------------------->
<section class="mt-3 mb-5">
<div class="container-fluid bg-light pt-5" style="min-height:380px;">
    <div id="facBlock" class="container animate__animated">

        <!------------------------------------------------------------------start the the code of first row----------------------------------------------------------------------------->
        <div class="row">
        <div class="col-lg-12">
    <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center" style="font-weight:bold; font-size: 18px;">
                        <i class="fa fa-hotel fa-2x text-info" style="color:orange; vertical-align:middle;"></i>&nbsp;&nbsp;Hotel
                        Facility
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center" style="font-weight:bold; font-size: 18px;">
                        <i class="fa fa-bus fa-2x text-info" style="color:blue; vertical-align:middle;"></i>&nbsp;&nbsp;Bus
                        Facility
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center" style="font-weight:bold; font-size: 18px;">
                        <i class="fa fa-home fa-2x text-info" style="color:red; vertical-align:middle;"></i>&nbsp;&nbsp;Mess
                        Facility
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center" style="font-weight:bold; font-size: 18px;">
                        <i class="fa fa-wifi fa-2x text-info" style="color:violet; vertical-align:middle;"></i>&nbsp;&nbsp;wi-fi
                        campus
                    </div>
                </div>
            </div>
        </div>
        <br />
        <!----------------------------------------------------------------------------end the the code of first row--------------------------------------------------------------------->
        <!---------------------------------------------------------------------------start the the code of second row---------------------------------------------------------------->
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center" style="font-weight:bold; font-size: 18px;">
                        <i class="fa fa-gamepad fa-2x text-info" style="color:blue; vertical-align:middle;"></i>&nbsp;&nbsp;Gym
                        Facility
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center" style="font-weight:bold; font-size: 18px;">
                        <i class="fa fa-book fa-2x text-info"
                            style="color:red; vertical-align:middle;"></i>&nbsp;&nbsp;LibraryFacility
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center" style="font-weight:bold; font-size: 18px;">
                        <i class="fa fa-cutlery fa-2x text-info"
                            style="color:violet; vertical-align:middle;"></i>&nbsp;&nbsp;Canteen Facility
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center" style="font-weight:bold; font-size: 18px;">
                        <i class="fa fa-cogs fa-2x text-info" style="color:red; vertical-align:middle;"></i>&nbsp;&nbsp;Workshop
                        Facility
                    </div>
                </div>
            </div>
        </div>
        <br />
        <!-------------------------------------------------------------------------end the the code of second row------------------------------------------------------------------->
        <!------------------------------------------------------------------------start the the code of third row---------------------------------------------------------------------->
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center" style="font-weight:bold; font-size: 18px;">
                        <i class="fa fa-hotel fa-2x text-info" style="color:green; vertical-align:middle;"></i>&nbsp;&nbsp;AutoCAD
                        Lab
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center" style="font-weight:bold; font-size: 18px;">
                        <i class="fa fa-robot fa-2x text-info"
                            style="color:darkblue; vertical-align:middle;"></i>&nbsp;&nbsp;Robotics Lab
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center" style="font-weight:bold; font-size: 18px;">
                        <i class="fa fa-desktop fa-2x text-info"
                            style="color:darkred; vertical-align:middle;"></i>&nbsp;&nbsp;Computer Lab
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center" style="font-weight:bold; font-size: 18px;">
                        <i class="fa fa-android fa-2x text-info"
                            style="color:green; vertical-align:middle;"></i>&nbsp;&nbsp;Android Lab
                    </div>
                </div>
            </div>
        </div>
        </div>
</div>
</div>
        <!---------------------------------------------------------------------------end the the code of first row----------------------------------------------------------------------->
    </div>
</section>




<! ------------------------------------------------------------- Start the Code of Popular Courses Card
    -------------------------------------------------------------------->

    <div id="popularcourses" class="container animate__animated">


        <div class="section-title mt-5 ">
            <h2 class="text-center text-info">Popular </h2>
            <p class="text-center text-info">Extra Activities In Collage</p>
        </div>
        <div class="row">


            <div class="col-md-4">

                <div class="card">


                    <img class="card-img-top" src="images/cisv.png" alt="Course-1" style="height:230px;width:100%;">


                    <div class="card-body">


                        <div class="d-flex justify-content-between align-items-center mb-3">


                        <button class="btn btn-info text-light">Childran</button>

                            <!-- <p style="font-weight: bold;">$500</p> -->
                        </div>


                        <h4>Internatinal Childran</h4>

                        <p>Fashion Design is dedicated to creating clothes as well as lifestyle accessories, Textile
                            Design course educates students.
                        </p>

                        <hr />


                        <div class="d-flex justify-content-between align-items-center mb-0">


                            <div class="d-flex align-items-center">

                                <img src="images/8.jpg" class="img-fluid rounded-circle" style="width: 48px"
                                    alt="">

                                <span> &nbsp; &nbsp;&nbsp;&nbsp;Kayrav</span>
                            </div>

                            <p>



                                <i class="fa fa-user" aria-hidden="true" style="color: rgb(235, 30, 142)"></i>&nbsp;50

                                <i class="fa fa-heart" aria-hidden="true" style="color: rgb(21, 155, 92)"></i>&nbsp;40

                            </p>
                        </div>

                    </div>

                </div>
            </div>


            <div class="col-md-4">

                <div class="card">


                    <img class="card-img-top" src="images/cofas.png" alt="Course-1" style="height:230px;width:100%;">


                    <div class="card-body">


                        <div class="d-flex justify-content-between align-items-center mb-3">


                        <button class="btn btn-info text-light">Computer</button>
                            <!-- <p style="font-weight: bold;">$500</p> -->
                        </div>


                        <h4>Computer Olymaped</h4>

                        <p>Fashion Design is dedicated to creating clothes as well as lifestyle accessories, Textile
                            Design course educates students.
                        </p>

                        <hr />


                        <div class="d-flex justify-content-between align-items-center mb-0">


                            <div class="d-flex align-items-center">

                            <img src="images/10.jpg" class="img-fluid rounded-circle" style="width: 48px"
                                    alt="">

                                <span> &nbsp; &nbsp;&nbsp;&nbsp;Arman M</span>
                            </div>

                            <p>



                                <i class="fa fa-user" aria-hidden="true" style="color: rgb(235, 30, 142)"></i>&nbsp;50

                                <i class="fa fa-heart" aria-hidden="true" style="color: rgb(21, 155, 92)"></i>&nbsp;40

                            </p>
                        </div>

                    </div>

                </div>
            </div>



            <div class="col-md-4">

                <div class="card">


                    <img class="card-img-top" src="images/concord.png" alt="Alternate" style="height:230px;width:100%;">


                    <div class="card-body">


                        <div class="d-flex justify-content-between align-items-center mb-3">


                            <button class="btn btn-info text-light">Internatinal</button>

                            <!-- <p style="font-weight: bold;">$500</p> -->
                        </div>


                        <h4>Internatinal center</h4>

                        <p>Fashion Design is dedicated to creating clothes as well as lifestyle accessories, Textile
                            Design course educates students.
                        </p>

                        <hr />


                        <div class="d-flex justify-content-between align-items-center mb-0">


                            <div class="d-flex align-items-center">

                            <img src="images/11.jpg" class="img-fluid rounded-circle" style="width: 48px"
                                    alt="">

                                <span> &nbsp; &nbsp;&nbsp;&nbsp;Kavita</span>
                            </div>

                            <p>



                                <i class="fa fa-user" aria-hidden="true" style="color: rgb(235, 30, 142)"></i> &nbsp;50


                                <i class="fa fa-heart" aria-hidden="true" style="color: rgb(21, 155, 92)"></i> &nbsp;40

                            </p>
                        </div>

                    </div>

                </div>
            </div>




        </div>
    </div>


    <! ------------------------------------------------------------End the Code of Popular Courses Card
        -------------------------------------------------------------------->

        <! ------------------------------------------------------------- Start the Code of Our Professional Trainers
            -------------------------------------------------------------------->

            <div id="popularcourses" class="container animate__animated">


                <div class="section-title mt-5 mb-5 p-3 bg-light">
                    <h2 class="text-center text-info">Trainers </h2>
                    <p class="text-center text-info"> Our Professional Trainers</p>
                </div>
                <div class="row">


                    <div class="col-md-3">

                        <div class="card">


                            <img class="card-img-top" src="images/professor1.webp" alt="Course-1">


                            <div class="card-body">


                                <div class="d-flex flex-column justify-content-center align-items-center mb-0 p-0">



                                    <p style="font-weight: bold; font-size: 20px; height: 15px;">Mr_Ramesh</p>
                                    <p style="font-style: italic;">Web Develop. & Photographer</p>
                                </div>

                                <p style="font-style: italic; text-align:center;" class="text-disabled">Fashion Design
                                    is dedicated to creating clothes as well as lifestyle accessories, Textile Design
                                    course educates students.
                                </p>




                                <div class="d-flex justify-content-center align-items-center mb-0">



                                    <p>
                                        <i class="fab fa-twitter fa-2x" aria-hidden="true"
                                            style="color: rgb(0, 157, 237)"></i>

                                        <i class="fab fa-facebook  fa-2x" aria-hidden="true"
                                            style="color: rgb(25, 119, 243)"></i>
                                        <i class="fa fa-instagram  fa-2x" aria-hidden="true"
                                            style="color: rgb(235, 30, 142)"></i>

                                    </p>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="col-md-3">

                        <div class="card">


                            <img class="card-img-top" src="images/professor6.jpg" alt="Course-1">


                            <div class="card-body">


                                <div class="d-flex flex-column justify-content-center align-items-center mb-0 p-0">



                                    <p style="font-weight: bold; font-size: 20px; height: 15px;">Ms_Shalini Raj</p>
                                    <p style="font-style: italic;">Web&Android Developer</p>
                                </div>

                                <p style="font-style: italic; text-align:center;" class="text-disabled">Fashion Design
                                    is dedicated to creating clothes as well as lifestyle accessories, Textile Design
                                    course educates students.
                                </p>




                                <div class="d-flex justify-content-center align-items-center mb-0">



                                    <p>
                                        <i class="fa fa-twitter fa-2x" aria-hidden="true"
                                            style="color: rgb(0, 157, 237)"></i>

                                        <i class="fa fa-facebook  fa-2x" aria-hidden="true"
                                            style="color: rgb(25, 119, 243)"></i>
                                        <i class="fa fa-instagram  fa-2x" aria-hidden="true"
                                            style="color: rgb(235, 30, 142)"></i>

                                    </p>
                                </div>

                            </div>

                        </div>
                    </div>


                    <div class="col-md-3">

                        <div class="card">


                            <img class="card-img-top" src="images/professor5.jpg" alt="Course-1">


                            <div class="card-body">


                                <div class="d-flex flex-column justify-content-center align-items-center mb-0 p-0">



                                    <p style="font-weight: bold; font-size: 20px; height: 15px;">Mr_Mrityunjay</p>
                                    <p style="font-style: italic;">Android Developer</p>
                                </div>

                                <p style="font-style: italic; text-align:center;" class="text-disabled">Fashion Design
                                    is dedicated to creating clothes as well as lifestyle accessories, Textile Design
                                    course educates students.
                                </p>




                                <div class="d-flex justify-content-center align-items-center mb-0">



                                    <p>
                                        <i class="fa fa-twitter fa-2x" aria-hidden="true"
                                            style="color: rgb(0, 157, 237)"></i>

                                        <i class="fa fa-facebook  fa-2x" aria-hidden="true"
                                            style="color: rgb(25, 119, 243)"></i>
                                        <i class="fa fa-instagram  fa-2x" aria-hidden="true"
                                            style="color: rgb(235, 30, 142)"></i>

                                    </p>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="col-md-3">

                        <div class="card">


                            <img class="card-img-top" src="images/professor3.jfif" alt="Course-1">


                            <div class="card-body">


                                <div class="d-flex flex-column justify-content-center align-items-center mb-0 p-0">



                                    <p style="font-weight: bold; font-size: 20px; height: 15px;">Mr_Shivam</p>
                                    <p style="font-style: italic;">App Developer & Photo Editor</p>
                                </div>

                                <p style="font-style: italic; text-align:center;" class="text-disabled">Fashion Design
                                    is dedicated to creating clothes as well as lifestyle accessories, Textile Design
                                    course educates students.
                                </p>




                                <div class="d-flex justify-content-center align-items-center mb-0">



                                    <p>
                                        <i class="fa fa-twitter fa-2x" aria-hidden="true"
                                            style="color: rgb(0, 157, 237)"></i>

                                        <i class="fa fa-facebook  fa-2x" aria-hidden="true"
                                            style="color: rgb(25, 119, 243)"></i>
                                        <i class="fa fa-instagram  fa-2x" aria-hidden="true"
                                            style="color: rgb(235, 30, 142)"></i>

                                    </p>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
<!--InterNatinal Event start-->
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2 class="text-info">INTERNATIONAL EVENTS</h2>
            <p class="text-justify" style="color:#d9d9d9">With a view to promote the ideals of World Unity and World Peace across the globe, CMS organizes Peace Congresses in the form of international events. Every CMS event starts with a prayer for peace in the world. Although these events are organized on a variety of subjects like Geography, History, English language, Computer Science, Science and Technology, and Sports, the central idea behind organizing all these events remains development of cultural understanding and promotion of peaceful co-existence and unity in young minds. Such a stimulating environment lets children appreciate first-hand the similarities and celebrate the differences between people from all over the country and the world. They recognise how despite our differences, we are one people, united in our diversity which makes us stronger. Children gain enormous confidence and these are experiences of a lifetime. Instead of being confined to the local reality in Lucknow, children experience a wider reality which has important impact on their whole psychology and on how they relate to each other.</p>
        </div>
    </div>
</div>
<div class="container p-4">
    <div class="row mt-4">
        <div class="col-lg-3 col-md-4 col-sm-6">
        <img src="images/iymc.png" class="img-thumbnail" alt="...">
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
        <img src="images/spardha.png" class="img-thumbnail" alt="...">
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
        <img src="images/macfair.png" class="img-thumbnail" alt="...">
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
        <img src="images/iccjw.png" class="img-thumbnail" alt="...">
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-3 col-md-4 col-sm-6">
        <img src="images/cofas.png" class="img-thumbnail" alt="...">
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
        <img src="images/iyf.png" class="img-thumbnail" alt="...">
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
        <img src="images/sam.png" class="img-thumbnail" alt="...">
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
        <img src="images/concord.png" class="img-thumbnail" alt="...">
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-3 col-md-4 col-sm-6">
        <img src="images/cisv.png" class="img-thumbnail" alt="...">
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
        <img src="images/undayofeducation.png" class="img-thumbnail" alt="...">
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
        <img src="images/iscl.png" class="img-thumbnail" alt="...">
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
        <img src="images/iycce.png" class="img-thumbnail" alt="...">
        </div>
    </div>
</div>
<!--InterNatinal Event end-->

<!--Achivements start-->
<div class="container-fluid  Achivements p-5" >
<h1 class="text-info mt-5 text-center">ACHIEVEMENTS</h1>
    <div class="row mt-3">
        <div class="col-lg-1"></div>
        <div class="col-lg-3 col-md-4 col-sm-6 card m-4 bg-light  achive">
            <div class="row content">
            <div class="front p-5 fs-5"><b>Acedmic<br> School Ranking</b></div>
            <div class="back p-5 fs-3"><b>Acedmic<br> School Ranking</b></div>
        </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 bg-light  m-4 achive">
        <div class="row content">
        <div class="front p-5 fs-5"><b>Selection in Engginering<br>Medical $ Other Profecinal Cources</b></div>
            <div class="back p-3 fs-4"><b>Selection in Engginering<br>Medical $ Other Profecinal Cources</b></div>
        </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 bg-light  m-4 achive">
        <div class="row content">
        <div class="front p-5 fs-5"><b>Students Scholarship<br>Awards</b></div>
            <div class="back p-4 fs-4"><b>Students Scholarship<br>Awards</b></div>
        </div>
        </div>
        <div class="col-lg-1"></div>
    </div>
    <div class="row mt-3">
    <div class="col-lg-1"></div>
    <div class="col-lg-3 col-md-4 col-sm-6  m-4 bg-light  achive">
            <div class="row content">
            <div class="front p-5 fs-5"><b>Civil Service<br>Selection</b></div>
            <div class="back p-4 fs-4"><b>Civil Service<br>Selection</b></div>
        </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 bg-light  m-4 achive">
        <div class="row content">
        <div class="front p-5 fs-5"><b>Admission Offer From<br>Top universities</b></div>
            <div class="back p-4 fs-4"><b>Admission Offer From<br>Top universities</b></div>
        </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 bg-light  m-4 achive">
        <div class="row content">
        <div class="front p-5 fs-5"><b>Other recognition</b></div>
            <div class="back p-4 fs-4"><b>Other recognitions</b></div>
        </div>
        </div>
    <div class="col-lg-1"></div>
    </div>
</div>
<!--Achivements End-->
            <br />
            <! ------------------------------------------------------------End the Code of Our Professional Trainers
                -------------------------------------------------------------------->

                <script>
                $('[data-toggle="counter-up"]').counterUp({
                    delay: 10,
                    time: 1000
                });
                $('#aboutDiv').waypoint(function()

                    {
                        $('#aboutDiv').addClass('animate__backInLeft');

                    }, {


                        offset: '100%'

                    }

                );
                $('#imageDiv').waypoint(function()

                    {
                        $('#imageDiv').addClass('animate__backInRight');

                    }, {


                        offset: '100%'

                    }

                );
                $('#Whychoose').waypoint(function()

                    {
                        $('#Whychoose').addClass('animate__backInLeft');

                    }, {


                        offset: '100%'

                    }

                );
                $('#threeblock').waypoint(function()

                    {
                        $('#threeblock').addClass('animate__zoomIn');

                    }, {


                        offset: '100%'

                    }

                );
                $('#facBlock').waypoint(function()

                    {
                        $('#facBlock').addClass('animate__zoomIn');

                    }, {


                        offset: '100%'

                    }

                );
                $('#popularcourses').waypoint(function()

                    {
                        $('#popularcourses').addClass('animate__zoomIn');

                    }, {
                        offset: '100%'

                    }

                );
                </script>
@endsection