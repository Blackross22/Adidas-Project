<html lang="en">

<!DOCTYPE html>
<html>
<!-- please use all of it -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="src/image/logo/adidias_logo.png" rel="icon" type="image/gif">
    <link href="//db.onlinewebfonts.com/c/c0cd6ec8ce6d2bbd315a13b62ed13550?family=AdihausDIN" rel="stylesheet"
        type="text/css" />
    <link href="//db.onlinewebfonts.com/c/80b09c4ebad1bdde194e60b3dd2c5071?family=AdihausDIN+Cn" rel="stylesheet"
        type="text/css" />
    <link href="//db.onlinewebfonts.com/c/1938eca97ab5576ba37b537143f552ef?family=adineue+PRO" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="src/bootstrap.min.css">
    <script src="src/jquery.min.js"></script>
    <script src="src/popper.min.js"></script>
    <script src="src/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="src/style.css">
    <title>adidas</title>
    <style>
        #nav{
            position: relative !important;
        }
        .img-inside {
            max-width: 100% !important;
            max-height: 100% !important;
            width: 100% !important;
            height: 100% !important;
        }

        .menu-row {
            position: sticky !important;
            top: 0 !important;
        }

        .img-content {
            overflow: hidden;
        }

        .smallPlease {
            width: 66.66% !important;
            margin: 0 auto;
        }

        #contentImage {
            transition: 3s;
        }

        .path-link {
            background-color: transparent;
        }

        .carousel-indicators li {
            background-color: transparent;
        }

        .carousel-control-prev {
            top: 45%;
            bottom: 45%;
            left: 5%;
            width: 6%;
            height: 7.5%;
            background-color: white;
            border: 0.5px solid black;
            opacity: 1;
        }

        .carousel-control-next {
            top: 45%;
            bottom: 45%;
            right: 5%;
            width: 6%;
            height: 7.5%;
            background-color: white;
            border: 0.5px solid black;
            opacity: 1;
        }

        .carousel-control-prev:hover,
        .carousel-control-next:hover {
            background-color: #fff;
            opacity: 1;
        }

        .carousel-control-prev:hover i,
        .carousel-control-next:hover i {
            color: black;
        }

        .carousel-indicators li {
            opacity: 1;
        }

        .DontYourDare {
            width: 30px;
            height: 30px;
            overflow: hidden;
            background-color: transparent !important;
        }

        .hunnae {
            transition: 0.3s;
            border: 1px solid black;
            border-bottom: 0;
        }

        .ad {
            transition: 0s !important;
            border-bottom: 3px black solid !important;
        }
    </style>
</head>

<body>
    <!-- container -->
    <div id="top" class="fluid-container">
        <!-- navbar -->
        <?php 
            include "navbar.php";
        ?>
        <!--Under navbar-->
        <div class="row text-center border border-muted w-auto mr-0">
            <div class="col py-2">
                <div class="under">
                    <img class="under-photo" src="src/image/under/car.png">
                    <a class="m-3 under-nav link_nav" href="#">ไม่มีค่าจัดส่งเมื่อสั่งซื้อสินค้า 2,200 บาทขึ้นไป</a>
                </div>
                <div class="under">
                    <i class='fas fa-parachute-box' style='font-size:19px'></i>
                    <a class="m-3 under-nav link_nav" href="#">คืนสินค้าฟรีภายใน 30 วัน</a></div>
                <div class="under">
                    <img class="under-photo" src="src/image/under/promo.png">
                    <a class="m-3 under-nav link_nav" href="#">ชำระเงินปลายทางได้แล้ว!</a></div>
            </div>
        </div>

        <!--Web Content-->
        <div class="row no-gutters">
            <!--Category LEFT-->
            <div class="col-8 pr-0 border-right border-muted">
                <!--Path-->
                <div id="gallery" class="row path mt-4 ml-3">
                    <div class="col-12">
                        <i class="fas fa-long-arrow-alt-left"></i>
                        <a href="#" class="path-link rate bottom ml-3 link_nav">ย้อนกลับ</a>
                        <a href="#" class="path-link rate bottom ml-3 mr-2 link_nav">หน้าหลัก</a><label>/</label>
                        <a id="bargender" href="#" class="path-link rate bottom ml-1 mr-2 link_nav"></a><label>/</label>
                        <a id="bartype" href="#" class="path-link rate bottom ml-1 link_nav"></a>
                    </div>
                </div>
                <!--Image Content-->
                <div class="row no-gutters">
                    <div class="col-12 no-gutters bg-content p-0 text-center">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"
                            onmouseover="mOusEoVeRHErE()" onmouseout="moUsEOuTHeRE()">
                            <ol class="carousel-indicators">
                            </ol>
                            <div class="carousel-inner">
                            </div>
                            <a class="carousel-control-prev link_nav" href="#carouselExampleIndicators" role="button"
                                data-slide="prev">
                                <i class="fas fa-long-arrow-alt-left"></i>
                            </a>
                            <a class="carousel-control-next link_nav" href="#carouselExampleIndicators" role="button"
                                data-slide="next">
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--Redirect Menu-->
                <div class="row no-gutters text-center menu-row">
                    <div class="ml-auto pt-4 underborder" height="100%"><a href="#top"
                            class="menu link_nav">แกลเลอรี</a></div>
                    <div class="ml-2 pt-4 underborder"><a href="#description" class="menu link_nav">คำอธิบาย</a></div>
                    <div class="ml-2 pt-4 underborder"><a href="#property" class="menu link_nav">รายละเอียด</a></div>
                    <div class="mr-auto ml-2 pt-4 underborder"><a href="#" class="menu link_nav">รีวิว</a></div>
                </div>
                <!--Description-->
                <div id="description" class="row py-5">
                </div>
                <!--Property-->
                <div id="property" class="row py-5">
                    <div class="col-12 pl-5">
                        <div class="row">
                            <div class="col-12">
                                <div class="h2"><b>คุณสมบัติจำเพาะ</b>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <ul class="property-list pl-3">
                                        </ul>
                                    </div>
                                    <div class="col-6">
                                        <ul class="property-list pl-3">
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                        </div>
                    </div>
                </div>
                <!--YouMayLike-->
                <div>
                    <!--WIP-->
                </div>
            </div>


            <!--Category RIGHT-->
            <div id="goods" class="col-4">
                <div class="row">
                    <label class="ml-0 mr-auto my-auto" style="font-size: 14px;">
                    </label>
                    <button class="bottom">
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='far fa-star'></i>
                        <label class="rate mb-0">4</label>
                    </button>
                </div>
                <div class="row">
                    <h1 class="font-italic headboss"><span></span></h1>
                    <span id="goods-color" class="font-weight-light"></span>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="row">
                            <label id="price" class="mr-2"></label>
                            <label id="realPrice" class="mr-2"></label>
                        </div>
                        <div class="row">
                            <div class="col-12 px-0">
                                <img src="src/image/etc/glasses.webp">
                                <label id="visit">วันนี้มีคนเข้าชมสินค้านี้ 200 คน</label>
                            </div>
                        </div>

                        <h5 class="my-4" style="font-size: 14px;">เลือกสินค้า</h5>
                        <div class="row">
                            <div id="sizes" class="col-12 text-left">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 mt-3 mx-auto"></div>
                            <button class="bottom mr-auto"><i class='fas fa-ruler-horizontal'
                                    style='font-size:14px'></i> <label class="rate mb-0">ตารางเทียบขนาดสินค้า</label>
                            </button>
                            <button class="bottom ml-auto"><label class="rate mb-0">Size out of stock?</label> </button>
                        </div>
                        <div class="row mt-5">
                            <button class="bth bthblack bth--full-width">
                                <span class="my-auto eiei">เพิ่มไปยังตะกร้า</span>
                                <i class='fas fa-long-arrow-alt-right my-auto' style="font-size: 20px;"></i>
                            </button>
                            <div class="bth-icon mx-auto">
                                <div class="heat"><i class='far fa-heart'></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <a href="#" class="ml-5 bottom rate mb-0 link_nav">ดูสินค้าเพิ่มเติม</a>
                </div>
                <div class="row">
                    <img class="under-photo mx-2" src="src/image/under/car.png">
                    <span class="ml-2">ไม่มีค่าจัดส่งเมื่อสั่งซื้อสินค้า 2,200 บาทขึ้นไป</span></div>
                <div class="row mt-2">
                    <a href="#" class="ml-5 bottom rate mb-0 link_nav">ดูสินค้าเพิ่มเติม</a>
                </div>
                <div class="row">
                    <i class='fas fa-parachute-box mx-2' style='font-size:19px'></i>
                    <span class="ml-2">หากขนาดหรือสีไม่ถูกต้อง ดูรายละเอียดได้ที่หน้า "การคืนสินค้า"</span>
                </div>
            </div>

        </div>

        <!-- footer -->
        <?php 
            include "footer.php";
        ?>

        <script>
            let no = <?php echo($_GET['no']); 
            ?>;
            let gender = "<?php echo($_GET['gender']); 
            ?>";
            let type = "<?php echo($_GET['type']);  
            ?>";

            // ?>))
            let json
            let requestURL = "src/json/"+gender+"/"+type+"/"+type+".json"
            json = fetch(requestURL).then((res) => {
                return res.json()
            })
            json.then((data) => {
                let count = 0
                data[no].picture.forEach(element => {
                    // bar
                    let dv = document.createElement('div')
                    let ol = document.getElementsByClassName('carousel-indicators')[0]
                    let li = document.createElement('li')
                    let img = document.createElement('img')
                    li.setAttribute('data-target', '#carouselExampleIndicators')
                    li.setAttribute('data-slide-to', '' + count)
                    li.setAttribute('class', 'items')
                    dv.setAttribute('class', 'DontYourDare')
                    img.setAttribute('class', 'hunnae')
                    img.setAttribute('style', 'transform: translateY(60)')
                    img.setAttribute('width', '100%')
                    img.setAttribute('src', element)
                    dv.appendChild(img.cloneNode(true))
                    li.appendChild(dv.cloneNode(true))
                    ol.appendChild(li.cloneNode(true))
                    count++
                    //photo
                    let divInner = document.querySelector(".carousel-inner")
                    let photoDiv = document.createElement('div')
                    let photoImg = document.createElement('img')
                    photoDiv.setAttribute('class', 'carousel-item')
                    photoImg.setAttribute('class', 'smallPlease d-block w-100')
                    photoImg.setAttribute('src', element)
                    photoDiv.appendChild(photoImg.cloneNode(true))
                    divInner.appendChild(photoDiv.cloneNode(true))
                })
                document.getElementsByClassName("carousel-item")[0].setAttribute("class", "carousel-item active")
                document.getElementsByClassName("items")[0].setAttribute("class", "items active")

                //description
                let desDiv = document.querySelector("#description")
                let desDivofdetail = document.createElement('div')
                let desDivofdetail1 = document.createElement('div')
                let desDivofdetail2 = document.createElement('div')
                let desDivofdetail3 = document.createElement('div')
                let desDivImg = document.createElement('div')

                let b = document.createElement('b')
                desDivofdetail.setAttribute('class', 'col-6 pl-5 pr-0')
                desDivofdetail1.setAttribute('class', 'h3 pt-5')
                desDivofdetail2.setAttribute('class', 'h4 mt-3')
                desDivofdetail3.setAttribute('class', 'mt-3')
                desDivImg.setAttribute('class', 'col-6 pr-4')
                b.innerHTML = data[no].name
                desDivofdetail2.innerHTML = data[no].title
                desDivofdetail3.innerHTML = data[no].description
                if (data[no].sidepic !== "") {
                    let desImg = document.createElement('img')
                    desImg.setAttribute('width', '100%')
                    desImg.setAttribute('src', data[no].sidepic)
                    desDivImg.appendChild(desImg.cloneNode(true))
                }

                desDivofdetail1.appendChild(b.cloneNode(true))
                desDivofdetail.appendChild(desDivofdetail1.cloneNode(true))
                desDivofdetail.appendChild(desDivofdetail2.cloneNode(true))
                desDivofdetail.appendChild(desDivofdetail3.cloneNode(true))
                desDiv.appendChild(desDivofdetail.cloneNode(true))
                desDiv.appendChild(desDivImg.cloneNode(true))



                //feature
                let ulFeaturel = document.querySelectorAll('.property-list')
                data[no].feature[0].left.forEach(fea => {
                    let liText = document.createElement('li')
                    liText.innerHTML = fea
                    ulFeaturel[0].appendChild(liText.cloneNode(true))
                })
                data[no].feature[0].right.forEach(fea => {
                    let liText = document.createElement('li')
                    liText.innerHTML = fea
                    ulFeaturel[1].appendChild(liText.cloneNode(true))
                });

                //type
                let labelTags = document.querySelector('#goods .row label')
                labelTags.innerHTML = data[no].type

                //name
                let nameShoes = document.querySelector(".headboss span")
                nameShoes.innerHTML = data[no].name

                //colors
                let colorShoes = document.querySelector('#goods-color')
                colorShoes.innerHTML = String(data[no].color).split(',').join(" / ")

                //price
                if(type == "discout"){
                    let price = document.querySelector('#price')
                    let realPrice = document.querySelector('#realPrice')
                    let disprice = data[no].cost[0]
                    let realprice = data[no].cost[1]
                    price.style.color = "#e32b2b"
                    realPrice.setAttribute('class', 'text-muted')
                    realPrice.style.textDecoration = "line-through"
                    price.innerHTML = disprice
                    realPrice.innerHTML = realprice
                }else{
                    let price = document.querySelector('#price')
                    price.innerHTML = data[no].cost
                }

                //size
                let sizeDiv = document.querySelector('#sizes')
                let countSize = 0
                data[no].size.forEach(size => {
                    let sizeButton = document.createElement('button')
                    let sizeSpan = document.createElement('span')
                    sizeButton.setAttribute('onclick', "change(" + data[no].size.length + "," + countSize + ")")
                    sizeButton.setAttribute('class', 'bottom border ml-0 pl-0 size')
                    sizeSpan.innerHTML = size
                    sizeButton.appendChild(sizeSpan.cloneNode(true))
                    sizeDiv.appendChild(sizeButton.cloneNode(true))
                    countSize++
                })
                //bar
                let barGender = document.querySelector('#bargender')
                let barType = document.querySelector('#bartype')
                barGender.innerHTML = data[no].tags[0]
                barType.innerHTML = data[no].tags[2]
                console.log(barType)
            })


            async function start() {
                let dataSize = await json.then((data) => { return data[no].picture.length })
                for (let i = 0; i < dataSize; i++) {
                    let images = document.querySelectorAll(".carousel-indicators li div img")[i]
                    images.style.transform = "translateY(60px)"
                }
            }
            start()
            // change color
            function change(size, index) {
                document.getElementsByClassName("size")[index].style.backgroundColor = "#000"
                document.getElementsByClassName("size")[index].style.color = "#fff"
                for (let i = 0; i < size; i++) {
                    if (i != index) {
                        document.getElementsByClassName("size")[i].style.backgroundColor = "#fff"
                        document.getElementsByClassName("size")[i].style.color = "#000"
                    }
                }
            }

            //Navbar hover
            $(".head").parent('.nav-item').hover(
                function () {
                    $(this).children('.dropdown-menu').collapse('show')
                }, function () {
                    $(this).children('.dropdown-menu').collapse('hide')
                }
            )


            //Image Hover
            async function mOusEoVeRHErE() {
                let dataSize = await json.then((data) => { return data[no].picture.length })
                for (let i = 0; i < dataSize; i++) {
                    let children = document.querySelectorAll(".carousel-indicators li")
                    let images = document.querySelectorAll(".carousel-indicators li div img")[i]
                    images.style.transform = "translateY(0)"
                }
            }

            async function moUsEOuTHeRE() {
                let dataSize = await json.then((data) => { return data[no].picture.length })
                for (let i = 0; i < dataSize; i++) {
                    let children = document.querySelectorAll(".carousel-indicators li")
                    let images = document.querySelectorAll(".carousel-indicators li div img")[i]
                    images.style.transform = "translateY(60px)"
                }
            }

        </script>

    </div>
</body>

</html>

</html>