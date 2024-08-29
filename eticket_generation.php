<?php
include("connection.php");
include("crud/ticket_crud.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR BASED BUS TICKET RESERVATION & TRACKING SYSTEM</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" hr(ef="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>      
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
</head>
<body>
    <a href="dashboard.php"><button class="back-arrow-icon"><i class="fa fa-arrow-left" aria-hidden="true"></i></button></a>
    <div class="log">
        <h3 class="login-head">E-Ticket Generation</h3><br /><br />
        <table>
           <form method="post" href="#" name="ticketfrm" onsubmit="return formData()">
               <tr>
                 <td>
                     <label for="eid">
                         E-Ticket ID
                     </label>
                 </td>
                 <td><input type="text" name="eid" class= "reg-item" size="10" required/></td>
               </tr>

               <tr>
                 <td>
                     <label for="passengerid">
                         Passenger ID
                     </label>
                 </td>
                 <td><input type="text" name="passengerid" class= "reg-item" size="10" onkeyup="GetDetail(this.value)" required/></td>
               </tr>

               <tr>
                 <td>
                     <label for="pname">
                         Passenger Name
                     </label>
                 </td>
                 <td><input type="text" name="pname" class= "reg-item" size="255" required/></td>
               </tr>

               <tr>
                 <td>
                     <label for="no_of_pass">
                         Number of Passengers
                     </label>
                 </td>
                 <td>
                    Number of Adults<input type="number" name="nadult" size="2" class="passenger-type" />
                    Number of Children<input type="number" name="nchild" size="2" class="passenger-type" />
                 </td>
               </tr>
               
               <tr>
                 <td>
                     <label for="routemap">
                         Bus Route
                     </label>
                 </td>
                 <td>
                     <select id="route" name="routemap" class="reg-item">
                         <option value="r1">Colombo - Kandy</option>
                         <option value="r2">Colombo - Matara</option>
                         <option value="r3">Colombo - Kataragama</option>
                         <option value="r4">Colombo-Mannar</option>
                         <option value="r5">Colombo - Kurunegala</option>
                         <option value="r6">Colombo - Kalpitiya</option>
                         <option value="r7">Colombo - Matale</option>
                         <option value="r8">Colombo - Theldeniya</option>
                         <option value="r9">Kataragama - Kandy</option>
                         <option value="r10">Matara - Ratnapura</option>
                         <option value="r11">Colombo - Dayagama</option>
                         <option value="r12">Kandy - Monaragala</option>
                         <option value="r13">Colombo - Medawachchiya</option>
                         <option value="r14">Colombo-Nawalapitiya</option>
                         <option value="r15">Panadura-Kandy</option>
                         <option value="r16">Colombo-Hatton</option>
                         <option value="r17">Colombo-Gampola</option>
                         <option value="r18">Kandy-Badulla</option>
                         <option value="r19">Kandy - Ampara</option>
                         <option value="r20">Avissawella - Kithulgala</option>
                         <option value="r21">Colombo - Hakmana</option>
                         <option value="r22">Badulla - Batticaloa</option>
                         <option value="r23">Matara - Bandarawela</option>
                         <option value="r24">Colombo - Kataragama</option>
                         <option value="r25">Negombo</option>
                         <option value="r26">Galle - Ampara</option>
                         <option value="r27">Kandy - Mahiyanganaya</option>
                         <option value="r28">Colombo - Mahiyanganaya - Bibila</option>
                         <option value="r29">Kandy - Kaduruwela</option>
                         <option value="r30">Colombo- Udugama</option>
                         <option value="r31">Kandy - Anuradhapura - Trincomalee</option>
                         <option value="r32">Kandy - Nuwaraeliya</option>
                         <option value="r33">Colombo - Kalmunai</option>
                         <option value="r34">Colombo - Trincomalee</option>
                         <option value="r35">Kandy - Hingurakgoda</option>
                         <option value="r36">Colombo - Anuradhapura</option>
                         <option value="r37">Colombo - Deniyaya</option>
                         <option value="r38">Aluthgama - Panadura - Badulla</option>
                         <option value="r39">Colombo - Rakwana</option>
                         <option value="r40">Kandy - Rathnapura</option>
                         <option value="r41">Anuradhapura - Ampara - Trincomalee</option>
                         <option value="r42">Colombo - Nawalapitiya</option>
                         <option value="r43">Colombo - Nuwaraeliya</option>
                         <option value="r44">Putlam - Batticaloa- Vavuniyava - Trincomalee - Akkaraipattu</option>
                         <option value="r45">Colombo - Kuliyapitiya</option>
                         <option value="r46">Embilipitiya - Badulla</option>
                         <option value="r47">Colombo - Akkaraipattu</option>
                         <option value="r48">Colombo - Badulla</option>
                         <option value="r49">Colombo - Rathnapura</option>
                         <option value="r50">Mattakkuliya - Seemamalakaya</option>
                         <option value="r51">Labugama - Pettah</option>
                         <option value="r52">Kelanimulla - Seemamalakaya</option>
                         <option value="r53">Ambathale - Pettah</option>
                         <option value="r54">IDH - Pettah</option>
                         <option value="r55">Borella - Nawarohala (J'pura)</option>
                         <option value="r56">Kiribathgoda - Angulana</option>
                         <option value="r57">Mattakuliya - Rathmalana</option>
                         <option value="r58">Baththaramulla - Dehiwala</option>
                         <option value="r59">Salmaluyana - Townhall</option>
                         <option value="r60">Angoda - Slave Island</option>
                         <option value="r61">Nigegoda - Kotahena</option>
                         <option value="r62">Koswaththa - Fort</option>
                         <option value="r63">Nugegoda - Thotalanga</option>
                         <option value="r64">Borella - Kottawa</option>
                         <option value="r65">Kohilawaththa - Kollupitiya</option>
                         <option value="r66">Nugegoda/Karagampitiya - Hettiyawaththa</option>
                         <option value="r67">Kaduwela - Kollupitiya</option>
                         <option value="r68">Mattakkuliya - Narahenpita</option>
                         <option value="r69">Nittambuwa - Pettah</option>
                         <option value="r70">Airport/Jaela - Fort</option>
                         <option value="r71">Raddoluwa - Fort</option>
                         <option value="r72">Godagama - Pettah</option>
                         <option value="r73">Townhall - Kadawatha</option>
                         <option value="r74">Gampaha - Colombo</option>
                         <option value="r75">Panadura - Mathale</option>
                         <option value="r76">Welimada - Haputale</option>
                         <option value="r77">Rathnapura - Walasmulla</option>
                         <option value="r78">Hambanthota - Embilipitiya</option>
                         <option value="r79">Mahiyanganaya - Dehiattakandiya</option>
                         <option value="r80">Mahiyanganaya - Hanguranketha</option>
                         <option value="r81">Mahiyanganaya - Kaduruwela</option>
                         <option value="r82">Kaduruwela - Mahaoya</option>
                         <option value="r83">Mahiyanganaya - Welikanda</option>
                         <option value="r84">Weheragala - Badulla</option>
                         <option value="r85">Kurunegala - Mahiyanganaya</option>
                         <option value="r86">Badulla - Siripura</option>
                         <option value="r87">Dehiattakandiya - Kaduruwela</option>
                         <option value="r88">Aralaganwila - Ampara</option>
                         <option value="r89">Dehiattakandiya - Monaragala</option>
                         <option value="r90">Kaduruwela - Badulla</option>
                         <option value="r91">Dehiattakandiya - Dambulla</option>
                         <option value="r92">Badulla - Anuradhapura</option>
                         <option value="r93">Dehiattakandiya - Hanguranketha</option>
                         <option value="r94">Siripura - Mahiyanganaya</option>
                         <option value="r95">Siripura - Mahaoya</option>
                         <option value="r96">Girandurukotte - Ampara</option>
                         <option value="r97">Balangoda - Bandarawela</option>
                         <option value="r98">Bandarawela - Boralanda</option>
                         <option value="r99">Negombo - Hatton</option>
                         <option value="r100">Katunayake - Badulla</option>
                         <option value="r101">Kaduruwela - Bibile</option>
                         <option value="r102">Welimada - Bandarawela</option>
                         <option value="r103">Nuwaraeliya - Badulla</option>
                         <option value="r104">Nuwaraeliya - Welimada</option>
                         <option value="r105">Nuwaraeliya - Bandarawela</option>
                         <option value="r106">Galauda - Suriyapokuna</option>
                         <option value="r107">Badulla - Anuradhapura</option>
                         <option value="r108">Horana - Kandy</option>
                         <option value="r109">Matara - Kataragama</option>
                         <option value="r110">Nittambuwa - Ruwanwella</option>
                         <option value="r111">Embilipitiya - Middeniya</option>
                         <option value="r112">Colombo - Radawela</option>
                         <option value="r113">Colombo - Udugama</option>
                         <option value="r114">Colombo - Yakkalamulla</option>
                         <option value="r115">Colombo - Baddegama</option>
                         <option value="r116">Colombo - Udugama</option>
                         <option value="r117">Mathugama - Pitigala</option>
                         <option value="r118">Colombo - Elpitiya</option>
                         <option value="r119">Mathugama - Neluwa</option>
                         <option value="r120">Horana - Karandana</option>
                         <option value="r121">Panadura - Rathnapura</option>
                         <option value="r122">Mathugama - Kandy</option>
                         <option value="r123">Awissawella - Eheliyagoda</option>
                         <option value="r124">Awissawella - Rathnapura</option>
                         <option value="r125">Colombo - Kalawana</option>
                         <option value="r126">Mathugama - Kalawana</option>
                         <option value="r127">Deniyaya - Badulla</option>
                         <option value="r128">Balangoda - Hatton</option>
                         <option value="r129">Embilipitiya - Matara</option>
                         <option value="r130">Embilipitiya - Beliatta</option>
                         <option value="r131">Embilipitiya - Hakmana</option>
                         <option value="r132">Galle - Embilipitiya</option>
                         <option value="r133">Embilipitiya - Suriyawewa</option>
                         <option value="r134">Colombo - Hirigalketiya</option>
                         <option value="r135">Kurunegala - Kegalle</option>
                         <option value="r136">Kurunegala - Rambukkana</option>
                         <option value="r137">Kurunegala - Warakapola</option>
                         <option value="r138">Kurunegala - Kekirawa</option>
                         <option value="r139">Kurunegala - Galnewa</option>
                         <option value="r140">Kurunegala - Dambulla</option>
                         <option value="r141">Kurunegala - Wewala</option>
                         <option value="r142">Kurunegala - Galkiriyagama</option>
                         <option value="r143">Kurunegala - Sigiriya</option>
                         <option value="r144">Mathale - Galnewa</option>
                         <option value="r145">Kurunegala - Mathale</option>
                         <option value="r146">Kurunegala - Ankumbura</option>
                         <option value="r147">Kurunegala - Mirissala</option>
                         <option value="r148">Rambukkana - Mawathagama</option>
                         <option value="r149">Mathale - Kaduruwela</option>
                         <option value="r150">Kandy - Kurunegala</option>
                         <option value="r151">Awissawella - Daigala</option>
                         <option value="r152">Awissawella - Napawala</option>
                         <option value="r153">Kandy - Kegalle</option>
                         <option value="r154">Kandy - Mawanella</option>
                         <option value="r155">Nittambuwa - Warakapola</option>
                         <option value="r156">Colombo - Kotiyakumbura</option>
                         <option value="r157">Awissawella - Kegalle</option>
                         <option value="r158">Colombo - Bulathkohupitiya</option>
                         <option value="r159">Awissawella - Bulathkohupitiya</option>
                         <option value="r160">Gampola - Kandy</option>
                         <option value="r161">Embilipitiya - Hambanthota</option>
                     </select>
                 </td>
               </tr>

               <tr>
                 <td>
                     <label for="start">
                         Start From
                     </label>
                 </td>
                 <td><input type="text" name="start" class= "reg-item" size="255" required/></td>
               </tr>

               <tr>
                 <td>
                     <label for="end">
                         Reach To
                     </label>
                 </td>
                 <td><input type="text" name="end" class= "reg-item" size="255" required/></td>
               </tr>

               <tr>
                 <td>
                     <label for="date">
                         Date
                     </label>
                 </td>
                 <td><input type="date" name="date" class= "reg-item" size="8" required/></td>
               </tr>

               <tr>
                 <td>
                     <button class="submit_btn" name="submit-ticket">Submit</button>
                 </td>
                 <td>
                     <button class="cancel_btn" name="cancel">Cancel</button>
                 </td>
               </tr>
           </table>

           <script>
               function formData() {

                  let eid = document.forms["ticketfrm"]["eid"].value;
                  if (eid == "" && eid.length <= 10) {
                     alert("E-ticket number must be included maximum 10 characters.");
                     return false;
                }

                  let passengerid = document.forms["ticketfrm"]["passengerid"].value;
                  if (passengerid == "" && passengerid.length <= 10) {
                    alert("Passenger ID must be included maximum 10 characters.");
                    return false;
                }

                let pname = document.forms["ticketfrm"]["pname"].value;
                 if (pname == "") {
                    alert("Passenger's name must be filled.");
                    return false;
                }

                let nadult = document.forms["ticketfrm"]["nadult"].value;
                if(nadult == "") {
                    alert ("Number of adults is required.");
                }else{
                    alert ("Empty column fill with 0.");
                    return false;
                }

                let nchild = document.forms["ticketfrm"]["nchild"].value;
                if(nchild == "") {
                    alert ("Number of children is required.");
                }else{
                    alert ("Empty column fill with 0.");
                    return false;
                }

                let routemap = document.forms["ticketfrm"]["routemap"].value;
                if(routemap == "") {
                    alert ("Select location data.");
                    return false;
                }

                let start = document.forms["ticketfrm"]["start"].value;
                if(start == "") {
                    alert ("Start location must be filled.");
                    return false;
                }

                let end = document.forms["ticketfrm"]["end"].value;
                if(end == "") {
                    alert ("End location must be filled.");
                    return false;
                }

                let date = document.forms["ticketfrm"]["date"].value;
                if(date == "") {
                    alert ("Date must be filled.");
                    return false;
                }
               }

           </script>

</body>
</html>