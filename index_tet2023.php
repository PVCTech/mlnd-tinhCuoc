<!DOCTYPE html>
<html xmlns="”http://www.w3.org/1999/xhtml”" lang="”vi”" xml:lang="”vi”"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>TÍNH GIÁ CƯỚC</title>
<meta name="keywords" content="pvc PLUS, TAXI MAI LINH">
<meta name="description" content="ACTION PROSET">
<meta property="og:title" content="TAXI Mai linh Nam Định - Bảng giá cước">
<meta property="og:type" content="website">
<meta property="og:description" content="Tra giá cước đi taxi và các dịch vụ của Mai Linh Nam Định">
<meta property="og:image" content="#img/logo/icon-share.png">
<meta property="og:site_name" content="Tra giá cước đi taxi và các dịch vụ của Mai Linh Nam Định">
<meta property="og:url" content="http://117.6.86.51/mlnd/banggia/">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
    a {text-decoration:none;}
    .activebt {background-color:#f9f9f9;color:green;border:1px green solid;font-weight:bold;box-shadow:2px 2px 2px rgba(0,0,0,0.3);}
    .DongXe_Button {border-radius:8px;padding:0px 5px 0px 5px;}
    html
    {
        /* background: -webkit-linear-gradient(top left, #25A55E, #9ABE5B); */
    }
    
    .inactivebt {color:rgba(0,0,0,0.6);border:0.5px solid rgba(0,0,0,0.1);}
    .Input_Empty
    {
        color:green;
        background:white;
        border:1px solid green;
        border:0.1px green solid;
    }
    
    .Input_NotEmpty
    {
        color:white;
        background:green;
        border:0.1px rgba(255,255,255,0.2) solid;
    }
    
    .DongXe_Button:active 
    {
        position:relative;
    	top:1px;
    }
    
    .PVCInput 
    {
        width:90%;
        padding:5px;
        margin:5px;
        font-weight:bold;
        font-size:18px;
        border-radius:5px;
        border:0.5px solid green;
        color:green;
    }
    @media only screen and (max-width: 600px) { .Container {width:100%;}}
    @media only screen and (min-width: 601px) { .Container {max-width:500px;}}
    
    .Km_ChonSan 
    {
        width:90%; 
        color:rgba(0,0,0,0.8);
        background: linear-gradient(40deg, #ccffcc 0%, rgba(255,255,255,1) 100%);
        border-radius:5px;
        padding:3px;
        margin:3px;
        text-align:center;
        border:0.5px solid green;
    }
    .Km_Td {width:20%;text-align:center;}
    .Km_Td2 {width:25%;text-align:center;}
    .Km_ChonSan:active 
    {
    	position:relative;
    	top:2px;
    }
        
    .Oto5Cho {width:75px;}
    .Oto4Cho {width:60px;}
    .Oto7Cho {width:80px;}
</style>

<link rel="icon" href="https://mailinh.vn/favicon.ico">

<body background="../hpny.png"><center>
<script>
    $(document).ready(function() {
        $("#btkia").click(function()
			 {
				$("#btkia").removeClass("inactivebt");
				$("#btkia").addClass("activebt");
				
				$("#btvios").removeClass("activebt");
				$("#btvios").addClass("inactivebt");
				$("#btinnova").removeClass("activebt");
				$("#btinnova").addClass("inactivebt");
				
				$("#Xe7Cho").css('fill','rgba(0,0,0,0.1)');
				$("#Xe5Cho").css('fill','rgba(0,0,0,0.1)');
				$("#Xe4Cho").css('fill','#6fbf06');
				
				$(".KinhXe").css('fill',"white");
				$(".KinhXe4Cho").css('fill',"#2e2e2b");
				
				
				$('#Oto4c_BanhXe').css('opacity','1');
				$('#Oto5c_BanhXe').css('opacity','0.2');
				$('#OTo7c_BanhXe').css('opacity','0.2');
				
				$('#Xe4Cho_Caption').css('opacity','1');
				$('#Xe5Cho_Caption').css('opacity','0.2');
				$('#Xe7Cho_Caption').css('opacity','0.2');
			 });
			 
	    $("#btkia").click();
	        
		$("#btvios").click(function()
			  {
				$("#btkia").removeClass("activebt");
				$("#btkia").addClass("inactivebt");
				
				$("#btvios").removeClass("inactivebt");
				$("#btvios").addClass("activebt");
				$("#btinnova").removeClass("activebt");
				$("#btinnova").addClass("inactivebt");
				
				$("#Xe4Cho").css('fill','rgba(0,0,0,0.1)');
				$("#Xe7Cho").css('fill','rgba(0,0,0,0.1)');
				$("#Xe5Cho").css('fill','#6fbf06');
				
				$(".KinhXe").css('fill',"white");
				$(".KinhXe5Cho").css('fill',"#2e2e2b");
				
				$('#Oto4c_BanhXe').css('opacity','0.2');
				$('#Oto5c_BanhXe').css('opacity','1');
				$('#OTo7c_BanhXe').css('opacity','0.2');
				
				$('#Xe4Cho_Caption').css('opacity','0.2');
				$('#Xe5Cho_Caption').css('opacity','1');
				$('#Xe7Cho_Caption').css('opacity','0.2');
			  });
		$("#btinnova").click(function()
			  {
				$("#btkia").removeClass("activebt");
				$("#btkia").addClass("inactivebt");
				
				$("#btvios").removeClass("activebt");
				$("#btvios").addClass("inactivebt");
				$("#btinnova").removeClass("inactivebt");
				$("#btinnova").addClass("activebt");
				
				$("#Xe4Cho").css('fill','rgba(0,0,0,0.1)');
				$("#Xe5Cho").css('fill','rgba(0,0,0,0.1)');
				$("#Xe7Cho").css('fill','#6fbf06');
				
				$(".KinhXe").css('fill',"white");
				$(".KinhXe7Cho").css('fill',"#2e2e2b");
				
				$('#Oto4c_BanhXe').css('opacity','0.2');
				$('#Oto5c_BanhXe').css('opacity','0.2');
				$('#OTo7c_BanhXe').css('opacity','1');
				
				$('#Xe4Cho_Caption').css('opacity','0.2');
				$('#Xe5Cho_Caption').css('opacity','0.2');
				$('#Xe7Cho_Caption').css('opacity','1');
			  });
			  
    })
</script>		  

<div class="Container">
    <center>
    <img src="city.svg?version=2" width="100%" >
    
    <script>
        function formatkq(gia)
        {
        	var giatext = gia.toString();
        	var kq="";
        	if (giatext.length<4){kq = giatext;}
        	else if(giatext.length<7){kq = giatext.substring(0,giatext.length-3) + "." + giatext.substring(giatext.length-3,giatext.length);}
        	else if(giatext.length<10){kq = giatext.substring(0,giatext.length-6) + "." + giatext.substring(giatext.length-6,giatext.length-6+3) + "." + giatext.substring(giatext.length-3,giatext.length);}
        	return kq;
        }
        function tinhcuoccd(kmm)
        {
        	document.getElementById('quangduong').value = kmm;
        	tinhcuoc();
        }
        function setkia()
        {
        	document.getElementById('hieuxekia').checked = true;
        	tinhcuoc();
        }
        function setvios()
        {
        	document.getElementById('hieuxevios').checked = true;
        	tinhcuoc();
        	
        }
        function setinnova()
        {
        	document.getElementById('hieuxeinnova').checked = true;
        	tinhcuoc();
        }
        
        function tinhcuoc() 
        {
        	var hieuxe;
        	if (document.getElementById('hieuxekia').checked) {hieuxe = document.getElementById('hieuxekia').value;}
        	if (document.getElementById('hieuxevios').checked) {hieuxe = document.getElementById('hieuxevios').value;}
        	if (document.getElementById('hieuxeinnova').checked) {hieuxe = document.getElementById('hieuxeinnova').value;}
        	var giamocua, gia20,gia21;
        	if (hieuxe=="kia"){var KmMoCua = 1.4;giamocua=20;gia20=12.8;gia21=11.4;}
        	if (hieuxe=="vios"){var KmMoCua = 1.3;giamocua=20;gia20=14.6;gia21=11.5;}
        	if (hieuxe=="innova"){var KmMoCua = 1.2;giamocua=20;gia20=16.2;gia21=14.6;}
        	var buocnhay1 = Math.round(2000/gia20,0);
        	var buocnhay2 = Math.round(2000/gia21,0);
        	var culy3 = document.getElementById('quangduong').value;
        	
        	
            if (!isNaN(culy3)) 
        	{
        	    if (culy3.length ==0)
        	    {
        	        $('#motchieu').val('');
        	        $('#haichieu').val('');
        	        $('#motchieu').addClass("Input_Empty");
            	    $('#motchieu').removeClass("Input_NotEmpty");
            	    $('#haichieu').addClass("Input_Empty");
            	    $('#haichieu').removeClass("Input_NotEmpty");
        	    }
        	    else
        	    {
            		var culy2= eval(culy3);
            		if (culy2 <=KmMoCua)
            		{
            			var gia1chieu=giamocua*1000;
            		}
            		else
            		{
            			if (culy2 <=20)
            			{
            				var sobuocnhay = parseInt((culy2-KmMoCua)*1000/buocnhay1);
            				var BuocNhayTruoc = 0;
            				if ((culy2-KmMoCua)*1000/buocnhay1 - sobuocnhay > 0) {BuocNhayTruoc = 2000;}
            				var gia1chieu= giamocua*1000 + sobuocnhay*2000 + BuocNhayTruoc;
            				//alert (sobuocnhay);
            				//if ((culy2-KmMoCua)*1000-sobuocnhay*buocnhay1>5){gia1chieu=gia1chieu+2000;}
            			}
            			else
            			{
            				var sobuocnhay1 = parseInt((20-KmMoCua)*1000/buocnhay1);
            				var gia1chieu=giamocua*1000 + sobuocnhay1*2000;
            				var sobuocnhay2 = parseInt((culy2-(KmMoCua+sobuocnhay1*buocnhay1/1000))*1000/buocnhay2);
            				var BuocNhayTruoc2 = 0;
            				if ((culy2-(KmMoCua+sobuocnhay1*buocnhay1/1000))*1000/buocnhay2 - sobuocnhay2 > 0) {BuocNhayTruoc2 = 2000;}
            				gia1chieu=gia1chieu + sobuocnhay2*2000 + BuocNhayTruoc2;
            				//if ((culy2-KmMoCua)*1000-sobuocnhay1*buocnhay1-sobuocnhay2*buocnhay2>5){gia1chieu=gia1chieu+2000;}
            			}
            		}
            		if (!isNaN(gia1chieu)){document.getElementById('motchieu').value=formatkq(gia1chieu);}
            		
            		if (culy2>=25)
            		{
            		    document.getElementById('haichieu').value = formatkq(parseInt((gia1chieu*1.3)/1000)*1000);
            		    $('#haichieu').addClass("Input_NotEmpty");
            	        $('#haichieu').removeClass("Input_Empty");
            		}
            		else
            		{
            		    document.getElementById('haichieu').value = "";
            		    $('#haichieu').addClass("Input_Empty");
        	            $('#haichieu').removeClass("Input_NotEmpty");
            		}
            		$('#motchieu').addClass("Input_NotEmpty");
            	    $('#motchieu').removeClass("Input_Empty");
            	    
        	    }
        	}
        	else
        	{
        	    $('#motchieu').val('');
        	    $('#haichieu').val('');
        	    $('#motchieu').addClass("Input_Empty");
        	    $('#motchieu').removeClass("Input_NotEmpty");
        	    $('#haichieu').addClass("Input_Empty");
        	    $('#haichieu').removeClass("Input_NotEmpty");
        	}
        }
        
        function tinhcuoc2() 
        {
        	var cuocchieuDi, chieungannhanbamuoi,cuocchieuVe,tiengiocho,phicaupha,lephikhac,tongsotien;
        	var cuocchieuDi2, chieungannhanbamuoi2,cuocchieuVe2,tiengiocho2,phicaupha2,lephikhac2,tongsotien2;
        	var CuocChieuDai;
        	
        	cuocchieuDi = $("#cuocchieuDi").val();
        	if (isNaN(cuocchieuDi)) {$("#cuocchieuDi").val('0');}
        	cuocchieuDi2= eval(cuocchieuDi);
        			
        	
        
        	
        	if ( $("#cuocchieuVe").val().length == 0 ) {cuocchieuVe2 =0;} 
        	else 
        	{
        		cuocchieuVe = $("#cuocchieuVe").val();
        		cuocchieuVe2= eval(cuocchieuVe);
        	}
        	
        	if (cuocchieuDi2 > cuocchieuVe2)
        	{
            	chieungannhanbamuoi = Math.round(cuocchieuVe2 * 30/100,0);
            	CuocChieuDai = cuocchieuDi2;
        	}
        	else
        	{
        	    chieungannhanbamuoi = Math.round(cuocchieuDi2 * 30/100,0);
        	    CuocChieuDai = cuocchieuVe2;
        	}
        	
        	$("#chieungannhanbamuoi").val(chieungannhanbamuoi);
        	
        	if ( $("#tiengiocho").val().length == 0) {tiengiocho2 =0;}
        	else 
        	{
        		tiengiocho = $("#tiengiocho").val();
        		tiengiocho2= eval(tiengiocho);
        	}
        	
        	
        	if ( $("#phicaupha").val().length == 0) {phicaupha2 =0;}
        	else 
        	{
        		phicaupha = $("#phicaupha").val();
        		phicaupha2= eval(phicaupha);
        	}
        	
        	if ( $("#lephikhac").val().length == 0) {lephikhac2 =0;}
        	else 
        	{
        		lephikhac = $("#lephikhac").val();
        		lephikhac2= eval(lephikhac);
        	}
        	
        	
        	tongsotien = chieungannhanbamuoi + CuocChieuDai + tiengiocho2 + phicaupha2+ lephikhac2;
        	tongsotien2 = tongsotien;
        	tongsotien2 = Math.round(tongsotien2,0)*1000;
        if ($("#cuocchieuVe").val().length > 0 && $("#cuocchieuDi").val().length > 0) {$("#tongsotien").val(formatkq(tongsotien2)+'đ');} else {$("#tongsotien").val('');}
        }
    </script>
    
        
    <div style="width:100%;border-radius:5px;padding:0px;margin-top:15px;background: -webkit-linear-gradient(top left, #e00000, #a80000);border:1px solid green;background-image: url('../bg1.jpg');">
        <center>  
            <div style="margin:20px;position:relative;"><center>
                <table style="width:100%;">
                    <tr>
                        <td>
                            <font color="white">Cước 1 chiều:</font>
                        </td>
                        <td>
                            <font color="white">Cước chiều đi + về:</font>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" id="motchieu" class="Input_Empty" style="font-weight:bold;padding:8px;border-radius:5px;width:90%;font-size:20px;" readonly />
                        </td>
                        <td>
                            <input type="text" id="haichieu" class="Input_Empty" style="font-weight:bold;padding:8px;border-radius:5px;width:90%;font-size:20px;" readonly />  
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"> <center>
                            <table style="width:95%;">
                                <tr>
                                    <td style="width:35%;"></td>
                                    <td>
                                        <input type="text" id="quangduong" maxlength="6" style="font-weight:bold;border:0.5px green solid;padding:8px;border-radius:5px;width:82%;color:green;font-size:24px;text-align:center;"  onkeyup="tinhcuoc();"/>
                                    </td>
                                    <td style="width:35%;"><font color="white"> km</font></td>
                                </tr>
                            </table></center>
                        </td>
                    </tr>
                </table>
                
        	    <table style="width:100%;">
                    <tr>
                	  <td style="width:33%;"><center>
                	      <input type="radio" style="display:none;" name="hx" id="hieuxekia" value="kia" checked onclick="tinhcuoc();">
                	        <div class="DongXe_Button activebt" id="btkia" onClick="setkia();" style="height:65px;background:white;">
                	            <svg class="Oto4Cho" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="none" x="0" y="0" width="120" height="70" viewbox = "0 0 120 70">
	                                <g id="Oto4c1">
                                		<path fill="#6fbf06"  id="Xe4Cho" stroke="none" d="M15,25 m3,-6 c6 -10, 8 -10, 12  -14 c10 -4,10 -4,35 -3 c8 1,10 3,27 20 c10 0,20 5,22 10 v14 h-19 a10,10 1,0,0 -24,0 h-28 a10,10 1,0,0 -24,0 h-5 v-20"/>
                                		
                                		<path class="KinhXe KinhXe4Cho" fill="#2e2e2b" d="M35,22 c0 -5, -5 -13, 18 -15 l2,15"/>
                                		<path class="KinhXe KinhXe4Cho" fill="#2e2e2b" d="M59,22 l-2,-15 c9 0, 17 0, 25 15	"/>
                                		
                                		<g id="Oto4c_BanhXe">
                                			<circle cx="31" cy="45" r="10.5" fill="#2e2e2b"/>
                                			<circle cx="31" cy="45" r="6.5" fill="#a7a79d"/> 
                                			<circle cx="31" cy="45" r="2" fill="#707068"/>
                                		</g>
                                		<use xlink:href="#Oto4c_BanhXe" x="52" y="0" />
                                		<path fill="#ffefbd" d="M100,28 s10,-3 10,5 l-8,-2"/>
                                	</g>
                                	<text fill="rgba(0,0,0,0.6)" x="33" y="68" font-size="16" id="Xe4Cho_Caption">Xe 4 chỗ</text>
                                </svg>
                	        </div>
                	  </td>
                	  <td style="width:33%;text-align:center;">
                	      <input type="radio" style="display:none;" name="hx" id="hieuxevios" value="vios" onclick="tinhcuoc();"><center>
                	        <div class="DongXe_Button inactivebt" id="btvios" onClick="setvios();" style="height:65px;background:white;">
                	        
                	        <svg class="Oto5Cho" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="none" x="0" y="0" width="120" height="70" viewbox = "0 0 120 70">
                            	<g id="Oto4c1">
                            		<path fill="#6fbf06"  id="Xe5Cho" stroke="none" d="M5,25 c1 -5, 5 -5,13 -6 c6 -10, 8 -10, 12  -14 c10 -4,10 -4,35 -3 c8 1,10 3,27 20 c10 0,20 5,22 10 v14 h-19 a10,10 1,0,0 -24,0 h-28 a10,10 1,0,0 -24,0 h-15 v-20"/>
                            		
                            		<path class="KinhXe KinhXe5Cho" fill="#2e2e2b" d="M35,22 c0 -5, -5 -13, 18 -15 l2,15"/>
                            		<path class="KinhXe KinhXe5Cho" fill="#2e2e2b" d="M59,22 l-2,-15 c9 0, 17 0, 25 15	"/>
                            		
                            		<g id="Oto5c_BanhXe">
                            			<circle cx="31" cy="45" r="10.5" fill="#2e2e2b"/>
                            			<circle cx="31" cy="45" r="6.5" fill="#a7a79d"/>
                            			<circle cx="31" cy="45" r="2" fill="#707068"/>
                            		</g>
                            		<use xlink:href="#Oto5c_BanhXe" x="52" y="0" />
                            		<path fill="#ffefbd" d="M100,28 s10,-3 10,5 l-8,-2"/>
                            	</g>
                            	<text fill="rgba(0,0,0,0.6)" x="30" y="68" font-size="14" id="Xe5Cho_Caption">Xe 5 chỗ</text>
                            </svg>
                	    </div>
                	  </td>
                	  <td style="width:34%;text-align:center;"><center>
                	      <input type="radio" style="display:none;" name="hx" id="hieuxeinnova" value="innova" onclick="tinhcuoc();">
                    	    <div class="DongXe_Button inactivebt" id="btinnova" onClick="setinnova();" style="height:65px;background:white;">
                    	          <svg  class="Oto7Cho" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="none" x="0" y="0" width="100" height="70" viewbox = "0 0 100 70">
                                	<g id="OTo7c1">
                                		<path id="Xe7Cho" fill="#6fbf06" 
                                		d="M15,40 
                                		l-3,-2
                                		c-2 -2, -1 -1 , -2 -3 
                                		l0,-17 
                                		c 5 -12, 8 -12 , 12 -15
                                		l28,0
                                		c8 0, 12 3 , 22 12
                                		c10 0, 15 2, 18 8 
                                		l2,12 l-4 4 l-3 0
                                		c2 -14, -24 -22, -24,2
                                		l-23,-1
                                		c5 -16, -24 -22, -23,0
                                		"/>
                                		
                                		<path class="KinhXe KinhXe7Cho" fill="#2e2e2b" d="M39,19 l-10,0 c-2 0, -8 0, 0 -11 l8,0	l2,11" />
                                		
                                		<path class="KinhXe KinhXe7Cho" fill="#2e2e2b" d="M46,19 l-2,-11 c9 0, 17 0, 19 10.5"/>
                                		<path fill="#ffefbd" d="M80,17 s10,-3 10,5 l-8,-2"/>
                                		
                                		<g id="OTo7c_BanhXe">
                                			<circle cx="27" cy="37" r="10" fill="#2e2e2b"/>
                                			<circle cx="27" cy="37" r="5" fill="#a7a79d"/>
                                			<circle cx="27" cy="37" r="2" fill="#707068"/>
                                		</g>
                                		<use xlink:href="#OTo7c_BanhXe" x="46" y="0" />
                                	</g>
                                	<text fill="rgba(0,0,0,0.6)" x="30" y="60" font-size="12" id="Xe7Cho_Caption">Xe 7 chỗ</text>
                                </svg>
                	        </div>
                	  </td>
                	</tr>
                </table>
                <table style="width:100%;">
                    <tr>
                        <td class="Km_Td">
                            <div class="Km_ChonSan" id="km10" onClick="tinhcuoccd(10);">10</div>
                        </td>
                        <td class="Km_Td">
                            <div class="Km_ChonSan" id="km20"  onClick="tinhcuoccd(20);">20</div>
                        </td>
                        <td class="Km_Td">
                            <div class="Km_ChonSan" id="km30"  onClick="tinhcuoccd(30);">30</div>
                        </td>
                        <td class="Km_Td">
                            <div class="Km_ChonSan" id="km40"  onClick="tinhcuoccd(40);">40</div>
                        </td>
                        <td class="Km_Td">
                            <div class="Km_ChonSan" id="km50"  onClick="tinhcuoccd(50);">50</div>
                        </td>
                        
                    </tr>
                    
                    <tr>
                        <td class="Km_Td">
                            <div class="Km_ChonSan" id="km60"  onClick="tinhcuoccd(60);">60</div>
                        </td>
                        <td class="Km_Td">
                            <div class="Km_ChonSan" id="km70"  onClick="tinhcuoccd(70);">70</div>
                        </td>
                        <td class="Km_Td">
            		        <div class="Km_ChonSan" id="km80"  onClick="tinhcuoccd(80);">80</div>
                        </td>
                        <td class="Km_Td">
                            <div class="Km_ChonSan" id="km90"  onClick="tinhcuoccd(90);">90</div>
                        </td>
                        <td class="Km_Td">
                            <div class="Km_ChonSan" id="km100"  onClick="tinhcuoccd(100);">100</div>
                        </td>
                        
                    </tr>
                    
                    <tr>
                        <td colspan="5"><center>
                            <table style="width:83%;">
                                <tr>
                                    <td class="Km_Td2">
                                        <div class="Km_ChonSan" id="km120"  onClick="tinhcuoccd(120);">120</div>
                                    </td>
                                    <td class="Km_Td2">
                                        <div class="Km_ChonSan" id="km150"  onClick="tinhcuoccd(150);">150</div>
                                    </td>
                                    <td class="Km_Td2">
                                        <div class="Km_ChonSan" id="km180"  onClick="tinhcuoccd(180);">180</div>
                                    </td>
                                    <td class="Km_Td2">
                                        <div class="Km_ChonSan" id="km200"  onClick="tinhcuoccd(200);">200</div>
                                    </td>
                                </tr>
                            </table>
                            </center>
                        </td>
                    </tr>
        		</table>
        		<div style="position:absolute;bottom:-18px;left:5px;width:90%;color:white;">
            	    <marquee scrollamount="4">Cuốc khách đi 2 chiều được <b>giảm giá 70% chiều ngắn, miễn phí 2 tiếng giờ chờ </b> nếu mỗi chiều từ <b>25km trở lên</b>. Nếu cuốc khách 2 chiều đi về trong ngày, mỗi chiều <b>70km trở lên</b>, được miễn phí hoàn toàn giờ chờ.</marquee>
            	</div>
        	</div>
        </center>
    </div>
    
    
    
    
    
    <div style="width:100%;border-radius:5px;border:1px solid green;margin-top:15px;background: -webkit-linear-gradient(top left, #e00000, #a80000);color:green;background-image: url('../bg1.jpg');"><center>
    	<div style="border-radius:8px;padding:5px;margin:10px;">
    		<div style="width:90%"><BR>
    			<center><div style="text-align:center;font-weight:bold;color:white;">BẢNG TÍNH CUỐC ĐI 2 CHIỀU</div></center>
    			<table width="95%" style="padding:3px;">
    				<tr>
    					<td>
    						<input type="text" class="PVCInput" id="cuocchieuDi" maxlength="4" placeholder="Chiều đi" onkeyup="tinhcuoc2();"/>
    					</td>
    					<td style="width:5px;"></td>
    					<td>
    						<input type="text" class="PVCInput" style="background:#f2f2f2;" placeholder="30%" id="chieungannhanbamuoi" readonly />
    					</td>
    				</tr>
    				<tr>
    					<td>
    						<input type="text" class="PVCInput" id="cuocchieuVe" maxlength="4" placeholder="chiều vê" onkeyup="tinhcuoc2();"/>
    					</td>
    					<td style="width:5px;"></td>
    					<td>
    						<input type="text" class="PVCInput" id="tiengiocho" maxlength="4" placeholder="giờ chờ" onkeyup="tinhcuoc2();"/>
    					</td>
    				</tr>
    				<tr>
    					<td>
    						<input type="text" class="PVCInput" id="phicaupha" maxlength="4" placeholder="cầu phà" onkeyup="tinhcuoc2();"/>
    					</td>
    					<td style="width:5px;"></td>
    					<td>
    						<input type="text" class="PVCInput" id="lephikhac" maxlength="4" placeholder="phí khác" onkeyup="tinhcuoc2();"/>
    					</td>
    				</tr>
    				<tr>
    					<td colspan="3"><center>
    						<input type="text" class="PVCInput"  style="font-size:22px;text-align:center;" placeholder="Tổng" id="tongsotien" readonly />
    					</td>
    				</tr>
    			</table>
    		</div>
    	</div>
    </div>
    
    
    <div style="width:100%;border-radius:5px;border:1px solid green;margin-top:15px;background:white;color:green;"><center>
    	<div style="border-radius:8px;padding:5px;margin:10px;">
    		<div style="width:90%">
    			<center><a href="https://www.csgt.vn/m/tra-cuu-phuong-tien-vi-pham.html" target="_blank"><div style="text-align:center;"><font color="green">Tra cứu phạt nguội Giao thông</font></div></a></center>
    		</div>
    	</div>
    </div>
    </center>
    
    
    <style>
        .Calling {width:45px;}
    </style>
    
    <a href="../">
        <div style="position:fixed;right:20px;bottom:30px;padding:0px;border:1px solid green;border-radius:5px;background:white;padding:2px 5px 0px 5px;">
            <img src="../goixe/calling.svg?version=2" style="" height="45px">
        </div>
    </a>
    
    
    <div style="text-align:left;"><center>
        <h4><span style="color:rgba(255,255,255,1)"> CÔNG TY TNHH MAI LINH NAM ĐỊNH</span></h4>
    </div>
    <div style="width:100%;background: -webkit-linear-gradient(top left, #25A55E, #9ABE5B);color:white;text-align:center;"><img src="../goixe/vitri.svg" width="20px"> 186 Thanh Bình - P. Hạ Long - NĐ<br><?php include ($_SERVER['DOCUMENT_ROOT'].'/counters/count_giacuoc.php'); ?></div>
</div>