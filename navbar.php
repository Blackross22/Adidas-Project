<?php
    echo "
    <nav id=\"nav\" class=\"navbar navbar-expand-lg navbar-dark justify-content-between px-0 py-0\"
    style=\"background-color: #fff;\">
    <!-- collapse navbar -->
    <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown01\">
        <!-- navbar content -->
        <div class=\"col px-0\">

            <!--first half-->
            <div class=\"row mt-2 px-4 mr-5\" id=\"fontUpper\">
                <!-- mock up -->
                <ul class=\"navbar-nav my-auto ml-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\" role=\"button\">
                            ไทย
                            <i class='fas fa-angle-down' style='font-size:16px'></i>
                        </a>
                    </li>

                    <li class=\"nav-item ml-3\">
                        <a class=\"nav-link\" href=\"#\" role=\"button\">
                            ความช่วยเหลือ
                        </a>
                    </li>

                    <li class=\"nav-item ml-3\">
                        <a class=\"nav-link\" href=\"#\" role=\"button\">
                            ตัวติดตามสินค้า:
                        </a>
                    </li>

                    <li class=\"nav-item ml-3\">
                        <a class=\"nav-link\" href=\"#\" role=\"button\">
                            สมัครรับจดหมายข่าว
                        </a>
                    </li>

                    <li class=\"nav-item ml-3\">
                        <a class=\"nav-link\" href=\"#\" role=\"button\">
                            เข้าสู่ระบบ
                        </a>
                    </li>

                </ul>
            </div>

            <!--second half-->
            <div class=\"row pl-4 w-100\">
                <!-- logo adidas -->
                <a href=\"./index.php\">
                    <img width=\"40%\" src=\"src/image/logo/adidias_logo.png\">
                </a>
                <div class=\"navbar-nav mt-2 pt-3 mx-auto\">
                    <!--dropdown item of menu ผู้ชาย-->
                    <div class=\"nav-item dropdown text-center ml-4\">
                        <div class=\"head\">
                            <a class=\"nav-link dropdown bold con\" href=\"#\" id=\"navbarDropdown\" role=\"button\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                ผู้ชาย
                            </a>
                        </div>

                        <!--dropdown sub items of  menu ผู้ชาย-->
                        <div class=\"dropdown-menu p-0\" aria-labelledby=\"navbarDropdown\">
                            <div class=\"row\">
                                <!-- left side -->
                                <div class=\"col-4 border-right border-light\">
                                    <div class=\"row mt-5\">
                                        <div class=\"col-3 mx-auto  text-left\">
                                            <p class=\"mb-2 item-head\"><a href=\"#\" class=\"link_nav\">แนะนำ</a>
                                            </p>
                                            <p class=\"mb-1 item-sub\"><a href=\"#\" class=\"link_nav\">สินค้าใหม่</a>
                                            </p>
                                            <p class=\"mb-1 item-sub\"><a href=\"#\" class=\"link_nav\">Release
                                                    Dates</a></p>
                                            <p class=\"mb-3 item-sub\"><a href=\"#\" class=\"link_nav\">สินค้าขายดี</a>
                                            </p>
                                            <p class=\"mb-1 item-sub\"><a href=\"#\" class=\"link_nav\">Heat.RDY</a>
                                            </p>
                                            <p class=\"mb-1 item-sub\"><a href=\"#\" class=\"link_nav\">Superstar
                                                    2020</a></p>
                                            <p class=\"mb-1 item-sub\"><a href=\"#\" class=\"link_nav\">Pulseboost</a>
                                            </p>
                                            <p class=\"mb-1 item-sub\"><a href=\"#\" class=\"link_nav\">House of
                                                    Jerseys</a></p>
                                            <p class=\"mb-1 item-sub\"><a href=\"#\" class=\"link_nav\">Ultraboost
                                                    20</a></p>
                                            <p class=\"mb-3 item-sub\"><a href=\"#\" class=\"link_nav\">Continental
                                                    80</a></p>
                                            <p class=\"mb-5 item-sub\"><a href=\"#\" class=\"link_nav\">YEEZY</a></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- right side -->
                                <div class=\"col-8\">
                                    <div class=\"row mt-5\">
                                    <!-- ร้องเท้า -->
                                    <div class=\"col-2 ml-3\">
                                        <p class=\"mb-2 item-head\"><a href=\"./category.php?gender=male&type=shoes&select=all\" class=\"link_nav\">ร้องเท้า</a>
                                        </p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=male&type=shoes&select=new\" class=\"link_nav\">สินค้าใหม่</a>
                                        </p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=male&type=shoes&select=original\" class=\"link_nav\">Originals</a></p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=male&type=shoes&select=football\" class=\"link_nav\">ฟุตบอล</a>
                                        </p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=male&type=shoes&select=running\" class=\"link_nav\">รองเท้าวิ่ง</a>
                                        </p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=male&type=shoes&select=training\" class=\"link_nav\">เทรนนิ่ง</a></p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=male&type=shoes&select=neo\" class=\"link_nav\">อาดิดาส Neo</a>
                                        </p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=male&type=shoes&select=outdoor\" class=\"link_nav\">เอาท์ดอร์</a></p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=male&type=shoes&select=basketball\" class=\"link_nav\">บาสเกตบอล</a></p>
                                        <p class=\"mb-5 item-sub\"><a href=\"./category.php?gender=male&type=shoes&select=golf\" class=\"link_nav\">กอล์ฟ</a></p>
                                    </div>
                                    <!-- เสื้อผ้า -->
                                    <div class=\"col-2\">
                                        <p class=\"mb-2 item-head\"><a href=\"./category.php?gender=male&type=clothes&select=all\" class=\"link_nav\">เสื้อผ้า</a>
                                        </p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=male&type=clothes&select=new\" class=\"link_nav\">สินค้าใหม่</a>
                                        </p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=male&type=clothes&select=polo\" class=\"link_nav\">เสื้อยืดและโปโล</a></p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=male&type=clothes&select=jc\" class=\"link_nav\">เสื้อเจอร์ซีย์</a>
                                        </p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=male&type=clothes&select=hoody\" class=\"link_nav\">ฮู้ดดี้และเทร็กท็อป</a>
                                        </p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=male&type=clothes&select=jacket\" class=\"link_nav\">แจ็คเก็ต</a></p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=male&type=clothes&select=pant\" class=\"link_nav\">กางเกง</a>
                                        </p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=male&type=clothes&select=pant\" class=\"link_nav\">กางเกงรัดรูป</a></p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=male&type=clothes&select=shorts\" class=\"link_nav\">กางเกงขาสั้น</a></p>
                                        <p class=\"mb-5 item-sub\"><a href=\"./category.php?gender=male&type=clothes&select=spiderman\" class=\"link_nav\">ชุดรัดกล้ามเนื้อ</a></p>
                                    </div>
                                    <!-- อุปกรณ์ -->
                                    <div class=\"col-2\">
                                        <p class=\"mb-2 item-head\"><a href=\"./category.php?gender=male&type=tools&select=all\" class=\"link_nav\">อุปกรณ์</a>
                                        </p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=male&type=tools&select=new\" class=\"link_nav\">สินค้าใหม่</a>
                                        </p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=male&type=tools&select=all\" class=\"link_nav\">กระเป๋าทั้งหมด</a></p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=male&type=tools&select=backpack\" class=\"link_nav\">กระเป๋าพายหลัง</a>
                                        </p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=male&type=tools&select=training\" class=\"link_nav\">กระเป๋าเทรนนิ่ง</a>
                                        </p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=male&type=tools&select=sockets\" class=\"link_nav\">ถุงเท้า</a></p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=male&type=tools&select=cap\" class=\"link_nav\">หมวก</a>
                                        </p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=male&type=tools&select=gloves\" class=\"link_nav\">ถุงมือและผ้าพันคอ</a></p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=male&type=tools&select=ball\" class=\"link_nav\">ลูกบอล</a></p>
                                        <p class=\"mb-5 item-sub\"><a href=\"./category.php?gender=male&type=tools&select=mobile\" class=\"link_nav\">มือถือและอุปกรณ์เสริม</a></p>
                                    </div>
                                    <!-- ลดราคา -->
                                    <div class=\"col-2\">
                                        <p class=\"mb-2 item-head\"><a href=\"./category.php?gender=male&type=discout&select=all\" class=\"link_nav\">สินค้าลดราคา</a>
                                        </p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=male&type=discout&select=shoes\" class=\"link_nav\">รองเท้า</a>
                                        </p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=male&type=discout&select=clothes\" class=\"link_nav\">เสื้อผ้า</a></p>
                                        <p class=\"mb-5 item-sub\"><a href=\"./category.php?gender=male&type=discout&select=tools\" class=\"link_nav\">อุปกรณ์</a>
                                    </div>
                                    <!-- กีฬา -->
                                    <div class=\"col-2\">
                                        <p class=\"mb-2 item-head\"><a href=\"#\" class=\"link_nav\">กีฬา</a>
                                        </p>
                                        <p class=\"mb-1 item-sub\"><a href=\"#\" class=\"link_nav\">ฟุลบอล</a>
                                        </p>
                                        <p class=\"mb-1 item-sub\"><a href=\"#\" class=\"link_nav\">วิ่ง</a></p>
                                        <p class=\"mb-1 item-sub\"><a href=\"#\" class=\"link_nav\">เทรนนิ่ง</a>
                                        </p>
                                        <p class=\"mb-1 item-sub\"><a href=\"#\" class=\"link_nav\">บาสเกตบอล</a>
                                        </p>
                                        <p class=\"mb-1 item-sub\"><a href=\"#\" class=\"link_nav\">เอาท์ดอร์</a></p>
                                        <p class=\"mb-1 item-sub\"><a href=\"#\" class=\"link_nav\">ว่ายน้ำ</a>
                                        </p>
                                        <p class=\"mb-5 item-sub\"><a href=\"#\" class=\"link_nav\">กอล์ฟ</a></p>
                                    </div>
                                    <!--forget about it-->
                                    <div class=\"col-2\"></div>
                                </div>
                            </div>
                        </div>
                        <div class=\"dropdown-divider mt-0\"></div>
                        <!-- bottom line -->
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <div class=\"row\">
                                    <div class=\"col-4 mx-auto  text-left\">
                                        <p class=\"mb-2 item-head\"><a href=\"#\" class=\"link_nav\">สินค้าผู้ชายทั้งหมด</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-8\">
                                <div class=\"row\">
                                    <div class=\"col-2\">
                                        <p class=\"mb-2 item-head\"><a href=\"#\" class=\"link_nav\">ร้องเท้าผู้ชายทั้งหมด</a>
                                        </p>
                                    </div>
                                    <div class=\"col-2\">
                                        <p class=\"mb-2 item-head\"><a href=\"#\" class=\"link_nav\">เสื้อผ้าผู้ชายทั้งหมด</a>
                                        </p>
                                    </div>
                                    <div class=\"col-2\">
                                        <p class=\"mb-2 item-head\"><a href=\"#\" class=\"link_nav\">อุปกรณ์ผู้ชายทั้งหมด</a>
                                        </p>
                                    </div>
                                    <div class=\"col-2\">
                                        <p class=\"mb-2 item-head\"><a href=\"#\" class=\"link_nav\">สินค้าลดราคา</a>
                                        </p>
                                    </div>
                                    <div class=\"col-2\">
                                        <p class=\"mb-2 item-head\"><a href=\"#\" class=\"link_nav\">กีฬาสำหรับหผู้ชายทั้งหมด</a>
                                        </p>
                                    </div>
                                    <div class=\"col-2\"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!--dropdown item of menu ผู้หญิง-->
                <div class=\"nav-item dropdown text-center ml-4\">
                    <div class=\"head\">
                        <a class=\"nav-link dropdown bold con\" href=\"#\" id=\"navbarDropdown\" role=\"button\"
                            data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            ผู้หญิง
                        </a>
                    </div>

                    <!--dropdown sub items of menu ผู้หญิง-->
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <div class=\"row\">
                            <!-- left side -->
                            <div class=\"col-4 border-right border-light\">
                                <div class=\"row mt-5\">
                                    <div class=\"col-3 mx-auto  text-left\">
                                        <p class=\"mb-2 item-head\"><a href=\"#\" class=\"link_nav\">แนะนำ</a>
                                        </p>
                                        <p class=\"mb-1 item-sub\"><a href=\"#\" class=\"link_nav\">สินค้าใหม่</a>
                                        </p>
                                        <p class=\"mb-1 item-sub\"><a href=\"#\" class=\"link_nav\">Release
                                                Dates</a></p>
                                        <p class=\"mb-3 item-sub\"><a href=\"#\" class=\"link_nav\">สินค้าขายดี</a>
                                        </p>
                                        <p class=\"mb-1 item-sub\"><a href=\"#\" class=\"link_nav\">Heat.RDY</a>
                                        </p>
                                        <p class=\"mb-1 item-sub\"><a href=\"#\" class=\"link_nav\">Superstar
                                                2020</a></p>
                                        <p class=\"mb-1 item-sub\"><a href=\"#\" class=\"link_nav\">Reimagine Sport</a>
                                        </p>
                                        <p class=\"mb-1 item-sub\"><a href=\"#\" class=\"link_nav\">Ozweego</a></p>
                                        <p class=\"mb-1 item-sub\"><a href=\"#\" class=\"link_nav\">Ultraboost
                                                20</a></p>
                                        <p class=\"mb-3 item-sub\"><a href=\"#\" class=\"link_nav\">Sports inspired</a></p>
                                        <p class=\"mb-5 item-sub\"><a href=\"#\" class=\"link_nav\">YEEZY</a></p>
                                    </div>
                                </div>
                            </div>
                            <!-- right side -->
                            <div class=\"col-8\">
                                <div class=\"row mt-5\">
                                    <!-- ร้องเท้า -->
                                    <div class=\"col-2 ml-3\">
                                        <p class=\"mb-2 item-head\"><a href=\"./category.php?gender=female&type=shoes&select=all\" class=\"link_nav\">ร้องเท้า</a>
                                        </p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=female&type=shoes&select=new\" class=\"link_nav\">สินค้าใหม่</a>
                                        </p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=female&type=shoes&select=original\" class=\"link_nav\">Originals</a></p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=female&type=shoes&select=football\" class=\"link_nav\">ฟุตบอล</a>
                                        </p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=female&type=shoes&select=running\" class=\"link_nav\">รองเท้าวิ่ง</a>
                                        </p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=female&type=shoes&select=training\" class=\"link_nav\">เทรนนิ่ง</a></p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=female&type=shoes&select=neo\" class=\"link_nav\">อาดิดาส Neo</a>
                                        </p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=female&type=shoes&select=outdoor\" class=\"link_nav\">เอาท์ดอร์</a></p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=female&type=shoes&select=basketball\" class=\"link_nav\">บาสเกตบอล</a></p>
                                        <p class=\"mb-5 item-sub\"><a href=\"./category.php?gender=female&type=shoes&select=golf\" class=\"link_nav\">กอล์ฟ</a></p>
                                    </div>
                                    <!-- เสื้อผ้า -->
                                    <div class=\"col-2\">
                                        <p class=\"mb-2 item-head\"><a href=\"./category.php?gender=female&type=clothes&select=all\" class=\"link_nav\">เสื้อผ้า</a>
                                        </p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=female&type=clothes&select=new\" class=\"link_nav\">สินค้าใหม่</a>
                                        </p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=female&type=clothes&select=polo\" class=\"link_nav\">เสื้อยืดและโปโล</a></p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=female&type=clothes&select=jc\" class=\"link_nav\">เสื้อเจอร์ซีย์</a>
                                        </p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=female&type=clothes&select=hoody\" class=\"link_nav\">ฮู้ดดี้และเทร็กท็อป</a>
                                        </p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=female&type=clothes&select=jacket\" class=\"link_nav\">แจ็คเก็ต</a></p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=female&type=clothes&select=pant\" class=\"link_nav\">กางเกง</a>
                                        </p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=female&type=clothes&select=pant\" class=\"link_nav\">กางเกงรัดรูป</a></p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=female&type=clothes&select=shorts\" class=\"link_nav\">กางเกงขาสั้น</a></p>
                                        <p class=\"mb-5 item-sub\"><a href=\"./category.php?gender=female&type=clothes&select=spiderman\" class=\"link_nav\">ชุดรัดกล้ามเนื้อ</a></p>
                                    </div>
                                    <!-- อุปกรณ์ -->
                                    <div class=\"col-2\">
                                        <p class=\"mb-2 item-head\"><a href=\"./category.php?gender=female&type=tools&select=all\" class=\"link_nav\">อุปกรณ์</a>
                                        </p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=female&type=tools&select=new\" class=\"link_nav\">สินค้าใหม่</a>
                                        </p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=female&type=tools&select=all\" class=\"link_nav\">กระเป๋าทั้งหมด</a></p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=female&type=tools&select=backpack\" class=\"link_nav\">กระเป๋าพายหลัง</a>
                                        </p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=female&type=tools&select=training\" class=\"link_nav\">กระเป๋าเทรนนิ่ง</a>
                                        </p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=female&type=tools&select=sockets\" class=\"link_nav\">ถุงเท้า</a></p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=female&type=tools&select=cap\" class=\"link_nav\">หมวก</a>
                                        </p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=female&type=tools&select=gloves\" class=\"link_nav\">ถุงมือและผ้าพันคอ</a></p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=female&type=tools&select=ball\" class=\"link_nav\">ลูกบอล</a></p>
                                        <p class=\"mb-5 item-sub\"><a href=\"./category.php?gender=female&type=tools&select=mobile\" class=\"link_nav\">มือถือและอุปกรณ์เสริม</a></p>
                                    </div>
                                    <!-- ลดราคา -->
                                    <div class=\"col-2\">
                                        <p class=\"mb-2 item-head\"><a href=\"./category.php?gender=female&type=discout&select=all\" class=\"link_nav\">สินค้าลดราคา</a>
                                        </p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=female&type=discout&select=shoes\" class=\"link_nav\">รองเท้า</a>
                                        </p>
                                        <p class=\"mb-1 item-sub\"><a href=\"./category.php?gender=female&type=discout&select=clothes\" class=\"link_nav\">เสื้อผ้า</a></p>
                                        <p class=\"mb-5 item-sub\"><a href=\"./category.php?gender=female&type=discout&select=tools\" class=\"link_nav\">อุปกรณ์</a>
                                    </div>
                                        <!-- กีฬา -->
                                        <div class=\"col-2\">
                                            <p class=\"mb-2 item-head\"><a href=\"#\" class=\"link_nav\">กีฬา</a>
                                            </p>
                                            <p class=\"mb-1 item-sub\"><a href=\"#\" class=\"link_nav\">วิ่ง</a></p>
                                            <p class=\"mb-1 item-sub\"><a href=\"#\" class=\"link_nav\">เทรนนิ่ง</a>
                                            </p>
                                            <p class=\"mb-1 item-sub\"><a href=\"#\" class=\"link_nav\">โยคะ</a>
                                            </p>
                                            <p class=\"mb-5 item-sub\"><a href=\"#\" class=\"link_nav\">Golf</a></p>
                                        </div>
                                        <!-- forget about it-->
                                        <div class=\"col-2\"></div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"dropdown-divider mt-0\"></div>
                            <!-- bottom line -->
                            <div class=\"row\">
                                <div class=\"col-4\">
                                    <div class=\"row\">
                                        <div class=\"col-4 mx-auto  text-left\">
                                            <p class=\"mb-2 item-head\"><a href=\"#\" class=\"link_nav\">สินค้าผู้หญิงทั้งหมด</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-8\">
                                    <div class=\"row\">
                                        <div class=\"col-2\">
                                            <p class=\"mb-2 item-head\"><a href=\"#\" class=\"link_nav\">ร้องเท้าผู้หญิงทั้งหมด</a>
                                            </p>
                                        </div>
                                        <div class=\"col-2\">
                                            <p class=\"mb-2 item-head\"><a href=\"#\" class=\"link_nav\">เสื้อผ้าผู้หญิงทั้งหมด</a>
                                            </p>
                                        </div>
                                        <div class=\"col-2\">
                                            <p class=\"mb-2 item-head\"><a href=\"#\" class=\"link_nav\">อุปกรณ์ผู้หญิงทั้งหมด</a>
                                            </p>
                                        </div>
                                        <div class=\"col-2\">
                                            <p class=\"mb-2 item-head\"><a href=\"#\" class=\"link_nav\">สินค้าลดราคา</a>
                                            </p>
                                        </div>
                                        <div class=\"col-2\">
                                            <p class=\"mb-2 item-head\"><a href=\"#\" class=\"link_nav\">กีฬาสำหรับหผู้หญิงทั้งหมด</a>
                                            </p>
                                        </div>
                                        <div class=\"col-2\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- mock up -->
                    <div class=\"nav-item dropdown text-center  ml-4\">
                        <a class=\"nav-link dropdown bold con\">
                            เด็ก
                        </a>
                    </div>
                    <!-- mock up -->
                    <div class=\"nav-item dropdown text-center ml-4\">
                        <a class=\"nav-link dropdown con\">
                            กีฬา
                        </a>
                    </div>
                    <!-- mock up -->
                    <div class=\"nav-item dropdown text-center  ml-4\">
                        <a class=\"nav-link dropdown con\">
                            แบรนด์
                        </a>
                    </div>
                    <!-- mock up -->
                    <div class=\"nav-item dropdown ml-4\">
                        <a class=\"nav-link dropdown con\">
                            วันที่เริ่มจำหน่าย
                        </a>
                    </div>
                </div>

                <!--Search bar-->
                <form class=\"form-inline m-0 p-0 mr-5 mt-2\">
                    <i id=\"inside\" class='fas fa-search' style='font-size:18px'></i>
                    <input class=\"mr-sm-2 rounded-0 border-0 bg-light py-2 px-3\" type=\"search\"
                        placeholder=\"ค้นหา\" aria-label=\"Search\">
                    <i class='fas fa-shopping-bag mr-1' style='font-size:24px'></i>
                </form>
            </div>
        </div>
    </div>
</nav>"
?>