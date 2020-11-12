<html lang="en">

<!DOCTYPE html>
<html>
<!-- please use all of it -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="src/image/logo/adidias_logo.png" rel="icon" type="image/gif">
    <title>adidas</title>
    <link rel="stylesheet" href="src/bootstrap.min.css">
    <script src="src/jquery.min.js"></script>
    <script src="src/popper.min.js"></script>
    <script src="src/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="src/style.css">

    <style>
        .sticky-top {
            transition: 0.5s;
        }

        a:link,
        a:visited,
        a:active {
            color: black;
            padding: 5px 0;
            background-color: transparent;
        }

        .menuTags {
            display: inline-block;
            padding: 8px 15px 8px 15px;
            border: 1px solid transparent;
            font-size: 12px;
            font-weight: 200px;
            background-color: transparent;
            letter-spacing: 1px;
        }

        .menuTags:hover {
            border: 1px solid black;
        }

        .menuTags:focus {
            outline: 0;
        }

        .slot {
            width: 303px;
            height: 434px;
            margin-right: 3px;
            border: transparent solid 1px;
        }

        .slot:hover {
            border: #000 solid 1px;
        }

        .tag {
            width: auto;
            margin-left: 1%;
            text-align: center;
        }

        .tag:hover {
            border: #000 solid 1px;
        }

        .buttag {
            border: 1px solid rgb(230, 230, 230);
            width: auto;
            height: 23px;
            background-color: #f5f6f6;
            font-size: 14px;
            text-align: center;
        }
    </style>
</head>

<body>
    <!-- container -->
    <div id="top" class="fluid-container overflow-hidden">
        <!-- navbar -->
        <?php
        include "navbar.php";
        ?>

        
        <!--Under navbar-->
        <div class="row text-center border border-muted">
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
        <div class="row">
            <!--Content Container-->
            <div class="col-12" style="padding: 0 10%;">
                <!--Path-->
                <div class="row mt-4">
                    <div class="col-12" id="tagtype">
                        <a class="rate bottom mr-3" style="font-weight: 600;" href="#">ย้อนกลับ</a>
                        <a class="rate bottom" href="#">หน้าหลัก</a>
                        <label style="margin: 0px 2px;">/</label>

                    </div>
                </div>

                <!--Header-->
                <div class="row" id="headname">

                </div>

                <!--Tags Menu-->
                <div class="row sticky-top"
                    style="padding: 4px 0; border-top: 0.5px solid #ddd; border-bottom: 0.5px solid #ddd;background-color: #fff;z-index: 1 !important;">
                    <button class="menuTags"><b>ประเภทสินค้า </b><i class="fas fa-chevron-down"
                            style="font-size: 10px;"></i></button>
                    <button class="menuTags">กีฬา <i class="fas fa-chevron-down" style="font-size: 10px;"></i></button>
                    <button class="menuTags">ประเภทผลิตภัณฑ์ <i class="fas fa-chevron-down"
                            style="font-size: 10px;"></i></button>
                    <button class="menuTags">แบรนด์ <i class="fas fa-chevron-down"
                            style="font-size: 10px;"></i></button>
                    <button class="menuTags">ขนาด <i class="fas fa-chevron-down" style="font-size: 10px;"></i></button>
                    <button class="menuTags">สี <i class="fas fa-chevron-down" style="font-size: 10px;"></i></button>
                    <button class="menuTags">คอลเลคชัน <i class="fas fa-chevron-down"
                            style="font-size: 10px;"></i></button>
                    <button class="menuTags ml-auto">เพิ่มตัวกรองการค้นหา <i class="	fas fa-plus"
                            style="font-size: 12px;"></i></button>
                    <button class="menuTags">จัดเรียงตาม <i class="fas fa-chevron-down"
                            style="font-size: 10px;"></i></button>
                </div>

                <!--Tags-->
                <div class="row mt-2 mb-3" id="tagna"></div>


                <!--Category 1st row-->
                <div class="row no-gutters mx-auto mb-4 mt-0 d-flex justify-content-center" id="dom">

                </div>

                <!--Category 2nd row-->
                <div class="row no-gutters mx-auto mb-4 mt-0 d-flex justify-content-center" id="dom2">
                    <div class="slot">
                        <img class="" style="width:301px;height:303px;" src="src/image/catalog/nmd_r1.jpg">
                        <div class="row">
                            <div class="col ml-1 mt-2">
                                <div class="" title="shoes" style="font-size: 12px;color: #767677;">ผู้ชาย Originals
                                </div>
                                <div class="" title="shoes" style="font-size: 12px; margin-top:5px;">NMD_R1</div>
                                <div class="" title="shoes" style="font-size: 12px; margin-top:2px;">฿4,600</div>
                            </div>
                        </div>
                    </div>
                    <div class="slot">
                        <img class="" style="width:301px;height:303px;" src="src/image/catalog/superstar.jpg">
                        <div class="row">
                            <div class="col ml-1 mt-2">
                                <div class="" title="shoes" style="font-size: 12px;color: #767677;">ผู้ชาย Originals
                                </div>
                                <div class="" title="shoes" style="font-size: 12px; margin-top:5px;">superstar</div>
                                <div class="" title="shoes" style="font-size: 12px; margin-top:2px;">฿3,200</div>
                            </div>
                        </div>
                    </div>
                    <div class="slot">
                        <img class="" style="width:301px;height:303px;" src="src/image/catalog/colorultra.jpg">
                        <div class="row">
                            <div class="col ml-1 mt-2">
                                <div class="" title="shoes" style="font-size: 12px;color: #767677;">ผู้ชาย วิ่ง</div>
                                <div class="" title="shoes" style="font-size: 12px; margin-top:5px;">รองเท้า Ultraboost
                                    20</div>
                                <div class="" title="shoes" style="font-size: 12px; margin-top:2px;">฿6,500</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>


        <!-- footer -->
        <?php
        include "footer.php";
        ?>
        <script>
            //Navbar hover
            $(".head").parent('.nav-item').hover(
                function () {
                    $(this).children('.dropdown-menu').collapse('show')
                }, function () {
                    $(this).children('.dropdown-menu').collapse('hide')
                }
            )

            //Ismouse over picture
            function mouseIn(n) {
                let img = document.getElementsByClassName("my-img1")[n - 1]
                if (n == 1) img.src = "src/image/catalog/nmdho.jpg"
                else if (n == 2) img.src = "src/image/catalog/superstarho.jpg"
                else img.src = "src/image/catalog/colorho.jpg"
            }

            //Ismouse exit picture
            function mouseOut(n) {
                let img = document.getElementsByClassName("my-img1")[n - 1]
                if (n == 1) img.src = "src/image/catalog/nmd_r1.jpg"
                else if (n == 2) img.src = "src/image/catalog/superstar.jpg"
                else img.src = "src/image/catalog/colorultra.jpg"
            }

            //Hidden navbar
            let prevScrollpos = window.pageYOffset
            window.onscroll = function () {
                let currentScrollPos = window.pageYOffset
                if (prevScrollpos > currentScrollPos) {
                    document.getElementsByClassName("navbar")[0].style.top = "0"
                    document.getElementsByClassName("sticky-top")[0].style.top = "15%"
                    document.getElementsByClassName("sticky-top")[0].style.border = "0.5px solid #ddd"
                } else {
                    document.getElementsByClassName("navbar")[0].style.top = "-100px"
                    document.getElementsByClassName("sticky-top")[0].style.top = "2%"
                    document.getElementsByClassName("sticky-top")[0].style.border = "1px solid black"
                }
                prevScrollpos = currentScrollPos
            }
            let gender = "<?php echo $_GET["gender"]; ?>"
            let type = "<?php echo $_GET["type"]; ?>"
            let json
            let url = "src/json/"+gender+"/"+type+"/"+type+".json"
            json = fetch(url).then(data => { return data.json() })
            json.then(data => {
                let text1 = document.createElement("a")
                let text2 = document.createElement("a")
                let slash = document.createElement("label")
                text1.setAttribute("href", "#")
                text2.setAttribute("href", "#")
                slash.appendChild(document.createTextNode("/"))
                slash.setAttribute("style", "margin: 0px 2px;")
                text1.setAttribute("class", "rate bottom")
                text2.setAttribute("class", "rate bottom")
                text1.appendChild(document.createTextNode(data[0].tags[0]))
                text2.appendChild(document.createTextNode(data[0].tags[2]))
                document.getElementById("tagtype").appendChild(text1)
                document.getElementById("tagtype").appendChild(slash)
                document.getElementById("tagtype").appendChild(text2)

                let tagBox1 = document.createElement("div")
                let tagBox2 = document.createElement("div")
                let clean = document.createElement("a")
                let textBox1 = document.createElement("label")
                let textBox2 = document.createElement("label")
                textBox1.appendChild(document.createTextNode(data[0].tags[0] + " x"))
                textBox2.appendChild(document.createTextNode(data[0].tags[2] + " x"))
                clean.setAttribute("href", "#")
                clean.setAttribute("class", "rate bottom")
                clean.appendChild(document.createTextNode("ล้างทั้งหมด"))
                tagBox1.setAttribute("class", "buttag mr-2")
                tagBox2.setAttribute("class", "buttag mr-2")
                tagBox1.appendChild(textBox1)
                tagBox2.appendChild(textBox2)
                document.getElementById("tagna").appendChild(tagBox1)
                document.getElementById("tagna").appendChild(tagBox2)
                document.getElementById("tagna").appendChild(clean)

                let head = document.createElement("div")
                head.setAttribute("class", "h1 mt-4")
                head.setAttribute("style", "font-weight: 500; color:black")
                head.appendChild(document.createTextNode(data[0].tags[0] + " · " + data[0].tags[2]))
                document.getElementById("headname").appendChild(head)

                for (let i = 0; i < data.length; i++) {
                    if (i > 3) {
                        let card = document.createElement("div")
                        let pic = document.createElement("img")
                        pic.setAttribute("src", data[i].picture[0])
                        pic.setAttribute("style", "width:301px;height:303px;")
                        pic.setAttribute("class", "my-img1")
                        pic.setAttribute("onmouseover", "mouseIn(" + i + ")")
                        pic.setAttribute("onmouseout", "mouseOut(" + i + ")")
                        card.setAttribute("class", "slot")
                        card.setAttribute("onclick", "onmouseClick(" + i + ")")
                        card.appendChild(pic)

                        let textR = document.createElement("div")//row
                        let textC = document.createElement("div")//col
                        let textType = document.createElement("div")//tag
                        let textName = document.createElement("div")//name
                        let textCost = document.createElement("div")//cost
                        let textCost1 = document.createElement("label")//cost1
                        let textCost2 = document.createElement("label") // cost2
                        textR.setAttribute("class", "row")
                        textC.setAttribute("class", "col ml-1 mt-2")
                        textC.setAttribute("style", "user-select: none;")
                        textType.setAttribute("style", "font-size: 12px;color: #767677;")
                        textName.setAttribute("style", "font-size: 12px; margin-top:5px;")
                        textCost.setAttribute("style", "font-size: 12px; margin-top:2px;")
                        textType.appendChild(document.createTextNode(data[i].type))
                        textName.appendChild(document.createTextNode(data[i].name))
                        if ((data[i].cost).length == 2) {
                            textCost1.appendChild(document.createTextNode(data[i].cost[0]))
                            textCost2.appendChild(document.createTextNode(data[i].cost[1]))
                            textCost1.setAttribute("style", "color: rgb(227, 43, 43);")
                            textCost2.setAttribute("class", "text-muted")
                            textCost2.setAttribute("style", "text-decoration: line-through;")
                            textCost.appendChild(textCost1)
                            textCost.appendChild(textCost2)
                        }
                        else {
                            textCost.appendChild(document.createTextNode(data[i].cost))
                        }
                        textC.appendChild(textType)
                        textC.appendChild(textName)
                        textC.appendChild(textCost)
                        textR.appendChild(textC)
                        card.appendChild(textR)
                        document.getElementById("dom2").appendChild(card)

                    }
                    else {
                        let card = document.createElement("div")
                        let pic = document.createElement("img")
                        pic.setAttribute("src", data[i].picture[0])
                        pic.setAttribute("class", "my-img1")
                        pic.setAttribute("style", "width:301px;height:303px;")
                        pic.setAttribute("onmouseover", "mouseIn(" + i + ")")
                        pic.setAttribute("onmouseout", "mouseOut(" + i + ")")
                        card.setAttribute("class", "slot")
                        card.setAttribute("onclick", "onmouseClick(" + i + ")")
                        card.appendChild(pic)
                        let textR = document.createElement("div")//row
                        let textC = document.createElement("div")//col
                        let textType = document.createElement("div")//tag
                        let textName = document.createElement("div")//name
                        let textCost = document.createElement("div")//cost
                        let textCost1 = document.createElement("label")//cost1
                        let textCost2 = document.createElement("label") // cost2
                        textR.setAttribute("class", "row")
                        textC.setAttribute("class", "col ml-1 mt-2")
                        textC.setAttribute("style", "user-select: none;")
                        textType.setAttribute("style", "font-size: 12px;color: #767677;")
                        textName.setAttribute("style", "font-size: 12px; margin-top:5px;")
                        textCost.setAttribute("style", "font-size: 12px; margin-top:2px;")
                        textType.appendChild(document.createTextNode(data[i].type))
                        textName.appendChild(document.createTextNode(data[i].name))
                        if ((data[i].cost).length == 2) {
                            textCost1.appendChild(document.createTextNode(data[i].cost[0]))
                            textCost2.appendChild(document.createTextNode(data[i].cost[1]))
                            textCost1.setAttribute("style", "color: rgb(227, 43, 43);")
                            textCost2.setAttribute("class", "text-muted")
                            textCost2.setAttribute("style", "text-decoration: line-through;")
                            textCost.appendChild(textCost1)
                            textCost.appendChild(textCost2)
                        }
                        else {
                            textCost.appendChild(document.createTextNode(data[i].cost))
                        }
                        textC.appendChild(textType)
                        textC.appendChild(textName)
                        textC.appendChild(textCost)
                        textR.appendChild(textC)
                        card.appendChild(textR)
                        document.getElementById("dom").appendChild(card)
                    }
                }
            })
            function onmouseClick(n) {
                window.location.href = "./goods.php?gender="+gender+"&type="+type+"&no="+n
            }
            async function mouseIn(n) {
                let count = await json.then(num => { return num[n].picture })
                let img = document.getElementsByClassName("my-img1")[n]
                img.src = count[1]
            }
            async function mouseOut(n) {
                let count = await json.then(num => { return num[n].picture })
                let img = document.getElementsByClassName("my-img1")[n]
                img.src = count[0]
            }
        </script>

    </div>
</body>

</html>

</html>