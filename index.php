
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./title.png">
    <title>تهنئة رمضانية</title>
    <link rel="stylesheet" href="./style.css">
    <style>
        <?php
            include_once("./index.css");
        ?>
    </style>
</head>
<body>

    <section>
        <div>
            <p id="cilck_hear"> 🌙  اضـغـط هـنـا <span> 🌙 </span> </p>
        </div> 
    </section>

    <main>
        <div id="ram">
            <h3>رمضان كريم</h3>
            <h3>رمضان كريم</h3>
        </div>

        <span id="name">
            <h4 id="i_i">انا : </h4>
            <h3 id="name_page">اسمك</h3>
        </span>

        <div id="main_text">
            
        </div>
    </main>
    <footer>
        <img src="./share.png" width="30" alt="خطا" id="img" data-toggle="modal" data-target="#exampleModal">
        <form method="post">
            <input type="text" name="name" required placeholder="اكتب اسمك" id="inp_name">
            <button type="button" id="send">ارسال</button>
            <button type="submit" name="send" id="submit">12dddddddddd</button>
            <textarea id="text_copy" cols="10" rows="10"></textarea>
        </form>
    </footer>

    

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">شارك التهنئة</h5>
      </div>
      <div class="modal-body">
        
        <a id="whatsapp" href="">
            <img src="./whatsapp.png" alt="خطا">
        </a>
        
        <a id="sms" href="">
            <img src="./sms.png" alt="خطا">
        </a>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
      </div>
    </div>
  </div>
</div>

    <script src="./jquery.js"></script>
    <script src="./javascript.js"></script>
    <script>
        if(window.history.replaceState){
            window.history.replaceState(null,null,window.location.href)
        }

        // window.scrollBy(0,100)

        $(function () {
            $("#cilck_hear").click(function () {
                $("section div").css({"border-radius":"50%","width":"0%","height":"0%","opacity":"0"})
                
                setTimeout(function(){ 
                    $("section").css("display","none")
                },1500)
            })
            // تغيير الخلفية
            function getRndImg(min, max) {
                return Math.floor(Math.random() * (max - min + 1) ) + min;
            }
            $num_i = getRndImg(0,2)
            $arr_i = ["bg1.png","bg2.png","bg3.png"]

            $("body").css({"background":`transparent url(./${$arr_i[$num_i]}) no-repeat center`,
                    "background-size":"100% 100%"});

            // تغيير النص
            function getRndText(min, max) {
                return Math.floor(Math.random() * (max - min + 1) ) + min;
            }
            $num_t = getRndText(0,5)
            
            var t4 = `❤️ واهتِف بالحُبّ أهلاً رَمضان ❤️ اللَّهُمَّ بَلِّغْنا  🌙 رَمَضَانَ  وَأَعِنَّا عَلَى صِيَامِهِ وَقِيَامِهِ عَلَى الوَجْهِ الّذِي يُرْضِيكَ عَنَّا،اللَّهُمَّ اجْعَلْ عَمَلَنَا كُلَّهُ خَالِصَاً لِوَجْهِكَ الكَرِيمِ 🌙❤`;
            var t5 = ` "بقـــــدوم"
                    🌹شهررمضان المبارك🌹
                    إلـى جميــــــــــع
                    الأهـــــــــــــــــــل
                    والإخـــــــــــــــوان
                    والأقـــــــــــــــارب
                    والأصــــــــــــد قاء
                        والزمـــــــــــــــــلاء
                        و الأحبــــــــــــاء
                    أسـألله القادر المقتــدر
                        أن يجمعــــــــــــكم
                        ووالديــــــــــــــــــكم
                        وأولادكـــــــــــــــــــم
                    ومن تحبــــــــــــــــــون
                    بجوارخيرالبشــــــــــــــر
                    🌷رمـضـان كـريـم🌷`;

            $arr_t = ["🕌كل عام وانتم بخير🕌","كل عام وانتم بخير","رمضان كريم اعادة الله علينا وعليكم بالخير والعافية","يسرنى أن أتقدم إليكم بأصدق التهانى  بمناسبة حلول شهر رمضان المبارك سائل المولى العلي القدير  أن يجعل أيامكم كلها أفراح وأن يعيده عليكم أعوام عديدة وأزمنة مديدة  إنه سميع مجيب الدعاء  🌙 رمضان كريم 🌙",t4,t5]
            $("#main_text").text($arr_t[$num_t])

            $("#send").click(function () {
                setTimeout(function(){ 
                    $("#submit").trigger('click')
                },1000)
            })

        })
       
    </script>

    <?php

        if($_SERVER['QUERY_STRING']){
            $name = $_GET['name'];
            echo '
                <script>
                    $(function () {
                        $("section").css("display","none")
                        $("#name_page").text("'.$name.'")
                        document.title = "تهنئة مقدمة من '.$name.'"
                        var link = window.location.href+"'.$name.'";
                        var text = "تهنئة مقدمة من"+"'.$name.'"+"\n \n"+link;
                        var link_whatsapp = `whatsapp://send?text=${text}`;
                        var link_sms = `sms:?body=${text}`;
                         
                        $("#whatsapp").attr("href",`${link_whatsapp}`);
                        $("#sms").attr("href",`${link_sms}`);
                    })
                    document.getElementById("img").style.display = "flex";
                </script>
            ';
        }

        if(isset($_POST['send'])){
            $name = $_POST['name'];
            echo '
                <script>
                    $(function () {
                        $("section").css("display","none")
                        $("#name_page").text("'.$name.'")
                    })
                    document.getElementById("img").style.display = "flex";
                </script>
            ';
            
            $myfile = fopen("./data.txt","a+") or die("حصل خطاء");
            fwrite($myfile, $name);
            fwrite($myfile, "\n");
            fclose($myfile);

            echo '
                <script>
                    $(function () {
                        $("#name_page").text("'.$name.'")
                        document.getElementById("img").style.display = "flex";
                    })
                    window.location.replace("index.php?name='.$name.'");
                </script>
            ';
        }
    ?>
    
</body>
</html>