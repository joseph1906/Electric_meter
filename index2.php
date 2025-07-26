<?php 
include("database.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Register now</title>
        <link rel="stylesheet" href="index2.css"/>
    </head>
    <body>
        <form action="index2.php" method="$_POST" onsubmit="validateForm(event)">
            <h1>Customer Registration <img src="11.jpg" alt=""></h1>
            <input type="text" id="fname" name="fname" placeholder="FirstName"><br>
            <span id="span1"></span><br>
            <input type="text" id="lname" name="lname" placeholder="LastName"><br>
            <span id="span2"></span><br>
            <input type="text" id="NId" name="nid" placeholder="National ID / Passport Number"><br>
            <span id="span3"></span><br>
            <input type="text" id="Phone" name="phone" placeholder="Phone"><br>
            <span id="span4"></span><br>
            <input type="text" id="email" name="email" placeholder="Email"><br>
            <span id="span5"></span><br>
            <input type="password" name="pass" id="password" placeholder="Password"><br>
            <span id="span13"></span><br>
            <input type="password" name="Cpass" id="Cpassword" placeholder="Confirm Password"><br>
            <span id="span14"></span><br>

            <select id="Region" name="District">
  <option value="">Select District</option>

  <optgroup label="Central Region">
    <option value="Buikwe">Buikwe</option>
    <option value="Bukomansimbi">Bukomansimbi</option>
    <option value="Butambala">Butambala</option>
    <option value="Buvuma">Buvuma</option>
    <option value="Gomba">Gomba</option>
    <option value="Kalangala">Kalangala</option>
    <option value="Kalungu">Kalungu</option>
    <option value="Kampala">Kampala</option>
    <option value="Kasanda">Kasanda</option>
    <option value="Kayunga">Kayunga</option>
    <option value="Kiboga">Kiboga</option>
    <option value="Kyankwanzi">Kyankwanzi</option>
    <option value="Kyotera">Kyotera</option>
    <option value="Luweero">Luweero</option>
    <option value="Lwengo">Lwengo</option>
    <option value="Lyantonde">Lyantonde</option>
    <option value="Masaka">Masaka</option>
    <option value="Mityana">Mityana</option>
    <option value="Mpigi">Mpigi</option>
    <option value="Mubende">Mubende</option>
    <option value="Mukono">Mukono</option>
    <option value="Nakaseke">Nakaseke</option>
    <option value="Nakasongola">Nakasongola</option>
    <option value="Rakai">Rakai</option>
    <option value="Sembabule">Sembabule</option>
    <option value="Wakiso">Wakiso</option>
  </optgroup>

  <optgroup label="Eastern Region">
    <option value="Budaka">Budaka</option>
    <option value="Bududa">Bududa</option>
    <option value="Bugiri">Bugiri</option>
    <option value="Bugweri">Bugweri</option>
    <option value="Bukedea">Bukedea</option>
    <option value="Bukwo">Bukwo</option>
    <option value="Bulambuli">Bulambuli</option>
    <option value="Busia">Busia</option>
    <option value="Butaleja">Butaleja</option>
    <option value="Buyende">Buyende</option>
    <option value="Iganga">Iganga</option>
    <option value="Jinja">Jinja</option>
    <option value="Kaliro">Kaliro</option>
    <option value="Kapchorwa">Kapchorwa</option>
    <option value="Kapelebyong">Kapelebyong</option>
    <option value="Katakwi">Katakwi</option>
    <option value="Kibuku">Kibuku</option>
    <option value="Kumi">Kumi</option>
    <option value="Kween">Kween</option>
    <option value="Luuka">Luuka</option>
    <option value="Manafwa">Manafwa</option>
    <option value="Mayuge">Mayuge</option>
    <option value="Mbale">Mbale</option>
    <option value="Namutumba">Namutumba</option>
    <option value="Namisindwa">Namisindwa</option>
    <option value="Namayingo">Namayingo</option>
    <option value="Ngora">Ngora</option>
    <option value="Pallisa">Pallisa</option>
    <option value="Serere">Serere</option>
    <option value="Sironko">Sironko</option>
    <option value="Soroti">Soroti</option>
    <option value="Tororo">Tororo</option>
    <option value="Butebo">Butebo</option>
  </optgroup>

  <optgroup label="Northern Region">
    <option value="Abim">Abim</option>
    <option value="Adjumani">Adjumani</option>
    <option value="Agago">Agago</option>
    <option value="Alebtong">Alebtong</option>
    <option value="Amolatar">Amolatar</option>
    <option value="Amudat">Amudat</option>
    <option value="Amuria">Amuria</option>
    <option value="Amuru">Amuru</option>
    <option value="Apac">Apac</option>
    <option value="Arua">Arua</option>
    <option value="Dokolo">Dokolo</option>
    <option value="Gulu">Gulu</option>
    <option value="Kaabong">Kaabong</option>
    <option value="Kitgum">Kitgum</option>
    <option value="Koboko">Koboko</option>
    <option value="Kole">Kole</option>
    <option value="Kotido">Kotido</option>
    <option value="Lamwo">Lamwo</option>
    <option value="Lira">Lira</option>
    <option value="Maracha">Maracha</option>
    <option value="Moroto">Moroto</option>
    <option value="Moyo">Moyo</option>
    <option value="Nakapiripirit">Nakapiripirit</option>
    <option value="Napak">Napak</option>
    <option value="Nebbi">Nebbi</option>
    <option value="Nwoya">Nwoya</option>
    <option value="Obongi">Obongi</option>
    <option value="Omoro">Omoro</option>
    <option value="Otuke">Otuke</option>
    <option value="Oyam">Oyam</option>
    <option value="Pader">Pader</option>
    <option value="Yumbe">Yumbe</option>
    <option value="Zombo">Zombo</option>
  </optgroup>

  <optgroup label="Western Region">
    <option value="Buhweju">Buhweju</option>
    <option value="Buliisa">Buliisa</option>
    <option value="Bundibugyo">Bundibugyo</option>
    <option value="Bunyangabu">Bunyangabu</option>
    <option value="Bushenyi">Bushenyi</option>
    <option value="Hoima">Hoima</option>
    <option value="Ibanda">Ibanda</option>
    <option value="Isingiro">Isingiro</option>
    <option value="Kabale">Kabale</option>
    <option value="Kabarole">Kabarole</option>
    <option value="Kamwenge">Kamwenge</option>
    <option value="Kanungu">Kanungu</option>
    <option value="Kasese">Kasese</option>
    <option value="Kibaale">Kibaale</option>
    <option value="Kibale">Kibale</option>
    <option value="Kiruhura">Kiruhura</option>
    <option value="Kiryandongo">Kiryandongo</option>
    <option value="Kisoro">Kisoro</option>
    <option value="Kyegegwa">Kyegegwa</option>
    <option value="Kyenjojo">Kyenjojo</option>
    <option value="Masindi">Masindi</option>
    <option value="Mitooma">Mitooma</option>
    <option value="Ntoroko">Ntoroko</option>
    <option value="Ntungamo">Ntungamo</option>
    <option value="Rubanda">Rubanda</option>
    <option value="Rubirizi">Rubirizi</option>
    <option value="Rukiga">Rukiga</option>
    <option value="Rukungiri">Rukungiri</option>
    <option value="Sheema">Sheema</option>
    <option value="Mbarara">Mbarara</option>
    <option value="Kazo">Kazo</option>
    <option value="Kikuube">Kikuube</option>
  </optgroup>
</select><br>
            <span id="span6"></span><br>
            <input type="text" id="MeterN" name="Mnumber" placeholder="Meter Number"><br>
            <span id="span7"></span><br>
            <select name="PType" id="PType">
                <option value="">Phase Type</option>
                <option value="Single Phase">Single Phase</option>
                <option value="Three Phase">Three Phase</option>
            </select><br>
            <span id="span8"></span><br>
            <input type="date" name="IDate" id="IDate" placeholder="Installation Date"><br>
            <span id="span9"></span><br>
            <select name="MPaye" id="MPaye">
                <option value="Payement Mode">Payement Mode</option>
                <option value="Mobile Money">Mobile Money</option>
                <option value="Airtel Money">Airtel Money</option>
                <option value="Bank">Bank</option>
                <option value="Cash">Cash</option>
            </select><br>
            <span id="span10"></span><br>
            <label for="declaration">
                <input type="checkbox" id="decl" name="decl">
                I agree to the terms and conditions
            </label><br>
            <span id="span11"></span><br>
            <input type="submit" name="submit" class="submit"><br>
            <span id="span12"></span>
        </form>
        <script src="index2.js"></script>
    </body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fn = htmlspecialchars(trim(isset($_POST["fname"]) ? $_POST["fname"] : ''));
    $ln = htmlspecialchars(trim(isset($_POST["lname"]) ? $_POST["lname"] : ''));
    $nid = htmlspecialchars(trim(isset($_POST["nid"]) ? $_POST["nid"] : ''));
    $ph = htmlspecialchars(trim(isset($_POST["phone"]) ? $_POST["phone"] : ''));
    $em = filter_var(trim(isset($_POST["email"]) ? $_POST["email"] : ''), FILTER_SANITIZE_EMAIL);
    $di = htmlspecialchars(trim(isset($_POST["District"]) ? $_POST["District"] : ''));
    $mn = htmlspecialchars(trim(isset($_POST["Mnumber"]) ? $_POST["Mnumber"] : ''));
    $pt = htmlspecialchars(trim(isset($_POST["PType"]) ? $_POST["PType"] : ''));
    $id = htmlspecialchars(trim(isset($_POST["IDate"]) ? $_POST["IDate"] : ''));
    $mp = htmlspecialchars(trim(isset($_POST["MPaye"]) ? $_POST["MPaye"] : ''));

    if ($fn && $ln && $nid && $ph && $em && $di && $mn && $pt && $id && $mp) {
        $insert = "INSERT INTO registration_meter (FirstName,LastName,Identity,Phone,
        Email , District, MeterNumber,PhaseType,InstallationDate,PaymentMethod)
        VALUES (?,?,?,?,?,?,?,?,?,?)";
        $stmt = $connect->prepare($insert);
        $stmt->bind_param("ssssssssss",$fn,$ln,$nid,$ph,$em,$di,$mn
        ,$pt,$id,$mp);

        if($stmt->execute()){
          echo"Data saved successfully";
        } else {
          echo "Error:".$stmt->error;
        }
        $stmt->close();
    } else{
      echo"Make sure you have filled properly the form";
    }
}
?>